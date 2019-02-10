<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{

	public function __construct() {
		$this->middleware('auth');
	}

	public function index(){

    	$projects = Project::where('owner_id', auth()->id())->get();


    	return view('projects.index', compact('projects'));
    }

    public function create(){
    	return view('projects.create');
    }

    public function store(){

    	$attributes = request()->validate([
    		'title' => ['required', 'min:3'],
		    'description' => ['required', 'min:3']
	    ]);

    	$attributes['owner_id'] = auth()->id();

//    	Project::create(request(['title', 'description']));
    	Project::create($attributes);

    	return redirect('/projects');
    }

    public function show(Project $project){
		return view('projects.show', compact('project'));
    }

	/**
	 * @param \App\Project $project
	 *
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function update(Project $project){
		$project->title = request('title');
		$project->description = request('description');
		$project->save();
		return redirect('/projects');
    }

    public function destroy(Project $project){
	    $project->delete();
	    return redirect('/projects');
    }

    public function edit(Project $project){
		return view('projects.edit', compact('project'));
    }
}
