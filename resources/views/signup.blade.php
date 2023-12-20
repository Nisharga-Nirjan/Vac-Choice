<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset" style="margin-top:20px;">
                <h4>Register</h4>
                <form action="{{route('signup-user')}}" method="post">
                    @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif

                    @csrf
                    <div class="form-group">
                        <label for="nid">NID</label>
                        <input type="text" class="form-control" placeholder="Enter NID" name="nid" id= "nid" value="{{old('nid')}}">
                        <span class="text-danger">@error("nid") {{$message}} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" placeholder="Enter Email" name="email" id= "email" value="{{old('email')}}">
                        <span class="text-danger">@error("email") {{$message}} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" placeholder="Enter Password" name="password" id= "password" value="">
                        <span class="text-danger">@error("password") {{$message}} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="text" class="form-control" placeholder="Enter Phone Number" name="phone" id= "phone" value="{{old('phone')}}">
                        <span class="text-danger">@error("phone") {{$message}} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="fname">First Name</label>
                        <input type="text" class="form-control" placeholder="Enter First Name" name="fname" id= "fname" value="{{old('fname')}}">
                        <span class="text-danger">@error("fname") {{$message}} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input type="text" class="form-control" placeholder="Enter Last Name" name="lname" id= "lname" value="{{old('lname')}}">
                        <span class="text-danger">@error("lname") {{$message}} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="address">Enter Address</label>
                        <input type="text" class="form-control" placeholder="Enter Address" name="address" id= "address" value="{{old('address')}}">
                        <span class="text-danger">@error("address") {{$message}} @enderror</span>
                    </div>
                    
                    
                    <button class="button btn btn-block btn-primary" type="submit">Register</button>
                    

                    
                </form>
                <br>
                <a href="login">Already an User!</a>
            </div>
        </div>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

</html>