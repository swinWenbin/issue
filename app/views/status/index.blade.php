@extends('layouts.dashboard')

@section('content')

<h2 class="page-header">All Statuses</h2>

<p>{{ link_to_route('status.create', 'Add new Status') }} </p>


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
      @foreach($statuses as $status)
      <tr>
        <td>{{ $status->id }} </td>
        <td>{{ $status->title }} </td>
         <td>{{ link_to_route('status.show', 'Show', array($status->id), array('class' => 'btn btn-primary')) }} </td>
        <td>{{ link_to_route('status.edit', 'Edit', array($status->id), array('class' => 'btn btn-info')) }} </td>
        <td>
          {{ Form::open(array('method' => 'DELETE', 'route' => array('status.destroy', $status->id))) }}
            <button class='btn btn-danger' type='submit' onClick="return confirm('Are you sure?');">
                <i class='glyphicon glyphicon-trash'></i> Delete
            </button>
          {{ Form::close() }}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>


@stop

