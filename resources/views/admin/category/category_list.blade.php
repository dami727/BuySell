@extends('layouts.admin') 
@section('title', 'Main Category') 
@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">

<!-- start manager category -->
<div class="row">
    <div class="card w-100">
        <div class="card-header">
            <h5 class="card-title">All Categorys</h5>
            <button class="float-right btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus-circle nav-icon"></i> Add Category</button>
        </div>
        <div class="card-body">
            <table id="datatable" class="text-center table table-bordered" style="width:100%">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Feature Image</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-hover">
                 @php $i=1;
                 @endphp
                 @foreach ($category as $item)
                    <tr>
                        <td>{{$i++}}</td>
                        <td><img src="{{ asset('storage/Category_image/'. $item->category_image) }}" alt="" width="40px" height="40px"></td>
                        <td><img src="{{ asset('storage/Category_image/'. $item->feature_image) }}" alt="" width="40px" height="40px"></td>
                        <td>{{$item->category_name}}</td>
                        <td>{{$item->category_slug}}</td>
                        <td>{{$item->category_status}}</td>
                        <td>
                          <div class="justify-content-center">
                            
                            <form action="{{ route('delete_category',['id'=>$item->id]) }}" class="float-center" method="post">
                              @method('delete')
                              @csrf
                                <input type="hidden" name="_method" value="DELETE">

                                <a class="p-2 btn-primary" href="{{ route('view_category',['id'=>$item->id]) }}"><i class="fas fa-eye"></i></a>                            

                                <a href="{{ route('edit_view',['id'=>$item->id]) }}" class="p-2 btn-primary"><i class="fas fa-edit"></i></a>

                                <button class="btn-danger p-1" type="submit"><span class="btn-danger p-1"><i class="fas fa-trash-alt"></i></span></button>
                            </form>
                          </div>
                        </td>
                    </tr>
                @endforeach
              
                </tbody>
                
            </table>
        </div>
    </div>
</div>
<!-- end manager category -->

  <!-- start Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!-- model body -->
        <div class="modal-body">
            <form action="{{route('category_list')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="category_name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="category_name" id="category_name" placeholder="Enter Name" required>
                </div>
                <div class="form-group">
                    <label for="category_slug" class="form-label">Slug</label>
                    <input type="text" class="form-control" name="category_slug" id="category_slug" placeholder="Enter Slug" required>
                </div>
                <div class="form-group">
                  <label for="category_status" class="form-label">Status</label>
                  <select name="category_status" class="form-control" id="category_status" required>
                    <option value="0"> --- Select Status --- </option>
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
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
      </div>
    </div>
  </div>
  <!-- end model -->

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
