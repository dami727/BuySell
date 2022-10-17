<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link href="{{asset('dist/css/bootstrap4.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>
<body>
    <!-- start register body -->
    <div class="container my-3">
        <form action="{{route('login')}}" method="post" enctype="multipart/form-data">
            @csrf
            @if($errors->any())
                    <div class="alert alert-danger">
                        {{$errors->first()}}
                    </div>
            @endif
            <div class="registation_body">
                <div class="card" id="registation">
                    <div class="card-body">
                        <h5>Create an Account</h5> <hr>
                        <div class="form-group">
                            <label for="" class="form-label">Phone number</label>
                            <input type="number" class="form-control" name="phone" placeholder="01236547" require>
                        </div>
                        <button type="button" class="btn btn-success px-4" id="next">next</button>
                    </div>
                </div>
                <div class="card" id="next_registation">
                    <div class="card-body">
                        <h5>Create an Account</h5> <hr>
                        <div class="form-group">
                            <label for="" class="form-label">Verification Code</label>
                            <input type="number" class="form-control" name="ver_code" placeholder="01236547">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="example@gmail.com">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        {{-- <div class="form-group">
                            <label for="" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" name="confirm_password">
                        </div> --}}
                        <div class="form-group">
                            <label for="" class="form-label">Refar Code</label>
                            <input type="refar_code" class="form-control" name="rafer_code" placeholder="Refar code">
                        </div>
                        <button type="button" class="btn btn-success px-4" id="pre">Pre</button>
                        <button type="submit" class="btn btn-success px-4">Submit</button>
                    </div>
                </div>
                
            </div>

                
            
        </form>
    </div>
    <!-- end register body -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#next_registation').hide();
            $('#next').click(function(){
                $('#next_registation').show();
                $('#registation').hide();
            });
            $('#pre').click(function(){
                $('#registation').show();
                $('#next_registation').hide();
            });
        });
    </script>
</body>
</html>