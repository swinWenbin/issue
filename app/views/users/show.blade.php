@extends('layouts.dashboard')

@section('content')

<h2 class="page-header">Show User</h2>

<p>{{ link_to_route('users.index', 'Return to all users') }} </p>

<table class="table table-striped table-hover">
	<thead>
		<tr>
			<th>Num</th>
			<th>Username</th>
			<th>Email</th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>{{ $user->id }}</td>
			<td>{{ $user->username }}</td>
			<td>{{ $user->email }}</td>
			<td>{{ link_to_route('users.edit', 'Edit', array($user->id), array('class' => 'btn btn-info')) }}</td>
			<td>
				{{ Form::open(array('method' => 'DELETE', 'route' => array('users.destroy', $user->id))) }}
					{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
				{{ Form::close() }}
			</td>
		</tr>
	</tbody>
</table>



@if($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:messge</li>')) }}
	</ul>
@endif

@stop