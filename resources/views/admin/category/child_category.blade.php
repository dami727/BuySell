@extends('layouts.admin') 
@section('title', 'Child Category') 
@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">

<!-- start manager category -->
<div class="row">
    <div class="card w-100">
        <div class="card-header">
            <h5 class="card-title">Child Categorys</h5>
            <button class="float-right btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus-circle nav-icon"></i> Add Child Category</button>
        </div>
        <div class="card-body">
            <table id="datatable" class="text-center table table-bordered" style="width:100%">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Sub Category</th>
                        <th>Category Slug</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-hover">
                 @php $i=1;
                 @endphp
                 @foreach ($child_category as $item)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$item->child_category_name}}</td>
                        <td>{{$item->child_category_slug}}</td>
                        <td>
                          <div class="justify-content-center">
                            
                            <form action="{{ route('child_category_delete',['id'=>$item->id]) }}" class="float-center" method="post">
                              @method('delete')
                              @csrf
                                <input type="hidden" name="_method" value="DELETE">

                                <span id="view_category" class="p-2 btn-primary"><i class="fas fa-eye"></i></span>                            

                                <a href="" class="p-2 btn-primary"><i class="fas fa-edit"></i></a>

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
          <h5 class="modal-title" id="exampleModalLabel">Add Child Category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!-- model body -->
        <div class="modal-body">
            <form action="{{route('child_category')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="category_name" class="form-label">Category</label>
                    <select name="category_name" class="form-control" id="category_name">
                        <option value="0"> --- Click Select Category --- </option>
                        @foreach ($category as $item)
                            <option value="{{$item->category_name}}"> {{$item->category_name}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="category_name" class="form-label">Sub Category</label>
                    <select name="sub_category_name" class="form-control" id="sub_category_name">
                        <option value="0"> --- Select Category --- </option>
                        @foreach ($sub_category as $item)
                            <option value="{{$item->sub_category_name}}"> {{$item->sub_category_name}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="child_category_name" class="form-label">Child Category Name</label>
                    <input type="text" class="form-control" name="child_category_name" id="child_category_name" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for="child_category_slug" class="form-label">Slug</label>
                    <input type="text" class="form-control" name="child_category_slug" id="child_category_slug" placeholder="Enter Slug">
                </div>
                <div class="form-group">
                    <label for="child_status" class="form-label">Status</label>
                    <select name="child_status" class="form-control" id="child_status" required>
                      <option value="0"> --- Select Status --- </option>
                      <option value="Active"> Active </option>
                      <option value="Deactive"> Deactive </option>
                    </select>
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
    $('#child_category_slug').click(function(){
      var category_name = $('#category_name').val();
      var sub_category_name = $('#sub_category_name').val();
      var child_category_name = $('#child_category_name').val();
      var category_name_slug = category_name.replaceAll(' ', '-');
      var sub_category_name_slug = sub_category_name.replaceAll(' ', '-');
      var child_category_name_slug = child_category_name.replaceAll(' ', '-');
      var slug = category_name_slug +'-'+ sub_category_name_slug + '-' + child_category_name_slug;
      $('#child_category_slug').val(slug);
    });
  });
</script>

@endsection
