<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::all();
        return view('experience.index', compact('experiences'));
    }

    public function create()
    {
        return view('experience.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'resume_id'   => 'required|exists:resumes,id',
            'company'     => 'required|string|max:255',
            'position'    => 'required|string|max:255',
            'start_date'  => 'required|date',
            'end_date'    => 'nullable|date',
            'description' => 'nullable|string',
        ]);

        Experience::create($validated);

        return redirect()->route('experience.index')
            ->with('success', 'Experience added successfully');
    }

    public function show(Experience $experience)
    {
        return view('experience.show', compact('experience'));
    }

    public function edit(Experience $experience)
    {
        return view('experience.edit', compact('experience'));
    }

    public function update(Request $request, Experience $experience)
    {
        $validated = $request->validate([
            'resume_id'   => 'required|exists:resumes,id',
            'company'     => 'required|string|max:255',
            'position'    => 'required|string|max:255',
            'start_date'  => 'required|date',
            'end_date'    => 'nullable|date',
            'description' => 'nullable|string',
        ]);

        $experience->update($validated);

        return redirect()->route('experience.index')
            ->with('success', 'Experience updated successfully');
    }

    public function destroy(Experience $experience)
    {
        $experience->delete();

        return redirect()->route('experience.index')
            ->with('success', 'Experience deleted successfully');
    }
}