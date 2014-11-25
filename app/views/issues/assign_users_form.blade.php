@extends('layouts.dashboard')

@section('content')

<h2 class="page-header">Add Users to Issues</h2>

{{ Form::open(array('url' => 'post-assign')) }}

<ul>
    <li>
        {{ Form::label('issue', 'Issue Title: ') }}
        {{ Form::hidden('issue_id', $issue->id) }}
    </li><br>
    <li>
        {{ Form::label('parent_id', 'Users:') }}<br>
        {{ Form::select('userid', $users) }}
    </li></br>

    <li>
        {{ Form::submit('Assign', array('class' => 'btn btn-info')) }}
    </li>
</ul>
{{ Form::close() }}

@stop