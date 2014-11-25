@extends('layouts.dashboard')

@section('content')

<h2 class="page-header">All Projects</h2>

@if(Auth::user()->role_id==1)
<p>{{ link_to_route('projects.create', 'Add new Project') }} </p>
@endif

@if($projects->count())
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>Num</th>
        <th>Title</th>
        <th>Description</th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
    </thead>

    <tbody>
      @foreach($projects as $project)
      <tr>
        <td>{{ $project->id }} </td>
        <td>{{ $project->title }} </td>
        <td>{{ $project->proj_desc }}</td>

        @if(Auth::user()->role_id==1)
        <td>{{ link_to_route('projects.show', 'Show', array($project->id), array('class' => 'btn btn-primary')) }} </td>
        <td>{{ link_to_route('projects.edit', 'Edit', array($project->id), array('class' => 'btn btn-info')) }} </td>
        <td>
          {{ Form::open(array('method' => 'DELETE', 'route' => array('projects.destroy', $project->id))) }}
            {{ Form::submit('Delete', array('class' => 'btn btn-danger', 'onClick' => 'return confirm("Are you sure?");')) }}
          {{ Form::close() }}
        </td>
        @endif
      </tr>
      @endforeach
    </tbody>
  </table>
@else
  There are no project.
@endif

@stop