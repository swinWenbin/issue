@extends('layouts.dashboard')

@section('content')

<h2 class="page-header">Edit Status</h2>

{{ Form::model($status, array('method' => 'PATCH', 'route' => array('status.update', $status->id))) }}

<ul>
	<li>
		{{ Form::label('title', 'Title: ') }} <br>
		{{ Form::text('title') }}
	</li><br>
	
	<li>
		{{ Form::submit('Update', array('class' => 'btn btn-success')) }}
		{{ link_to_route('status.show', 'Cancel', $status->id, array('class' => 'btn btn-warning')) }}
	</li>
</ul>
{{ Form::close() }}

@if($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:messge</li>')) }}
	</ul>
@endif

@stop