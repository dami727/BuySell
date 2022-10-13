@extends('layouts.admin') 
@section('title', 'Products') 
@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">

<!-- start product Page -->
<div class="card">
    <div class="card-header">
        <h4 class="card-title">All products</h4>
        <a href="{{route('add_products')}}" class="btn btn-primary float-right"><i class="fas fa-plus-circle nav-icon"></i> Add Product</a>
    </div>
    <div class="card-body">
        <table id="datatable" class="text-center table table-bordered" style="width:100%">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Price Range</th>
                    <th>Size</th>
                    <th>Color</th>
                    <th>Feature</th>
                    <th>Shipping</th>
                    <th>Quentity Range</th>
                     <th>Quentity Range</th>
                    <th>Active</th>
                </tr>
            </thead>
            <tbody class="table-hover">
             @php $i=1;
             @endphp
           
                <tr>
                    <td>{{$i++}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
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

                            <span id="view_category" class="p-2 btn-primary"><i class="fas fa-eye"></i></span>                            

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

<!-- end product page -->

@endsection