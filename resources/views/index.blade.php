@extends('layouts.website') 
@section('title', 'BuySell') 
@section('content')

<!-- start homepage -->
<!-- start section -->
<section>
<!-- start slider -->
<div id="slider" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <a href="{{route('view')}}">
            <img class="d-block w-100" src="{{asset('dist/img/slider.jpg')}}" alt="First slide">
        </a>
      </div>
      <div class="carousel-item">
        <a href="{{route('view')}}">
            <img class="d-block w-100" src="{{asset('dist/img/slider1.jpg')}}" alt="Second slide">
        </a>
      </div>
      <div class="carousel-item">
        <a href="{{route('view')}}">
            <img class="d-block w-100" src="{{asset('dist/img/slider3.jpg')}}" alt="Second slide">
        </a>
      </div>
      <div class="carousel-item">
        <a href="{{route('view')}}">
            <img class="d-block w-100" src="{{asset('dist/img/slider2.jpg')}}" alt="Third slide">
        </a>
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
    <div class="inner_row">
        <div class="row">
            <div class="col-sm-3">
             <div class="card">
                 <div class="card-body">
                     <h5>Gaming accessories</h5>
                     <div class="row">
                         <div class="col-6 bg_category">
                            <a href="">
                                <img src="{{asset('dist/img/headphone.jpg')}}" width="100%" height="100px" alt="">
                                <p class="text-center">Headphone</p>
                            </a>
                         </div>
                         <div class="col-6 bg_category">
                            <a href="">
                                <img src="{{asset('dist/img/keyboard.jpg')}}" width="100%" height="100px" alt="">
                                <p class="text-center">Keyboard</p>
                            </a>
                         </div>
                         <div class="col-6 bg_category">
                            <a href="">
                                <img src="{{asset('dist/img/mouse.jpg')}}" width="100%" height="100px" alt="">
                                <p class="text-center">Mouse</p>
                            </a>
                         </div>
                         <div class="col-6 bg_category">
                            <a href="">
                                <img src="{{asset('dist/img/chair.jpg')}}" width="100%" height="100px" alt="">
                                <p class="text-center">Chair</p>
                            </a>
                         </div>
                         <a href="" class="pt-3"> See More </a>
                     </div>
                 </div>
             </div>
            </div>
            <div class="col-sm-3">
             <div class="card">
                 <div class="card-body">
                     <h5>Shop by Category</h5>
                     <div class="row">
                         <div class="col-6 bg_category">
                            <a href="{{route('view')}}">
                                <img src="{{asset('dist/img/laptop.jpg')}}" width="100%" height="100px" alt="">
                                <p class="text-center">Laptop</p>
                            </a>
                         </div>
                         <div class="col-6 bg_category">
                            <a href="{{route('view')}}">
                                <img src="{{asset('dist/img/videogame.jpg')}}" width="100%" height="100px" alt="">
                                <p class="text-center">Video Game</p>
                            </a>
                         </div>
                         <div class="col-6 bg_category">
                            <a href="{{route('view')}}">
                                <img src="{{asset('dist/img/baby.jpg')}}" width="100%" height="100px" alt="">
                                <p class="text-center">Baby</p>
                            </a>
                         </div>
                         <div class="col-6 bg_category">
                            <a href="{{route('view')}}">
                                <img src="{{asset('dist/img/toy.jpg')}}" width="100%" height="100px" alt="">
                                <p class="text-center">Toys</p>
                            </a>
                         </div>
                         <a href="{{route('view')}}" class="pt-3"> See More </a>
                     </div>
                 </div>
             </div>
            </div>
            <div class="col-sm-3">
             <div class="card">
                 <div class="card-body">
                     <h5>Health & Personal Care</h5>
                     <div class="row">
                        <a href="">
                            <div class="col-12">
                                <img src="{{asset('dist/img/health.jpg')}}" width="100%" height="315" alt="">
                            </div>
                        </a>
                         <a href="" class="pt-3"> See More </a>
                     </div>
                 </div>
             </div>
            </div>
            <div class="col-sm-3">
             <div class="card">
                 <div class="card-body">
                     <h5>Sign in for the best experience</h5>
                     <button class="btn securely_singin"><a href="">Sing in Securely</a></button>
                     <div class="add">
                         <img src="{{asset('dist/img/add.jpg')}}" width="100%" height="300" alt="">
                     </div>
                 </div>
             </div>
            </div>
            <div class="col-sm-3">
             <div class="card">
                 <div class="card-body">
                     <h5>Dresses</h5>
                     <div class="row">
                        <a href="">
                            <div class="col-12">
                                 <img src="{{asset('dist/img/dresses.jpg')}}" width="100%" height="315" alt="">
                            </div>
                        </a>
                         <a href="" class="pt-3"> See More </a>
                     </div>
                 </div>
             </div>
            </div>
            <div class="col-sm-3">
             <div class="card">
                 <div class="card-body">
                     <h5>Easy Returns</h5>
                     <div class="row">
                        <a href="">
                            <div class="col-12">
                                 <img src="{{asset('dist/img/easy_returns.jpg')}}" width="100%" height="315" alt="">
                            </div>
                        </a>
                         <a href="" class="pt-3"> See More </a>
                     </div>
                 </div>
             </div>
            </div>
            <div class="col-sm-3">
             <div class="card">
                 <div class="card-body">
                     <h5>Get Fit at Home</h5>
                     <div class="row">
                        <a href="">
                            <div class="col-12">
                                 <img src="{{asset('dist/img/get_fit.jpg')}}" width="100%" height="315" alt="">
                            </div>
                        </a>
                         <a href="" class="pt-3"> See More </a>
                     </div>
                 </div>
             </div>
            </div>
            <div class="col-sm-3">
             <div class="card">
                 <div class="card-body">
                     <h5>Computers & Accessories</h5>
                     <div class="row">
                        <a href="">
                            <div class="col-12">
                                 <img src="{{asset('dist/img/computer_accessories.jpg')}}" width="100%" height="315" alt="">
                            </div>
                        </a>
                         <a href="" class="pt-3"> See More </a>
                     </div>
                 </div>
             </div>
            </div>
             
         </div>
    </div>
