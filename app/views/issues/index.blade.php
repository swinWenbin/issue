@extends('layouts.dashboard')

@section('content')

<h2 class="page-header">All Issues</h2>

@if(Auth::user()->role_id==1)
<p>{{ link_to_route('issues.create', 'Add new Issue') }} </p>
@endif

@if(isset($issues))
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
        <th></th>
      </tr>
    </thead>

    <tbody>
      @foreach($issues as $issue)
      <tr>
        <td>{{ $issue->id }} </td>
        <td>{{ $issue->issue_title }} </td>
        <td>{{ $issue->issue_desc }} </td>
        <td>{{ $issue->status->title }} </td>
        <td>{{ $issue->priority->title }} </td>

        @if(Auth::user()->role_id==1)
        <td>{{ link_to_route('issues.show', 'Show', array($issue->id), array('class' => 'btn btn-primary')) }} </td>
        <td>{{ link_to_route('issues.edit', 'Edit', array($issue->id), array('class' => 'btn btn-info')) }} </td>
        <td>
          {{ Form::open(array('method' => 'DELETE', 'route' => array('issues.destroy', $issue->id))) }}
            <button class='btn btn-danger' type='submit' onClick="return confirm('Are you sure?');">
                <i class='glyphicon glyphicon-trash'></i> Delete
            </button>
          {{ Form::close() }}
        </td>
        @endif
      </tr>
      @endforeach
    </tbody>
  </table>
@else
  There are no issue.
@endif

@stop

