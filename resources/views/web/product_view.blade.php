@extends('layouts.website') 
@section('title', 'Product View') 
@section('content')
<div class="mx-4">
<!-- start product view section -->
<!-- start badcrume -->
<section>
    <div class="mt-2 inner_row">
        <div class="badcrume">
            <div class="card p-1 w-100">
            <span> Home / Products / Product name </span>
            </div>
        </div>
    </div>
</section>
<!-- end badcrume -->
<!-- start section -->
<section>
    <!-- start product view section -->
<div class="row inner_row">
    <div class="col-sm-4">
        <div class="card">
            <div class="card-header p-0">
                <img src="{{asset('dist/img/products.jpg')}}" width="100%" alt="">
            </div>
            <div class="card-body p-2">
                <a href=""><img src="{{asset('dist/img/products.jpg')}}" width="19%" alt=""></a>
                <a href=""><img src="{{asset('dist/img/products.jpg')}}" width="19%" alt=""></a>
                <a href=""><img src="{{asset('dist/img/products.jpg')}}" width="19%" alt=""></a>
                <a href=""><img src="{{asset('dist/img/products.jpg')}}" width="19%" alt=""></a>
                <a href=""><img src="{{asset('dist/img/products.jpg')}}" width="19%" alt=""></a>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body">
        <h5>Illo nam eum excepturi et non consequuntur qui voluptatem.</h5>
        <div class="review">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <span> (58) Reviews </span>
        </div>
        <h2>$568 - $658 </h2>
        <div class="row">
            <div class="col-6">
                <div>Availability: <a href=""> In stock </a></div>
                <div><a href=""><i class="fas fa-heart"></i>  Add Whitelist</a> </div>
            </div>
            <div class="col-6">
                <div>Condition: <a href=""> Fresh </a></div>
                <div><a href=""><i class="fas fa-envelope"></i>  Contact Saller</a> </div>
            </div>
        </div>
        <div class="row">
            <a href="" class="social-icon"><i class="fab fa-facebook-square"></i></a>
            <a href="" class="social-icon"><i class="fab fa-twitter-square"></i>
            <a href="" class="social-icon"><i class="fab fa-linkedin"></i></a>
            <a href="" class="social-icon"><i class="fab fa-whatsapp-square"></i></a>
            <a href="" class="social-icon"><i class="fab fa-pinterest-square"></i></a>
            <a href="" class="social-icon"><i class="fab fa-google-plus-square"></i></a>
            <a href="" class="social-icon"><i class="fab fa-reddit-square"></i></a>
            <a href="" class="social-icon"><i class="fas fa-envelope"></i></a>
        </div>
        <div class="row">
            <div class="col-3 pt-1">
                <span>Color : </span>
            </div>
            <div class="col-5">
                <select name="color" class="p-1 w-100" id="color">
                    <option value="0">--select color--</option>
                </select>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-3 pt-1">
                <span>Size : </span>
            </div>
            <div class="col-5">
                <select name="color" class="p-1 w-100" id="color">
                    <option value="0">--select size--</option>
                </select>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-3 pt-1">
                <span>Shipping : </span>
            </div>
            <div class="col-9">
                <span>Free Delivary in Dhaka</span>
                <p>Estimated Delivery Time: 1 - 5 days</p>
            </div>
        </div>
        <div class="row">
            <div class="col-3 pt-1">
                <span>Quantity : </span> 
            </div>
            <div class="col-3">
                <input type="number" class="p-1 w-100 text-center" value="1">
            </div>
        </div> <br>
        <div class="row">
            <div class="col-4">
                 <button class="btn btn-success w-100">Bit Now</button>
            </div>
            <div class="col-5">
                <button class="btn btn-success w-100">Add to Cart</button>
            </div>
        </div>
    </div>
    </div>
    </div>
    <div class="col-sm-4 pl-3">
        <div class="card">
            <div class="card-body">
                <h5>Saller Information</h5> <hr>
                <div class="row">
                    <div class="col-2">
                        <img src="{{asset('dist/img/products.jpg')}}" alt="" width="100%" height="50">
                    </div>
                    <div class="col-8">
                        <h6>top Saller</h6>
                        <span>Review: 58 sters</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h5>Key Feature</h5> <hr>
                <ul class="pl-3">
                    <li>Porro dolore voluptatem libero eos</li>
                    <li>Porro dolore voluptatem libero eos</li>
                    <li>Porro dolore voluptatem libero eos</li>
                    <li>Porro dolore voluptatem libero eos</li>
                    <li>Porro dolore voluptatem libero eos</li>
                    <li>Porro dolore voluptatem libero eos</li>
                    <li>Porro dolore voluptatem libero eos</li>
                    <li>Porro dolore voluptatem libero eos</li>
                    <li>Porro dolore voluptatem libero eos</li>
                    <li>Porro dolore voluptatem libero eos</li>

                </ul>
            </div>
        </div>
    </div>

</div> 
<!-- end product view section --> 
<!-- start description -->
<div class="inner_row">
    <div class="card">
        <div class="card-body">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link bg-dark px-5 p-2 mx-1 active" data-toggle="tab" href="#deacription">Description</a>
        </li>
        <li class="nav-item">
          <a class="nav-link bg-dark px-5 p-2 mx-1" data-toggle="tab" href="#seller_specification">Seller Spacification</a>
        </li>
        <li class="nav-item">
          <a class="nav-link bg-dark px-5 p-2 mx-1" data-toggle="tab" href="#review">Review</a>
        </li>
    </ul>
  
  <!-- Tab panes -->
  <div class="tab-content p-0">
    <div class="tab-pane container active" id="deacription">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam doloremque earum modi omnis voluptas sunt. Rem tenetur tempore earum consectetur repudiandae incidunt molestiae. Nam vel consectetur saepe earum autem! Consequuntur alias sapiente impedit ex cumque? Nam, quis libero voluptas temporibus dolores modi, obcaecati incidunt vel id inventore aut necessitatibus voluptatem.</p>
    </div>
    <div class="tab-pane container fade" id="seller_specification">
        <h1>seller_specification</h1>
    </div>
    <div class="tab-pane container fade" id="review">
        <h1>review</h1>
    </div>
  </div>
  
            
</div>
</div>
</div>
<!-- end description -->
<!-- start related item -->
<div class="inner_row">
    <div class="card">
        <div class="card-body">
            <h5>Related Items</h5> <hr>
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
<!-- end related item -->
<!-- end product view section -->
</section>
<!-- end section -->
</div>
@endsection
