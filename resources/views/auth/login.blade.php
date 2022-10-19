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
            @if($errors->any())
                    <div class="alert alert-danger">
                        {{$errors->first()}}
                    </div>
                @endif
        <div class="text-center">
            <h1 class="user-login"><i class="fa-solid fa-circle-user"></i></h1>
            <h4>User Login</h4>
        </div>
        <div class="row">
            <div class="col-12">
            <form action="{{ route('buyer_login') }}" method="POST">
                @csrf
                @if($errors->any())
                    <div class="alert alert-danger">
                        {{$errors->first()}}
                    </div>
                @endif
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group mt-2">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                </div> 
                <div class="form-group">
                    <label for="account_type" class="form-label">Account Type</label>
                    <select name="account_type" id="account_type" class="form-control" >
                        <option value="0">--select type--</option>
                        <option value="buyer">Buyer</option>
                        <option value="seller">Seller</option>

                    </select>
                </div><br>
                <button type="submit" class="btn btn-success px-4">Login</button>
                <a href="{{route('register')}}" class="btn btn-outline-dark px-3">Register</a>
            </form>
        </div>
        </div>
    </div>
</body>
</html>