@extends('layouts.dashboard')

@section('content')

<h2 class="page-header">Show Project</h2>

<p>{{ link_to_route('projects.index', 'Return to all projects') }} </p>

<table class="table table-striped table-hover">
	<thead>
		<tr>
			<th>Num</th>
			<th>Title</th>
			<th>Description</th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>{{ $project->id }}</td>
			<td>{{ $project->title }}</td>
			<td>{{ $project->proj_desc }}</td>
			<td>{{ link_to_route('projects.edit', 'Edit', array($project->id), array('class' => 'btn btn-info')) }}</td>
			<td>
				{{ Form::open(array('method' => 'DELETE', 'route' => array('projects.destroy', $project->id))) }}
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