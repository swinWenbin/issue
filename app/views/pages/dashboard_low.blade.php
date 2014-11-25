@extends('layouts.dashboard')

@section('content')
<h2 class="page-header">Current Issues:</h2>

<div class="row">

  <div class="col-lg-4">
    <div class="panel panel-danger">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-6">
            <h1>High</h1>
          </div>
          <div class="col-xs-6 text-right">
            <p class="announcement-heading">{{ $high->count() }}</p>
            <p class="announcement-text"></p>
          </div>
        </div>
      </div>
      <a href="/dashboard">
        <div class="panel-footer announcement-bottom">
          <div class="row">
            <div class="col-xs-6">
              View Details
            </div>
            <div class="col-xs-6 text-right">
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>

  <div class="col-lg-4">
    <div class="panel panel-warning">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-6">
            <h1>Medium</h1>
          </div>
          <div class="col-xs-6 text-right">
            <p class="announcement-heading">{{ $medium->count() }}</p>
            <p class="announcement-text"></p>
          </div>
        </div>
      </div>
      <a href="/dashboard_medium">
        <div class="panel-footer announcement-bottom">
          <div class="row">
            <div class="col-xs-6">
              View Details
            </div>
            <div class="col-xs-6 text-right">
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>

  <div class="col-lg-4">
    <div class="panel panel-success">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-6">
            <h1>Low</h1>
          </div>
          <div class="col-xs-6 text-right">
            <p class="announcement-heading">{{ $low->count() }}</p>
            <p class="announcement-text"></p>
          </div>
        </div>
      </div>
      <a href="/dashboard_low">
        <div class="panel-footer announcement-bottom">
          <div class="row">
            <div class="col-xs-6">
              View Details
            </div>
            <div class="col-xs-6 text-right">
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>
</div><!-- /.row -->

<hr>

<h3 class="sub-header">Low-Priority Issues</h3>

@if($low->count())
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>Title</th>
        <th>Description</th>
        <th>Status</th>
        <th>Priority</th>
      </tr>
    </thead>

    <tbody>
      @foreach($low as $issue)
      <tr>
        <td>{{ $issue->id }} </td>
        <td>{{ $issue->issue_title }} </td>
        <td>{{ $issue->issue_desc }} </td>
        <td>{{ $issue->status->title }} </td>
        <td>{{ $issue->priority->title }} </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@else
  There are no low-priority issues.
@endif

@stop
