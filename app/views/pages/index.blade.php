@extends('layouts.default')

@section('content')

@include('layouts.carasel')

@include('layouts.collapse')

@include('layouts.table')

  <!-- Nav tabs -->
  <ul class="nav nav-tabs">
    <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
    <li><a href="#profile" data-toggle="tab">issue</a></li>
    <li><a href="#messages" data-toggle="tab">user</a></li>
    <li><a href="#settings" data-toggle="tab">Settings</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div class="tab-pane fade in active" id="home"> Issue Tracker ITSM gives you the flexibility to choose the right delivery method for your organization — whether you're looking to embrace the reduced operating costs of the cloud, or need the additional control and visibility of an on-premises solution. You also have the freedom to move between implementation models </div>
    <div class="tab-pane fade" id="profile">Make it easy for your customers to get the service and information they need from IT. Keep them productive with easy access to useful knowledge base articles, important updates and key services tailored to their role. Reduce your IT support staff workload and maximize process efficiency, with configurable and automated service request workflows.</div>
    <div class="tab-pane fade" id="messages">Deliver faster, more responsive support and build a powerful foundation for your enterprise service desk, with ITIL® aligned Incident and Problem management. Maximize the productivity of your agents and reduce resolution times with intelligent ticketing, incident matching and unrivalled visibility.</div>
    <div class="tab-pane fade" id="settings">Maximize business agility, minimize your operational risks and introduce new levels of process rigor and accountability.</div>
  </div>

@include('layouts.button')

    <ul class="list-group">
    <li class="list-group-item"><span class="badge badge-error">1</span>Urgent Issue</li>
    <li class="list-group-item"><span class="badge badge-success">12</span>Assign Issue</li>
    <li class="list-group-item"><span class="badge">14</span>Total Issue</li>

    <span class="badge badge-error">1</span>
    <span class="badge">14</span>
    <span class="badge badge-success">12</span>
    <span class="badge badge-warning">4</span>
    <span class="badge badge-info">8</span>
    

 
@stop

