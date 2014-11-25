@extends('layouts.dashboard')

@section('content')

<h2 class="page-header">Edit User</h2>

{{ Form::model($user, array('method' => 'PATCH', 'route' => array('users.update', $user->id))) }}

<ul>
	<li>
		{{ Form::label('username', 'Username: ') }} <br>
		{{ Form::text('username') }}
	</li><br>
	<li>
		{{ Form::label('email', 'Email: ') }} <br>
		{{ Form::text('email') }}
	</li><br>
	<li>
		{{ Form::label('password', 'Password: ') }} <br>
		{{ Form::text('password') }}
	</li><br>
    <li>
		{{ Form::label('role_id', 'Role:') }} <br>
		{{ Form::select('role_id', Role::lists('title', 'id')) }}

	</li><br>
	<li>
		{{ Form::submit('Update', array('class' => 'btn btn-success', 'onClick' => 'return confirm("Are you sure?");')) }}
		{{ link_to_route('users.show', 'Cancel', $user->id, array('class' => 'btn btn-warning')) }}
	</li>
</ul>
{{ Form::close() }}

@if($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:messge</li>')) }}
	</ul>
@endif

@stop