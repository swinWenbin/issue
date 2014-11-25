@extends('layouts.dashboard')

@section('content')

<h2 class="page-header">{{ ucwords(Auth::user()->username) . "'s" }} Issues</h2>
{{--
<pre>{{ dd($issues->toArray()) }}</pre>
--}}
<p>{{ link_to_route('issues.create', 'Add new Issue') }} </p>

@if(isset($issues))
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>Num</th>
        <th>Title</th>
        <th>Desc</th>
        <th>Priority</th>
        <th>Assigned</th>
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
        <td>{{ $issue->priority->title }} </td>
        <td>{{ $issue->users->find(Auth::user()->id)->username }} </td>
        <td>{{ link_to_route('issues.show', 'Show', array($issue->id), array('class' => 'btn btn-primary')) }} </td>
        <td>{{ link_to_route('issues.edit', 'Edit', array($issue->id), array('class' => 'btn btn-info')) }} </td>
        @if(Auth::user()->role_id==1)
        <td>
          {{ Form::open(array('method' => 'DELETE', 'route' => array('issues.destroy', $issue->id))) }}
            {{ Form::submit('Delete', array('class' => 'btn btn-danger', 'onClick' => 'return confirm("Are you sure?");')) }}
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