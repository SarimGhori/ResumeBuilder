<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function index()
    {
        $educations = Education::all();
        return view('education.index', compact('educations'));
    }

    public function create()
    {
        return view('education.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'resume_id'  => 'required|exists:resumes,id',
            'degree'     => 'required|string|max:255',
            'institute'  => 'required|string|max:255',
            'start_year' => 'required|integer',
            'end_year'   => 'nullable|integer',
            'grade'      => 'nullable|string|max:50',
        ]);

        Education::create($validated);

        return redirect()->route('education.index')
            ->with('success', 'Education added successfully');
    }

    public function show(Education $education)
    {
        return view('education.show', compact('education'));
    }

    public function edit(Education $education)
    {
        return view('education.edit', compact('education'));
    }

    public function update(Request $request, Education $education)
    {
        $validated = $request->validate([
            'resume_id'  => 'required|exists:resumes,id',
            'degree'     => 'required|string|max:255',
            'institute'  => 'required|string|max:255',
            'start_year' => 'required|integer',
            'end_year'   => 'nullable|integer',
            'grade'      => 'nullable|string|max:50',
        ]);

        $education->update($validated);

        return redirect()->route('education.index')
            ->with('success', 'Education updated successfully');
    }

    public function destroy(Education $education)
    {
        $education->delete();

        return redirect()->route('education.index')
            ->with('success', 'Education deleted successfully');
    }
}
