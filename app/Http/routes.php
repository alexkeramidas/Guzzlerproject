<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::model('task', 'Task');
Route::model('project', 'Project');
 
Route::bind('task', function($value, $route){
	return GazGuzzler\Task::whereSlug($value)->first();
});
Route::bind('project', function($value, $route){
	return GazGuzzler\Project::whereSlug($value)->first();
});

Route::resource('project', 'ProjectsController');
Route::resource('project.task', 'TasksController');

