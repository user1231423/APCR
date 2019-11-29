<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project; #Model

class ProjectsController extends Controller
{
    public function __contruct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $projects = Project::all();

        return view ('projects.index',['projects' => $projects]);
    }

    public function create(){
        return view('projects.create');
    }

    public function store(){
        $project = new Project();

        $project->title = request('title');
        $project->description = request('description');

        $project->save();

        return redirect('/projects');
    }

    public function show($id){
        $project = Project::findOrFail($id);
        return view('projects.show',['project' => $project]);
    }

    public function edit($id){
        $project = Project::findOrFail($id);
        return view('projects.edit', compact('project'));
    }

    public function update($id)
    {
        $project = Project::find($id);

        $project->title = request('title');
        $project->description = request('description');

        $project->save();

        return redirect('/projects');
    }

    public function destroy($id)
    {
        $project = Project::find($id);

        $project->delete();

        return redirect('/projects');
    }


}
