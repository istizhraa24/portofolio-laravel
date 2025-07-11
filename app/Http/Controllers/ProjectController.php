<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function home()
    {
        $projects = Project::latest()->take(3)->get();
        return view('home', compact('projects'));
    }

    public function index()
    {
        $projects = Project::latest()->get();
        return view('projects', compact('projects'));
    }

    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('projects.show', compact('project'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
        ]);

        Project::create($request->only('title', 'description'));

        return redirect()->route('projects.index');
    }

    public function destroy($id)
    {
        Project::destroy($id);
        return redirect()->route('projects.index');
    }
  

    public function edit($id)
{
    $project = \App\Models\Project::findOrFail($id);
    return view('projects.edit', compact('project'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required|max:255',
        'description' => 'nullable',
    ]);

    $project = \App\Models\Project::findOrFail($id);
    $project->update([
        'title' => $request->title,
        'description' => $request->description,
    ]);

    return redirect()->route('projects.index')->with('success', 'Proyek berhasil diperbarui.');
}

}
