@extends('layouts.dashboard')

@section('content')

<h2 class="page-header">Show Issue</h2>

<p>{{ link_to_route('status.index', 'Return to all Statuses') }} </p>

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
			<td>{{ $status->id }}</td>
			<td>{{ $status->title }}</td>
			
			<td>{{ link_to_route('issues.edit', 'Edit', array($status->id), array('class' => 'btn btn-info')) }}</td>
			<td>
				{{ Form::open(array('method' => 'DELETE', 'route' => array('status.destroy', $status->id))) }}
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