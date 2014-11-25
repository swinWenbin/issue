@extends('layouts.dashboard')

@section('content')

<h2 class="page-header">Edit Role</h2>

{{ Form::model($role, array('method' => 'PATCH', 'route' => array('roles.update', $role->id))) }}

<ul>
	<li>
		{{ Form::label('title', 'Title: ') }} <br>
		{{ Form::text('title') }}
	</li><br>
	<li>
		{{ Form::submit('Update', array('class' => 'btn btn-success')) }}
		{{ link_to_route('roles.show', 'Cancel', $role->id, array('class' => 'btn btn-warning')) }}
	</li>
</ul>
{{ Form::close() }}

@if($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:messge</li>')) }}
	</ul>
@endif

@stop