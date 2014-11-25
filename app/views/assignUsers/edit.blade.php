@extends('layouts.dashboard')

@section('content')

<h2 class="page-header">UnAssign Users From Issue</h2>

{{ Form::model($issue, array('method' => 'PATCH', 'route' => array('assign.update', $issue->id))) }}

<ul>
	<li>
		{{ Form::label('issue_title', 'IssueID: ') }} {{$issue->id}}<br>
		
		{{ Form::label('username', 'Users: ') }} <br>
		@foreach ($issue->users as $user) 
		{{Form::radio('userid',$user->id,false)}}{{$user->username}}
		@endforeach
	</li><br>

<li>
{{ Form::submit('Remove', array('class' => 'btn btn-danger', 'onClick' => 'return confirm("Are you sure?");')) }}
</li>

  


	</ul>
	{{ Form::close() }}
 

@stop