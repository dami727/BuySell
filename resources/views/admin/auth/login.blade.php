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
    <div class="login-body">
        <div class="row text-center m-3">
            <h1><i class="fa-solid fa-circle-user"></i></h1> <br>
            <h5>Admin Login</h5>
        </div>
        <div class="row">
            <div class="col-12">
            <form action="{{route('admin')}}" method="POST">
                @csrf
                @if($errors->any())
                    <div class="alert alert-danger">
                        {{$errors->first()}}
                    </div>
                @endif
                <div class="form-group">
                    <label for="email" class="form-label">Admin Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group mt-2">
                    <label for="password" class="form-label">Admin Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                </div> <br>
                <button type="submit" class="btn btn-primary px-3">Login</button>
            </form>
        </div>
        </div>
    </div>
</body>
</html>