@extends('layouts.dashboard')

@section('content')

<h2 class="page-header">Edit Project</h2>

{{ Form::model($project, array('method' => 'PATCH', 'route' => array('projects.update', $project->id))) }}

<ul>
	<li>
		{{ Form::label('title', 'Title: ') }} <br>
		{{ Form::text('title') }}
	</li><br>

	<li>
		{{ Form::label('proj_desc', 'Desc:') }} <br>
		{{ Form::textarea('proj_desc') }}
	</li><br>
	<li>



	<li>
		{{ Form::submit('Update', array('class' => 'btn btn-success')) }}
		{{ link_to_route('projects.show', 'Cancel', $project->id, array('class' => 'btn btn-warning')) }}
	</li>
</ul>
{{ Form::close() }}

@if($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:messge</li>')) }}
	</ul>
@endif

@stop