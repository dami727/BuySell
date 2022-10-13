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
    <div class="row w-100">
        <!-- product left section -->
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Today Best sale</h4>
                </div>
                <div class="card-body">
                    <div class="row my-2 border">
                        <div class="col-4 p-0">
                            <img src="{{asset('dist/img/img.png')}}" width="100%" height="100%" alt="">
                        </div>
                        <div class="col-8 p-2">
                            <p><strong>Lorem ipsum dolor sit amet.</strong></p>
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. dgfd</span>
                        </div>
                    </div>
                    <div class="row my-2 border">
                        <div class="col-4 p-0">
                            <img src="{{asset('dist/img/img.png')}}" width="100%" height="100%" alt="">
                        </div>
                        <div class="col-8 p-2">
                            <p><strong>Lorem ipsum dolor sit amet.</strong></p>
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. dgfd</span>
                        </div>
                    </div>
                    <div class="row my-2 border">
                        <div class="col-4 p-0">
                            <img src="{{asset('dist/img/img.png')}}" width="100%" height="100%" alt="">
                        </div>
                        <div class="col-8 p-2">
                            <p><strong>Lorem ipsum dolor sit amet.</strong></p>
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. dgfd</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- start product right section -->
        <div class="col-sm-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Recent Post</h4>
                </div>
                <div class="card-body">
                    <!-- product row -->
                    <div class="row">
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