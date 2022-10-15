@extends('layouts.website') 
@section('title', 'Product View') 
@section('content')

<!-- start product view section -->
<!-- start badcrume -->
<section>
    <div class=" inner_row">
        <div class="badcrume">
            <div class="card p-1 w-100">
            <span> Home / Products / Product name </span>
            </div>
        </div>
    </div>
</section>
<!-- end badcrume -->
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
        <h5>Illo nam eum excepturi et non consequuntur qui voluptatem.</h5>
        <div class="review">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <span> (58) Reviews </span>
        </div> <br>
        <h2>$568 - $658 </h2>
        <div class="row mt-3">
            <div class="col-6 mb-3">
                <div>Availability: <a href=""> In stock </a></div>
                <div><a href=""><i class="fas fa-heart"></i>  Add Whitelist</a> </div>
            </div>
            <div class="col-6 mb-3">
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
    </div>
    <div class="col-sm-4"></div>

</div> 
<!-- end product view section --> 
<!-- end product view section -->

@endsection
