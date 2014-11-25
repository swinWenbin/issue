@extends('layouts.dashboard')

@section('content')

<h2 class="page-header">All Roles</h2>

<p>{{ link_to_route('roles.create', 'Add new Role') }} </p>

@if($roles->count())
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>title</th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
    </thead>

    <tbody>
      @foreach($roles as $role)
      <tr>
        <td>{{ $role->id }} </td>
        <td>{{ $role->title }} </td>

        <td>{{ link_to_route('roles.show', 'Show', array($role->id), array('class' => 'btn btn-primary')) }} </td>
        <td>{{ link_to_route('roles.edit', 'Edit', array($role->id), array('class' => 'btn btn-info')) }} </td>
        <td>
          {{ Form::open(array('method' => 'DELETE', 'route' => array('roles.destroy', $role->id))) }}
            {{ Form::submit('Delete', array('class' => 'btn btn-danger', 'onClick' => 'return confirm("Are you sure?");')) }}
          {{ Form::close() }}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@else
  There are no project.
@endif

@stop