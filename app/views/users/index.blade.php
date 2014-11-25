@extends('layouts.dashboard')

@section('content')

<h2 class="page-header">All Users</h2>

<p>{{ link_to_route('users.create', 'Add new User') }} </p>

@if($users->count())
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>Num</th>
        <th>Username</th>
        <th>Email</th>
        <th>Role</th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
    </thead>

    <tbody>
      @foreach($users as $user)
      <tr>
        <td>{{ $user->id }} </td>
        <td>{{ $user->username }} </td>
        <td>{{ $user->email }} </td>
        <td>{{ $user->role->title }}</td>

        <td>{{ link_to_route('users.show', 'Show', array($user->id), array('class' => 'btn btn-primary')) }} </td>
        <td>{{ link_to_route('users.edit', 'Edit', array($user->id), array('class' => 'btn btn-info')) }} </td>
        <td>
          {{ Form::open(array('method' => 'DELETE', 'route' => array('users.destroy', $user->id))) }}
            {{ Form::submit('Delete', array('class' => 'btn btn-danger', 'onClick' => 'return confirm("Are you sure?");')) }}
          {{ Form::close() }}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@else
  There are no user.
@endif

@stop