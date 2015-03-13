<?php namespace GazGuzzler\Http\Controllers;
use Input;
use Redirect;
use GazGuzzler\Project;
use GazGuzzler\Http\Requests;
use GazGuzzler\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProjectsController extends Controller {
	
	protected $rules = [
		'name' => ['required', 'min:3'],
		'slug' => ['required'],
	];

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$projects = Project::all();
		return view('project.index', compact('projects'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view ('project.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * 
	 * @param \Illuminate\Http\Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$this->validate($request, $this->rules);

		$input = Input::all();
		Project::create( $input );
	 
		return Redirect::route('project.index')->with('message', 'Project created');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  Project $project
	 * @return Response
	 */
	public function show(Project $project)
	{
		return view('project.show', compact('project'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  Project $project
	 * @return Response
	 */
	public function edit(Project $project)
	{
		return view('project.edit', compact('project'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \App\Project $project
	 * @param \Illuminate\Http\Request $request
	 * @return Response
	 */
	public function update(Project $project)
	{
		$this->validate($request, $this->rules);

		$input = array_except(Input::all(), '_method');
		$project->update($input);
	 
		return Redirect::route('project.show', $project->slug)->with('message', 'Project updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  Project $project
	 * @return Response
	 */
	public function destroy(Project $project)
	{
		$project->delete();
	 
		return Redirect::route('project.index')->with('message', 'Project deleted.');
	}

}
