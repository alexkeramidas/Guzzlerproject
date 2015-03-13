<?php namespace GazGuzzler\Http\Controllers;

use Input;
use Redirect;
use GazGuzzler\Task;
use GazGuzzler\Project;
use GazGuzzler\Http\Requests;
use GazGuzzler\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TasksController extends Controller {
	
	protected $rules = [
		'name' => ['required', 'min:3'],
		'slug' => ['required'],
		'description' => ['required'],
	];

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Project $project)
	{
		return view('task.index', compact('project'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Project $project)
	{
		return view('task.create', compact('project'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \App\Project $project
	 * @param \Illuminate\Http\Request $request
	 * @return Response
	 */
	public function store(Project $project, Request $request)
	{
		$this->validate($request, $this->rules);

		$input = Input::all();
		$input['project_id'] = $project->id;
		Task::create( $input );
	 
		return Redirect::route('project.show', $project->slug)->with('Task created.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Project $project, Task $task)
	{
		return view('task.show', compact('project', 'task'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Project $project, Task $task)
	{
		return view('task.edit', compact('project', 'task'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \App\Project $project
	 * @param  \App\Task    $task
	 * @param \Illuminate\Http\Request $request
	 * @return Response
	 */
	public function update(Project $project, Task $task, Request $request)
	{
		$this->validate($request, $this->rules);

		$input = array_except(Input::all(), '_method');
		$task->update($input);
	 
		return Redirect::route('project.tasks.show', [$project->slug, $task->slug])->with('message', 'Task updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Project $project, Task $task)
	{
		$task->delete();
	 
		return Redirect::route('project.show', $project->slug)->with('message', 'Task deleted.');
	}

}
