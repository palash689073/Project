@extends('master')
@section('title','Category create page title')
@section('content')
<div class="container" style="margin-top: 100px; margin-bottom: 100px;">
	<h1 class="display-3" style="font-size: 22px;">Category create</h1>
	<hr>

@include('partial.message')

	<form action="{{url('category/create')}}" method="post">
		@csrf
  <div class="form-group">
    <label>Category Name</label>
    <input type="text" name="category_name" class="form-control"  placeholder="Enter category Name">
  </div>

   <div class="form-group">
    <label>Description</label>
    <textarea class="form-control" name="description"></textarea>
  </div>

  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


<a href="{{url('category')}}" style="float: right;">Back to home</a>
</div>
@endsection