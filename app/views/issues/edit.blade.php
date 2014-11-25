@extends('layouts.dashboard')

@section('content')

<h2 class="page-header">Edit Issue</h2>

{{ Form::model($issue, array('method' => 'PATCH', 'route' => array('issues.update', $issue->id))) }}

<ul>
	<li>
		{{ Form::label('issue_title', 'Title: ') }} <br>
		{{ Form::text('issue_title') }}
	</li><br>
	<li>
		{{ Form::label('issue_desc', 'Desc: ') }} <br>
		{{ Form::text('issue_desc') }}
	</li><br>
	<li>
		{{ Form::label('status_id', 'Status: ') }} <br>
		{{ Form::text('status_id') }}
	</li><br>

	<li>
		{{ Form::label('priority_id', 'Priority: ') }} <br>
		{{ Form::text('priority_id') }}
	</li><br>

	<!-- <li>
		{{ Form::label('assign', 'Assign: ') }} <br>
		{{ Form::text('assign') }}
	</li><br> -->

	<li>
		{{ Form::submit('Update', array('class' => 'btn btn-success')) }}
		{{ link_to_route('issues.show', 'Cancel', $issue->id, array('class' => 'btn btn-warning')) }}
	</li>
</ul>
{{ Form::close() }}

@if($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:messge</li>')) }}
	</ul>
@endif

@stop