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
<th>Lucky Number</th>
<td>Action</td>
</tr>
</thead>
<tbody>
@if($clients != null)
@foreach($clients as $c)
<tr>
<td>{{$c['id']}}</td>
<td>{{$c['email']}}</td>
<td>{{$c['agent']}}</td>
<td>{{$c['number']}}</td>
<?php
 $link = url("delete")."/".$c['id'];
?>
<td><a href="{{$link}}" class="btn btn-danger" role="button">Delete</a></td>
</tr>
@endforeach
@endif
</tbody>
</table>
    </div>
  </div>
</div>

@stop 