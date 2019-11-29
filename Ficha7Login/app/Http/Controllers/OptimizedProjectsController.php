<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project; #Model

class OptimizedProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('auth')->only(['store', 'update']); -> only uses auth on store and update
        // $this->middleware('auth')->except(['show']) -> add auth on all functions exept show
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::where('owner_id', auth()->id())->get();

        return view ('projects.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = request()->validate(['title' => ['required', 'min:2','max:255'], 'description' => 'required']);
        $validated['owner_id'] = auth()->id();
        Project::create($validated);
    
        return redirect('/projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //abort_unless(auth()->user()->owns($project), 403);
        $this->authorize('update', $project);
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Project $project)
    {
        $validated = request()->validate(['title' => ['required', 'min:2','max:255'], 'description' => 'required']);

        $project->update($validated);
        
        return redirect('/projects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect('/projects');
    }

    public function first(){
        $project = Project::all()->first();
        return view('projects.show', compact('project'));
    }

    public function last(){
        $project = Project::all()->last();
        return view('projects.show', compact('project'));
    }
}
