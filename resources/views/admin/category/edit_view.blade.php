@extends('layouts.admin') 
@section('title', 'View Category') 
@section('content')

<div class="mx-5 pb-5">
    <form action="{{route('edit_view',['id'=>$item->id])}}" method="post">
        <div class="form-group">
            <label for="category_name" class="form-label">Name</label>
            <input type="text" class="form-control" name="category_name" value="{{$view_category->category_name}}" id="category_name" placeholder="Enter Name" required>
        </div>
        <div class="form-group">
            <label for="category_slug" class="form-label">Slug</label>
            <input type="text" class="form-control" name="category_slug" value="{{$view_category->category_slug}}" id="category_slug" placeholder="Enter Slug" required>
        </div>
        <div class="form-group">
          <label for="category_status" class="form-label">Status</label>
          <select name="category_status" class="form-control" id="category_status" required>
            <option value="0"> {{$view_category->category_status}} </option>
            <option value="Active"> Active </option>
            <option value="Deactive"> Deactive </option>
          </select>
        </div>
        <div class="form-group">
            <label for="category_image" class="form-label">Image</label>
            <input type="file" class="form-control p-0" id="category_image" name="category_image" required>
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="checkbox">
          <label class="form-check-label" for="checkbox"> Add Feature Image </label>
        </div>
        <div class="form-group">
          <input type="file" class="form-control p-0" id="Feature_image" name="feature_image">
          <input type="hidden" class="form-control p-0" id="image" name="image" value="NULL">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary px-5">Save</button>
        </div>
    </form>
</div>

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<!-- custom jquery -->
<script>
  $(document).ready(function () {
    $('#Feature_image').hide();
    $('#checkbox').click(function(){
      $('#Feature_image').show();
    });

    $('#category_slug').click(function(){
      var get = $('#category_name').val();
      var slug = get.replaceAll(' ', '-');
      $('#category_slug').val(slug);
    });
  });
</script>

@endsection