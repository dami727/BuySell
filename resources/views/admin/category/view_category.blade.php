@extends('layouts.admin') 
@section('title', 'View Category') 
@section('content')

<div class="mx-5 pb-5">
    <div class="form-group">
        <label for="category_name" class="form-label">Name</label>
        <input type="text" class="form-control" value="{{$view_category->category_name}}">
    </div>
    <div class="form-group">
        <label for="category_slug" class="form-label">Slug</label>
        <input type="text" class="form-control" value="{{$view_category->category_slug}}">
    </div>
    <div class="form-group">
      <label for="category_status" class="form-label">Status</label>
      <select class="form-control">
        <option value="0">{{$view_category->category_status}}</option>
      </select>
    </div>
    <div class="form-group">
        <label for="category_image" class="form-label">Main Image</label>
        <img src="{{ asset('storage/Category_image/'. $view_category->category_image) }}" height="100px" width="100px" alt="">
    </div>
    <div class="form-group">
        <label for="category_image" class="form-label"> Feature Image</label> <br>
        <img src="{{ asset('storage/Category_image/'. $view_category->feature_image) }}" height="100px" width="100px" alt="">
    </div>
</div>

@endsection