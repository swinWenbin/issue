@extends('layouts.dashboard')

@section('content')

<h2 class="page-header">Create Issue</h2>

{{ Form::open(array('route' => 'issues.store')) }}
<ul>
	<li>
		{{ Form::label('issue_title', 'Title:') }} <br>
		{{ Form::text('issue_title') }}
	</li><br>
	<li>
		{{ Form::label('issue_desc', 'Desc:') }} <br>
		{{ Form::textarea('issue_desc') }}
	</li><br>
	<li>
		{{ Form::label('status_id', 'Status:') }} <br>
		{{ Form::select('id', $status) }}
	</li><br>
	<li>
		{{ Form::label('priority_id', 'Priority:') }} <br>
		{{ Form::select('id', $priority) }}
	</li><br>
	<li>
		{{ Form::label('project_id', 'Project:') }} <br>
		{{ Form::select('id', $project) }}
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