</section>
<!-- start category section -->

<!-- start top buyer slider -->
<section>
    <div class="row inner_row">
        <div class="col-sm-12">
            <div class="card">
               <div class="card-body">
                    <h5>Local Top Buyer in Books for you</h5>
                    <div class="owl-carousel local_top_buyer owl-theme">
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider1.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider2.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider3.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider4.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider5.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider6.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider7.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider8.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider9.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider10.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider11.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                    </div>
               </div>
            </div>
        </div>
    </div>
</section>
<!-- end top buyer slider -->

<!-- start International  top buyer slider -->
<section>
    <div class="row inner_row">
        <div class="col-sm-12">
            <div class="card">
               <div class="card-body">
                    <h5>International top Buyer in Home</h5>
                    <div class="international_top_buyer owl-carousel owl-theme">
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider1.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider2.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider3.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider4.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider5.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider6.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider7.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider8.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider9.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider10.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider11.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                    </div>
               </div>
            </div>
        </div>
    </div>
</section>
<!-- end International  top buyer slider -->

<!-- start category section -->
<section>
    <div class="row inner_row">
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5>Create with strip lights</h5>
                    <div class="row">
                       <a href="">
                           <div class="col-12">
                                <img src="{{asset('dist/img/strip_light.jpg')}}" width="100%" height="315" alt="">
                           </div>
                       </a>
                        <a href="" class="pt-3"> See More </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5>Shop Laptops & Tablets</h5>
                    <div class="row">
                       <a href="">
                           <div class="col-12">
                                <img src="{{asset('dist/img/laptop_tablet.jpg')}}" width="100%" height="315" alt="">
                           </div>
                       </a>
                        <a href="" class="pt-3"> See More </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5>For your Fitness Needs</h5>
                    <div class="row">
                       <a href="">
                           <div class="col-12">
                                <img src="{{asset('dist/img/fitness.jpg')}}" width="100%" height="315" alt="">
                           </div>
                       </a>
                        <a href="" class="pt-3"> See More </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5>New arrivals in Toys</h5>
                    <div class="row">
                       <a href="">
                           <div class="col-12">
                                <img src="{{asset('dist/img/new_arrivals.jpg')}}" width="100%" height="315" alt="">
                           </div>
                       </a>
                        <a href="" class="pt-3"> See More </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end category section -->

