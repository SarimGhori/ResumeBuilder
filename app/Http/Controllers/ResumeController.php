<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index()
    {
        $resumes = Resume::all();
        return view('resume.index', compact('resumes'));
    }

    public function create()
    {
        return view('resume.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email'     => 'required|email',
            'phone'     => 'required|string|max:20',
            'address'   => 'nullable|string',
            'summary'   => 'nullable|string',
        ]);

        Resume::create($validated);

        return redirect()->route('resume.index')
            ->with('success', 'Resume created successfully');
    }

    public function show(Resume $resume)
    {
        $resume->load(['educations', 'experiences', 'skills']);

        return view('resume.show', compact('resume'));
    }

    public function edit(Resume $resume)
    {
        return view('resume.edit', compact('resume'));
    }

    public function update(Request $request, Resume $resume)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email'     => 'required|email',
            'phone'     => 'required|string|max:20',
            'address'   => 'nullable|string',
            'summary'   => 'nullable|string',
        ]);

        $resume->update($validated);

        return redirect()->route('resume.index')
            ->with('success', 'Resume updated successfully');
    }

    public function destroy(Resume $resume)
    {
        $resume->delete();

        return redirect()->route('resume.index')
            ->with('success', 'Resume deleted successfully');
    }
}
