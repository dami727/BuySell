@extends('layouts.admin') 
@section('title', 'Add Product') 
@section('content')

<!-- start create product -->
<form action="{{route('add_products')}}" method="post">
    @csrf
<div class="row">
    
    <div class="col-sm-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> Information </h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="product_title" class="form-label">Product Title</label>
                    <input type="text" class="form-control" name="product_title" placeholder="Write Title">
                </div>
                <div class="form-group">
                    <label for="product_description" class="form-label">Description</label>
                    <textarea name="product_description" class="form-control" id="" cols="30" rows="6">Write product description</textarea>
                </div>
                <div class="form-group">
                    <label for="key_feature" class="form-label">Key Feature</label>
                    <div id="feature"></div>
                    <div class="row my-1">
                        <div class="col-11"><input type="text" name="key_feature[]" class="form-control" placeholder="Write feature"></div>
                        <div class="col-1"> <span id="add_feature" class="btn btn-primary"><i class="fas fa-plus"></i></span></div>                      
                    </div>
                </div>
                <div id="append">
                </div>
                <div class="card my-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="size">Size</label>
                                    <input type="text" class="form-control" name="size[]" placeholder="Size">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="color">Color</label>
                                    <input type="text" class="form-control" name="color[]" placeholder="Color">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label for="status" class="form-label">Price Range</label>
                                    <div class="row">
                                        <div class="col-6"><input type="number" name="start_price[]" class="form-control" placeholder="00.00"></div>
                                        <div class="col-6"><input type="number" name="end_price[]" class="form-control" placeholder="00.00"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-1">
                                <div class="form-group">
                                    <label for=""></label>
                                    <span id="more" class="btn btn-primary float-right mt-2"><i class="fas fa-plus"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                               <div class="form-group">
                                    <label for="att_image">Image</label>
                                    <input type="file" class="p-1" name="att_image[]">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-check my-3">
                    <input type="checkbox" class="form-check-input" id="checkbox" required>
                    <label class="form-check-label" for="checkbox"> I already read your <a href=""> Return Policy</a> </label>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            {{-- <div class="card-header">
                <h4 class="card-title">  </h4>
            </div> --}}
            <div class="card-body">
                <div class="form-group">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="0"> -- Select Status --</option>
                        <option value="Active"> Active </option>
                        <option value="Deactive"> Deactive </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="status" class="form-label">SKU</label>
                    <input type="text" name="sku" class="form-control" placeholder="Example: GRT2541KJ">
                </div>
                <div class="form-group">
                    <label for="category" class="form-label">Category</label>
                    <select name="category" id="category" class="form-control">
                        <option value="0"> -- Select Category --</option>
                        @foreach ($category as $item)
                            <option value="{{$item->category_name}}">{{$item->category_name}}</option>
                        @endforeach                        
                    </select>
                </div>
                <div class="form-group">
                    <label for="sub_category" class="form-label">Sub Category</label>
                    <select name="sub_category" id="sub_category" class="form-control">
                        <option value="0"> -- Select Sub Category --</option>
                        @foreach ($category as $item)
                            <option value="{{$item->category_name}}">{{$item->category_name}}</option>
                        @endforeach                        
                    </select>
                </div>
                <div class="form-group">
                    <label for="child_category" class="form-label">Category</label>
                    <select name="child_category" id="child_category" class="form-control">
                        <option value="0"> -- Select Child Category --</option>
                        @foreach ($category as $item)
                            <option value="{{$item->category_name}}">{{$item->category_name}}</option>
                        @endforeach                        
                    </select>
                </div>
                <div class="form-group">
                    <label for="status" class="form-label">Quantity Range</label>
                    <div class="row">
                        <div class="col-6"><input type="number" name="start_quaantity_range" class="form-control" placeholder="00.00"></div>
                        <div class="col-6"><input type="number" name="end_quaantity_range" class="form-control" placeholder="00.00"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="status" class="form-label">Barcode</label>
                    <input type="text" name="barcode" class="form-control">
                </div>
                <div class="form-group">
                    <label for="shipping" class="form-label">Shipping Time</label>
                    <div class="row">
                        <div class="col-6"><input type="number" name="start_shipping_time" class="form-control" placeholder="00.00"></div>
                        <div class="col-6"><input type="number" name="end_shipping_time" class="form-control" placeholder="00.00"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <button type="submit" class="btn btn-primary ml-3 mb-3 px-5 float-right"> Save </button>
    </div>
  
</div>
</form>
<!-- end create product -->
<!-- jQuery -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<!-- custom jquery -->
<script>
  $(document).ready(function () {
    
    $('#add_feature').click(function(){
        $('#feature').prepend('<div class="row my-1"><div class="col-11"><input type="text" class="form-control" placeholder="Write feature"></div><div class="col-1"> <span id="remove[]" class="btn btn-danger"><i class="fas fa-times"></i></span></div></div>');
    });
    $('#more').click(function(){
        $('#append').append('<div class="card my-2"><div class="card-body"><div class="row"><div class="col-sm-3"><div class="form-group"><label for="size">Size</label><input type="text" class="form-control" name="size" placeholder="Size"></div></div><div class="col-sm-3"><div class="form-group"><label for="color">Color</label><input type="text" class="form-control" name="color" placeholder="Color"></div></div><div class="col-sm-5"><div class="form-group"><label for="status" class="form-label">Price Range</label><div class="row"><div class="col-6"><input type="number" name="start_price" class="form-control" placeholder="00.00"></div><div class="col-6"><input type="number" name="end_price" class="form-control" placeholder="00.00"></div></div></div></div><div class="col-sm-1"><div class="form-group"><label for=""></label><span id="remove" class="btn btn-danger float-right mt-2"><i class="fas fa-times"></i></span></div></div></div><div class="row"><div class="col-sm-4"><div class="form-group"><label for="att_image">Image</label><input type="file" class="p-1" name="att_image"></div></div></div></div></div>');
    });
    $('#add_feature').click(function(){
         alert("hello");
    });
});
</script>@endsection