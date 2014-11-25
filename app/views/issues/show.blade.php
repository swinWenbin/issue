@extends('layouts.dashboard')

@section('content')

<h2 class="page-header">Show Issue</h2>

<p>{{ link_to_route('issues.index', 'Return to all issues') }} </p>

<table class="table table-striped table-hover">
	<thead>
		<tr>
			<th>Num</th>
			<th>Title</th>
			<th>Desc</th>
			<th>Status</th>
			<th>Priority</th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>{{ $issue->id }}</td>
			<td>{{ $issue->issue_title }}</td>
			<td>{{ $issue->issue_desc }}</td>
			<td>{{ $issue->status_id }}</td>
			<td>{{ $issue->priority_id }}</td>
			
			<td>{{ link_to_route('issues.edit', 'Edit', array($issue->id), array('class' => 'btn btn-info')) }}</td>
			<td>
				{{ Form::open(array('method' => 'DELETE', 'route' => array('issues.destroy', $issue->id))) }}
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