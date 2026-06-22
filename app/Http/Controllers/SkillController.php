<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::all();
        return view('skill.index', compact('skills'));
    }

    public function create()
    {
        return view('skill.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'resume_id'  => 'required|exists:resumes,id',
            'skill_name' => 'required|string|max:255',
            'skill_level' => 'required|string|max:50',
        ]);

        Skill::create($validated);

        return redirect()->route('skill.index')
            ->with('success', 'Skill added successfully');
    }

    public function show(Skill $skill)
    {
        return view('skill.show', compact('skill'));
    }

    public function edit(Skill $skill)
    {
        return view('skill.edit', compact('skill'));
    }

    public function update(Request $request, Skill $skill)
    {
        $validated = $request->validate([
            'resume_id'  => 'required|exists:resumes,id',
            'skill_name' => 'required|string|max:255',
            'skill_level' => 'required|string|max:50',
        ]);

        $skill->update($validated);

        return redirect()->route('skill.index')
            ->with('success', 'Skill updated successfully');
    }

    public function destroy(Skill $skill)
    {
        $skill->delete();

        return redirect()->route('skill.index')
            ->with('success', 'Skill deleted successfully');
    }
}