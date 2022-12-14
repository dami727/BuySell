<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | @yield('title')</title>

  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="icon" href="" type="image/gif" sizes="16x16">
  <!-- bootstrap -->
  <link rel="stylesheet" href="{{asset('dist/css/bootstrap4.min.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
  <!-- custom css -->
  <link rel="stylesheet" href="{{asset('dist/css/custom.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed body-color">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('dist/img/AdminLTELogo.png')}}" alt="" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header bg-primary navbar navbar-expand">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-light" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-sm-inline-block">
        <a href="" target="_blank" class=" nav-link text-light border btn">View Website</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link text-light" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    <div class="dropdown">
      <button class="btn text-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-user"></i>
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href=""><i class="fas fa-user"></i>&nbsp; Profile</a>
        <a class="dropdown-item" href=""><i class="fas fa-key"></i>&nbsp; Change Password</a>
        <a class="dropdown-item" href="{{route('logout')}}"><i class="fas fa-power-off"></i>&nbsp; Logout</a>
      </div>
    </div>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('dist/img/AdminLTELogo.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="" class="d-block text-decoration-none"> Supper Admin </a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">
          
          <!-- dashboard --> 
          <li class="nav-item">
            <a href="{{route('admin_dashboard')}}" class="nav-link {{request()->is('admin_dashboard')?'active':''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i><p> Dashboard</p>
            </a>
          </li>
          <!-- start category --> 
          <li class="nav-item {{request()->is('sub_category')?'menu-open':(request()->is ('category_list')?'menu-open':(request()->is ('child_category')?'menu-open':''))}}">
            
            <a href="#" class="nav-link {{request()->is('sub_category')?'active':(request()->is('category_list')?'active':(request()->is('child_category')?'active':''))}}">
                <i class="nav-icon fas fa-copy"></i>
                <p> Manage Category <i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('category_list')}}" class="nav-link {{request()->is('category_list')?'active':''}}">
                    <i class="fas fa-angle-right nav-icon"></i>
                    <p> Category </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('sub_category')}}" class="nav-link {{request()->is('sub_category')?'active':''}}">
                      <i class="fas fa-angle-right nav-icon"></i>
                      <p> Sub Category </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('child_category')}}" class="nav-link {{request()->is('child_category')?'active':''}}">
                    <i class="fas fa-angle-right nav-icon"></i>
                    <p> Child Category </p>
                  </a>
                </li>
            </ul>
          </li>
          <!-- end category -->
          <!-- product --> 
          <li class="nav-item">
            <a href="{{route('products')}}" class="nav-link {{request()->is('products')?'active':''}}">
              <i class="fab fa-product-hunt nav-icon"></i><p> Products </p>
            </a>
          </li>
          <!-- end product -->
          <!-- start Order Management -->
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fas fa-dharmachakra nav-icon"></i>
              <p> Order Management <i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Panding Order </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Accept Order </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Order Discusing </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Manufature </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Shipping Processing </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Dalevery </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Cancel </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Payment Cancel </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Payment Complate </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Payment Refund </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Rescheduled </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Scheduled </p>
                </a>
              </li>
            </ul>
          </li>
          <!-- end Order Management -->
          <!-- start dispus -->
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fas fa-disease nav-icon"></i><p> Dispus <i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Search Courier </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Courier List </p>
                </a>
              </li>
              <li class="nav-item">
                <!-- start sub manu -->
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Shipping By <i class="fas fa-angle-left right"></i> </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item ml-4">
                      <a href="" class="nav-link">
                        <i class="fas fa-angle-right nav-icon"></i>
                        <p> Air </p>
                      </a>
                  </li>
                  <li class="nav-item ml-4">
                    <a href="" class="nav-link">
                      <i class="fas fa-angle-right nav-icon"></i>
                      <p> Cargo </p>
                    </a>
                  </li>
                  <li class="nav-item ml-4">
                    <a href="" class="nav-link">
                      <i class="fas fa-angle-right nav-icon"></i>
                      <p> Ship </p>
                    </a>
                  </li>
                </ul>
                <!-- end sub manu -->
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> CNF By </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Area </p>
                </a>
              </li>
            </ul>
          </li>
          <!-- end dispus -->
          <!-- start Buyer Management -->
          <li class="nav-item {{request()->is('buyer_list')?'menu-open':(request()->is('seller_list')?'menu-open':'')}}">
            <a href="" class="nav-link {{request()->is('buyer_list')?'active':(request()->is('seller_list')?'active':'')}}">
              <i class="fab fa-buysellads nav-icon"></i>
              <p> Client Management </p> <i class="fas fa-angle-left right"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                
                <a href="{{route('buyer_list')}}" class="nav-link {{request()->is('buyer_list')?'active':''}}">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Buyer List </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Approve Buyer </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('seller_list')}}" class="nav-link {{request()->is('seller_list')?'active':''}}">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Seller List </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Approve Seller </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Seller Discussion </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Seller Commission </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Seller Report </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Seller Payment History </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Seller Wallet </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Withdrow </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Subscription </p>
                </a>
              </li>
            </ul>
          </li>
          <!-- end Buyer Management -->
          <!-- start refarel -->
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fas fa-sync-alt nav-icon"></i>
              <p> Refarel Code/Link </p> <i class="fas fa-angle-left right"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Refarel List </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Refarel Bonus </p>
                </a>
              </li>
            </ul>
          </li>
          <!-- end refarel -->
          <!-- start comment -->
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fas fa-comment nav-icon"></i>
              <p> Comment</p> <i class="fas fa-angle-left right"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> New Comment </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Approve Comment </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Decline Comment </p>
                </a>
              </li>
            </ul>
          </li>
          <!-- end comment -->
          <!-- start review -->
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fas fa-star nav-iocn"></i>
              <p> Review </p> <i class="fas fa-angle-left right"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> New Review </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Approve Review </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Decline Review </p>
                </a>
              </li>
            </ul>
          </li>
          <!-- end review -->
          <!-- start report -->
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fas fa-bug nav-icon"></i>
              <p> Report </p> <i class="fas fa-angle-left right"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> New Report </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Approve Report </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Decline Report </p>
                </a>
              </li>
            </ul>
          </li>
          <!-- end report -->
          <!-- start blogs -->
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fab fa-blogger-b nav-icon"></i>
              <p> Blogs </p> <i class="fas fa-angle-left right"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Add Blogs </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Manage Blogs </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Category </p>
                </a>
              </li>
            </ul>
          </li>
          <!-- end blogs -->
          <!-- start massage -->
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fas fa-comments nav-icon"></i>
              <p> Massage </p> <i class="fas fa-angle-left right"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Live Chat </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Ticket </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Complain </p>
                </a>
              </li>
            </ul>
          </li>
          <!-- end massege -->
          <!-- start employ -->
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fas fa-users nav-icon"></i>
              <p> Employ </p> <i class="fas fa-angle-left right"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> New Employ </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Manage Employ </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Add Role </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Manage Role </p>
                </a>
              </li>
            </ul>
          </li>
          <!-- end employ -->
          <!-- start web setting -->
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fas fa-cogs nav-icon"></i>
              <p> Web Settingse </p> <i class="fas fa-angle-left right"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Homepage Setting </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Manu Setting </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Language Setting </p>
                </a>
              </li>
            </ul>
          </li>
          <!-- end web setting -->
          <!-- start setting -->
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fas fa-cog nav-iocn"></i>
              <p> Setting </p> <i class="fas fa-angle-left right"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> App Setting </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Unit Setting </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Currency Setting </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Language Setting </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Email Setting </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> Add Center </p>
                </a>
              </li>
            </ul>
          </li>
          <!-- end setting -->





        </ul>
      </nav>
      <!-- sidebar-menu -->
    </div>
    <!-- sidebar -->
  </aside>
  <div class="content-wrapper">
    
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @if($errors->any())
                      <div class="alert alert-danger">
                        {{$errors->first()}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    @endif
                </div>             
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <div class="mx-3">
        @yield('content')
    </div>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    Copyright &copy; 2021-2022 <strong><a href="#"> </a></strong>
    All rights reserved.
    <span class="float-right">Devolop by <strong>Roky Hossain</strong></span>
  </footer>
 
<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
{{-- dashboard --}}
<script src="{{asset('dist/js/dashboard.js')}}"></script>
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('dist/js/admin.min.js')}}"></script>
<!-- datatable -->
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script>
  $(document).ready(function () {
    $('#datatable').DataTable();
  });
</script>
<!-- summernote -->

<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
    $(function () {
      // Summernote
      $('#summernote').summernote()
  
      // CodeMirror
      CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
      });
    })
  </script>
<!-- custom js -->
<script src="{{asset('js/custom.js')}}"></script>

</body>
</html>