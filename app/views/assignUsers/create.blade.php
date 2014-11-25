@extends('layouts.dashboard')

@section('content')

<h2 class="page-header">Add Users to Issues</h2>

{{ Form::open(array('route' => 'assign.store')) }}

<ul>
    <li>
        {{ Form::label('parent_id', 'Issues:') }}<br>
        {{ Form::select('issueid', $issues) }}
    </li></br>

    <li>
        {{ Form::label('parent_id', 'Users:') }}<br>
        {{ Form::select('userid', $users) }}
    </li></br>

    <li>
        {{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
    </li>
</ul>
{{ Form::close() }}

@stop