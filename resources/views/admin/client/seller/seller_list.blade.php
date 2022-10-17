@extends('layouts.admin') 
@section('title', 'Seller List') 
@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">

<!-- start buyer list  -->
<div class="card">
    <div class="card-header">
        <h5 class="card-title">Seller List</h5>
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
                    <tr>
                        <td>{{$i++}}</td>
                        <td><img src="" alt="" width="40px" height="40px"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                          <div class="justify-content-center">
                            
                            <form action="" class="float-center" method="post">
                              @method('delete')
                              @csrf
                                <input type="hidden" name="_method" value="DELETE">

                                <a class="p-2 btn-primary" href=""><i class="fas fa-eye"></i></a>                            

                                <a href="" class="p-2 btn-primary"><i class="fas fa-edit"></i></a>

                                <button class="btn-danger p-1" type="submit"><span class="btn-danger p-1"><i class="fas fa-trash-alt"></i></span></button>
                            </form>
                          </div>
                        </td>
                    </tr>
              
                </tbody>
                
            </table>
    </div>
</div>
<!-- end buyer list -->


@endsection