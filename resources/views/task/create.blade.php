@extends('app')
 
@section('content')
    <h2>Create Task for Project "{{ $project->name }}"</h2>
 
    {!! Form::model(new GazGuzzler\Task, ['route' => ['project.task.store', $project->slug], 'class'=>'']) !!}
        @include('task/partials/_form', ['submit_text' => 'Create Task'])
    {!! Form::close() !!}
@endsection