@extends('layouts.dashboard')

@section('content')

<h2 class="page-header">Create User</h2>

{{ Form::open(array('route' => 'users.store')) }}
<ul>
	<li>
		{{ Form::label('username', 'Username:') }} <br>
		{{ Form::text('username') }}
	</li><br>
	<li>
		{{ Form::label('email', 'Email:') }} <br>
		{{ Form::text('email') }}
	</li><br>
	<li>
		{{ Form::label('password', 'Password:') }} <br>
		{{ form::text('password') }}
	</li><br>
	<li>
		{{ Form::label('role_id', 'Role:') }} <br>
		{{ Form::select('role_id', Role::lists('title', 'id')) }}

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