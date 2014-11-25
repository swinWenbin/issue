@extends('layouts.dashboard')

@section('content')

<h2 class="page-header">Issues and Assigned Users</h2>
	
<table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>id</th>
        <th>issuetitle</th>
         <th>Assign User</th>
         <th>Remove User</th>
        <th>Assigned To</th>
      </tr>
    </thead>
	<tbody>
	@foreach ($issues as $issue)
	<tr>
		<td>{{$issue->id}}</td>
		<td>{{ $issue->issue_title }} </td>
        <td><a href="{{ URL::to('users-assign1/' . $issue->id) }}" class="btn btn-info">Assign</a></td>
        <td>{{ link_to_route('assign.edit', 'Remove', array($issue->id), array('class' => 'btn btn-warning')) }} </td>
        <td>
            @foreach ($issue->users as $user) 
                {{$user->username}}
            @endforeach
        </td>
	</tr>
    @endforeach	    
	</tbody>
</table>

@stop