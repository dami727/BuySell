@extends('layouts.website') 
@section('title', 'BuySell') 
@section('content')

<!-- start homepage -->
<!-- start section -->
<section>
<!-- start slider -->
<div id="slider" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#slider" data-slide-to="0" class="active"></li>
      <li data-target="#slider" data-slide-to="1"></li>
      <li data-target="#slider" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{asset('dist/img/slider.jpg')}}" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('dist/img/slider1.jpg')}}" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('dist/img/slider2.jpg')}}" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<!-- end slider -->
</section>
<!-- end section -->
<!-- start category section -->
<section>
    <div class="row mx-1 w-100">
        <div class="col-sm-2">
            <div class="category py-4">
                <div class="py-5" style="background-image: url('{{asset('dist/img/img.png')}}');">
                    <span class="d-block bg-success text-center p-2">Laptop</span>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="category py-4">
                <div class="py-5" style="background-image: url('{{asset('dist/img/img.png')}}');">
                    <span class="d-block bg-success text-center p-2">Laptop</span>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="category py-4">
                <div class="py-5" style="background-image: url('{{asset('dist/img/img.png')}}');">
                    <span class="d-block bg-success text-center p-2">Laptop</span>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="category py-4">
                <div class="py-5" style="background-image: url('{{asset('dist/img/img.png')}}');">
                    <span class="d-block bg-success text-center p-2">Laptop</span>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="category py-4">
                <div class="py-5" style="background-image: url('{{asset('dist/img/img.png')}}');">
                    <span class="d-block bg-success text-center p-2">Laptop</span>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="category py-4">
                <div class="py-5" style="background-image: url('{{asset('dist/img/img.png')}}');">
                    <span class="d-block bg-success text-center p-2">Laptop</span>
                </div>
            </div>
        </div>
        
    </div>
</section>
<!-- start category section -->

<!-- start product section -->
<section>
    <div class="row inner_row">
        <!-- product left section -->
        <div class="col-sm-3">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Filter Post</h4>
                </div>
                <div class="card-body">
                    <div class="category">
                        <h6>Category</h6> <hr>
                        <a href="" class="btn btn-outline-success category_btn w-100 text-left m-1">Category1</a>
                        <a href="" class="btn btn-outline-success category_btn w-100 text-left m-1">Category1</a>
                        <a href="" class="btn btn-outline-success category_btn w-100 text-left m-1">Category1</a>
                        <a href="" class="btn btn-outline-success category_btn w-100 text-left m-1">Category1</a>
                        <a href="" class="btn btn-outline-success category_btn w-100 text-left m-1">Category1</a>
                        <a href="" class="btn btn-outline-success category_btn w-100 text-left m-1">Category1</a>
                    </div> <br>
                    <div class="condiation">
                        <h6>Condiation</h6> <hr>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="new_condiation">
                            <label class="form-check-label" for="new_condiation">New</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="use_condiation">
                            <label class="form-check-label" for="use_condiation">Used</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="refurbished_condiation">
                            <label class="form-check-label" for="refurbished_condiation">Refurbished</label>
                        </div>
                    </div> <br>
                    <div class="price">
                        <h6>Price Range</h6> <hr>
                        <div class="row">
                            <div class="col-sm-4">
                                <input type="number" class="form-control text-center" value="1">
                            </div>
                            <div class="col-sm-4">
                                <input type="number" class="form-control text-center" value="1000">
                            </div>
                            <div class="col-sm-4">
                                <button class="btn btn-success">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- start product right section -->
        <div class="col-sm-9">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Posts</h4>
                </div>
                <div class="card-body">
                    <!-- product row -->
                    <div class="row">
                        <div class="col-sm-3">
                            <a href="{{route('product_view')}}" class="text-dark">
                                <div class="card">
                                    <div class="card-header p-0">
                                        <img src="{{asset('dist/img/img.png')}}" width="100%" height="150px" alt="">
                                    </div>
                                    <div class="card-body p-2">
                                        <p>Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="" class="text-dark">
                                <div class="card">
                                    <div class="card-header p-0">
                                        <img src="{{asset('dist/img/img.png')}}" width="100%" height="150px" alt="">
                                    </div>
                                    <div class="card-body p-2">
                                        <p>Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="" class="text-dark">
                                <div class="card">
                                    <div class="card-header p-0">
                                        <img src="{{asset('dist/img/img.png')}}" width="100%" height="150px" alt="">
                                    </div>
                                    <div class="card-body p-2">
                                        <p>Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="" class="text-dark">
                                <div class="card">
                                    <div class="card-header p-0">
                                        <img src="{{asset('dist/img/img.png')}}" width="100%" height="150px" alt="">
                                    </div>
                                    <div class="card-body p-2">
                                        <p>Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="" class="text-dark">
                                <div class="card">
                                    <div class="card-header p-0">
                                        <img src="{{asset('dist/img/img.png')}}" width="100%" height="150px" alt="">
                                    </div>
                                    <div class="card-body p-2">
                                        <p>Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="" class="text-dark">
                                <div class="card">
                                    <div class="card-header p-0">
                                        <img src="{{asset('dist/img/img.png')}}" width="100%" height="150px" alt="">
                                    </div>
                                    <div class="card-body p-2">
                                        <p>Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="" class="text-dark">
                                <div class="card">
                                    <div class="card-header p-0">
                                        <img src="{{asset('dist/img/img.png')}}" width="100%" height="150px" alt="">
                                    </div>
                                    <div class="card-body p-2">
                                        <p>Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="" class="text-dark">
                                <div class="card">
                                    <div class="card-header p-0">
                                        <img src="{{asset('dist/img/img.png')}}" width="100%" height="150px" alt="">
                                    </div>
                                    <div class="card-body p-2">
                                        <p>Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- start pagination -->
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-end">
                              <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                              </li>
                            </ul>
                        </nav>
                        <!-- end pagination -->
                    </div>
                </div>
            </div>
        </div>


        
        <!-- end product right section -->
    </div>
</section>
<!-- end product section -->
<!-- end homepage -->

@endsection