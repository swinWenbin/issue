@extends('layouts.dashboard')

@section('content')

<h2 class="page-header">Create Status</h2>

{{ Form::open(array('route' => 'status.store')) }}
<ul>
	
	<li>
		{{ Form::label('title', 'Title:') }} <br>
		{{ Form::textarea('title') }}
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