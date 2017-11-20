@extends('layout') 

@section('title', "View Clients")

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
       <table class="table table-hover demo-table-search table-responsive-block" id="tableWithSearch">
<thead>
<tr>
<th>SN</th>
<th>Email</th>
<th>Agent</th>
</tr>
</thead>
<tbody>
@if($clients != null)
@foreach($clients as $c)
<tr>
<td>{{$c['id']}}</td>
<td>{{$c['email']}}</td>
<td>{{$c['agent']}}</td>
</tr>
@endforeach
@endif
</tbody>
</table>
    </div>
  </div>
</div>

@stop 