<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BuySell</title>
     <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- owl -->
    <link rel="stylesheet" href="{{asset('dist/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/owl.theme.default.min.css')}}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap4.min.css')}}">
    <!-- custom css -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>
<body>
    <!-- start header -->
    <header>
        <!-- start top navbar -->
        <div class="row top_navbar px-3">
            <div class="col-sm-3">
                <a href="">
                    <img src="{{asset('dist/img/Dot skill.png')}}" height="50px" width="150px" alt="">
                </a>
            </div>
            <div class="col-sm-5 pt-2">
                <div class="input-group">
                    <div class="input-group-append">
                        <button class="btn search_button" type="button"><strong><i class="fas fa-camera"></i></strong></button>
                    </div>
                    <input type="text" class="form-control p-3" placeholder="Search with Keyword" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn search_button" type="button"><strong>Search</strong></button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 p-2">
                <div class="row float-right">
                    <span class="btn text-light"><i class="fas fa-comments"></i> Massage</span>
                    <span class="btn text-light"><i class="fas fa-heart"></i> WhiteList</span>
                    <span class="btn text-light"><i class="fas fa-shopping-cart"></i> Cart</span>
                    <span class="btn text-light"><a href="{{route('login')}}"><i class="fas fa-user"></i> User </a></span>
                </div>
            </div>
        </div>
        <!-- end top navbar -->
        <!-- start navbar -->
        <section>
            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link nav-btn" href=""><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link nav-btn" href="{{route('view')}}">Today's Deals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-btn" href="{{route('view')}}">Customer Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-btn" href="{{route('view')}}">Registry</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-btn" href="{{route('view')}}">Gift Cards</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-btn" href="{{route('view')}}">Sell</a>
                    </li>
                  </ul>
                </div>
            </nav>
        </section>
        <!-- end navbar -->
    </header>
    <!-- end header -->

    <!-- start main content -->
    @yield('content')
    <!-- end main content -->

    <!-- start footer -->
    <footer>
        <!-- start section -->
        <section>
            <div class="row bg-dark text-light p-3">
                <div class="col-sm-3">
                    <h3>Buy Sell</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, nihil ex! A excepturi repellendus velit exercitationem, quidem nam quod esse?</p>
                </div>
                <div class="col-sm-3">
                    <h3>Quick link</h3>
                    <ul>
                        <li>Home</li>
                        <li>About us</li>
                        <li>Privacy Policy</li>
                        <li>Teams and Condiation</li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h3>My Account</h3>
                    <ul>
                        <li>Profile</li>
                        <li>Address</li>
                        <li>Order</li>
                        <li>Became a Buyer</li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h3>Download App</h3>
                    <ul>
                        <li>Android App</li>
                        <li>ISO App</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- end section -->
    </footer>
    <!-- end footer -->
    <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <!-- owl carousel js -->
    <script src="{{asset('dist/js/owl.carousel.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- custom js -->
    <script src="{{asset('js/custom.js')}}"></script>
</body>
</html>