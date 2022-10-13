<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BuySell</title>
     <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap4.min.css')}}">
</head>
<body>
    <!-- start header -->
    <header>
        <!-- start top navbar -->
        <div class="row">
            <div class="col-sm-4 pl-5">
                <img src="{{asset('dist/img/logo.png')}}" height="50px" width="150px" alt="">
            </div>
            <div class="col-sm-4 p-2">
                <div class="input-group">
                    <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                    <button type="button" class="btn btn-primary">search</button>
                </div>
            </div>
            <div class="col-sm-4 p-2">
                <div class="row">
                    <div class="col-sm-7"></div>
                    <div class="col-sm-1 text-center">
                        <span class="btn"><i class="fas fa-comments"></i></span>
                    </div>
                    <div class="col-sm-1 text-center">
                        <span class="btn"><i class="fas fa-heart"></i></span>
                    </div>
                    <div class="col-sm-1 text-center">
                        <span class="btn"><i class="fas fa-shopping-cart"></i></span>
                    </div>

                    <div class="col-sm-1 text-center">
                        <span class="btn"><i class="fas fa-user"></i></span>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
            </div>
        </div>
        <!-- end top navbar -->
        <!-- start navbar -->
        <section>
            <nav class="navbar navbar-expand-lg navbar-light bg-success">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Link</a>
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
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>