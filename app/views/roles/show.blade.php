@extends('layouts.dashboard')

@section('content')

<h2 class="page-header">Show Role</h2>

<p>{{ link_to_route('roles.index', 'Return to all roles') }} </p>

<table class="table table-striped table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Title</th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>{{ $role->id }}</td>
			<td>{{ $role->title }}</td>
			<td>{{ link_to_route('roles.edit', 'Edit', array($role->id), array('class' => 'btn btn-info')) }}</td>
			<td>
				{{ Form::open(array('method' => 'DELETE', 'route' => array('roles.destroy', $role->id))) }}
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