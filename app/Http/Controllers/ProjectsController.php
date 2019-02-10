<?php

namespace App\Http\Controllers;

use App\Mail\ProjectCreated;
use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{

	public function __construct() {
		$this->middleware('auth');
	}

	public function index(){
    	return view('projects.index', [
    		'projects' => auth()->user()->projects
	    ]);
    }

    public function create(){

    	return view('projects.create');
    }

    public function store(){
    	$attributes = $this->validateProject();

    	$attributes['owner_id'] = auth()->id();

    	$project = Project::create($attributes);
    	return redirect('/projects');
    }

    public function show(Project $project){
//		abort_if($project->owner_id !== auth()->id(), 403);

	    $this->authorize('update', $project);

		return view('projects.show', compact('project'));
    }

	/**
	 * @param \App\Project $project
	 *
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 * @throws \Illuminate\Auth\Access\AuthorizationException
	 */
	public function update(Project $project){
		$this->authorize('update', $project);
		$project->update($this->validateProject());
		return redirect('/projects');
    }

	/**
	 * @param \App\Project $project
	 *
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 * @throws \Illuminate\Auth\Access\AuthorizationException
	 */
	public function destroy(Project $project){
	    $this->authorize('update', $project);
	    $project->delete();
	    return redirect('/projects');
    }

    public function edit(Project $project){
	    $this->authorize('update', $project);
		return view('projects.edit', compact('project'));
    }

    protected function validateProject(){
		return request()->validate([
			'title' => ['required', 'min:3'],
			'description' => ['required', 'min:3']
		]);
    }
}
