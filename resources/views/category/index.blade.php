@extends('master')
@section('title','Category index page title')
@section('content')
<div class="container" style="margin-top: 100px; margin-bottom: 100px;">
	<h1 class="display-3" style="font-size: 22px;">Category Index</h1>
	<a href="{{url('category/create')}}" style="float: right;">Create</a>
	<hr>
	@include('partial.message')

	<table class="table">
		<tr>
			<th>SL</th>
			<th>NAME</th>
			<th>DESCRIPTION</th>
			<th>ACTION</th>
		</tr>
		<?php $i=1;?>
		@foreach($data as $item)
		<tr>
			<td>{{$i++}}</td>
			<td>{{$item->name}}</td>
			<td>{{$item->description}}</td>
			<td>
				<a href="{{url('category/edit/'.$item->id)}}">Edit</a>|
				<a href="{{url('category/delete/'.$item->id)}}">Delete</a>
			</td>
		</tr>
		@endforeach
	</table>

</div>
@endsection