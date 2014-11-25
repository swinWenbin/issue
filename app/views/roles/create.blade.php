@extends('layouts.dashboard')

@section('content')

<h2 class="page-header">Create Role</h2>

{{ Form::open(array('route' => 'roles.store')) }}
<ul>
	<li>
		{{ Form::label('title', 'Title:') }} <br>
		{{ Form::text('title') }}
	</li><br>
	<li>
		{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
	</li>
</ul>
{{ Form::close() }}

@if($errors->any())
<ul>
	{{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>
@endif

@stop