<!-- start international top buyer slider -->
<section>
    <div class="row inner_row">
        <div class="col-sm-12">
            <div class="card">
               <div class="card-body">
                    <h5>International top sellers</h5>
                    <div class="owl-carousel local_top_buyer owl-theme">
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider1.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider2.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider3.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider4.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider5.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider6.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider7.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider8.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider9.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider10.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider11.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                    </div>
               </div>
            </div>
        </div>
    </div>
</section>
<!-- end international top buyer slider -->

<!-- start international buyer slider -->
<section>
    <div class="row inner_row">
        <div class="col-sm-12">
            <div class="card">
               <div class="card-body">
                    <h5>International top Buyer in Home</h5>
                    <div class="international_top_buyer owl-carousel owl-theme">
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider1.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider2.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider3.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider4.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider5.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider6.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider7.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider8.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider9.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider10.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="{{asset('dist/img/top_buyer_slider11.jpg')}}" width="100%" height="200" alt="">
                            </a>
                        </div>
                    </div>
               </div>
            </div>
        </div>
    </div>
</section>
<!-- end international buyer slider -->

<!-- start category section -->
<section>
    <div class="row inner_row">
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5>Decorate for Halloween</h5>
                    <div class="row">
                       <a href="">
                           <div class="col-12">
                                <img src="{{asset('dist/img/halloween.jpg')}}" width="100%" height="315" alt="">
                           </div>
                       </a>
                        <a href="" class="pt-3"> See More </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5>Statement boots for you</h5>
                    <div class="row">
                       <a href="">
                           <div class="col-12">
                                <img src="{{asset('dist/img/boots.jpg')}}" width="100%" height="315" alt="">
                           </div>
                       </a>
                        <a href="" class="pt-3"> See More </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5>Fashion favorites for Fall</h5>
                    <div class="row">
                       <a href="">
                           <div class="col-12">
                                <img src="{{asset('dist/img/fashion.jpg')}}" width="100%" height="315" alt="">
                           </div>
                       </a>
                        <a href="" class="pt-3"> See More </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5>All Halloween</h5>
                    <div class="row">
                        <div class="col-6 bg_category">
                           <a href="">
                               <img src="{{asset('dist/img/headphone.jpg')}}" width="100%" height="100px" alt="">
                               <p class="text-center">Headphone</p>
                           </a>
                        </div>
                        <div class="col-6 bg_category">
                           <a href="">
                               <img src="{{asset('dist/img/keyboard.jpg')}}" width="100%" height="100px" alt="">
                               <p class="text-center">Keyboard</p>
                           </a>
                        </div>
                        <div class="col-6 bg_category">
                           <a href="">
                               <img src="{{asset('dist/img/mouse.jpg')}}" width="100%" height="100px" alt="">
                               <p class="text-center">Mouse</p>
                           </a>
                        </div>
                        <div class="col-6 bg_category">
                           <a href="">
                               <img src="{{asset('dist/img/chair.jpg')}}" width="100%" height="100px" alt="">
                               <p class="text-center">Chair</p>
                           </a>
                        </div>
                        <a href="" class="pt-3"> See More </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end category section -->


<!-- end homepage -->

@endsection