<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset" style="margin-top:20px;">
                <h4>Update Details</h4>
                <ul>
                    <li>NID: {{ $current_details->nid }}</li>
                    <hr>
                </ul>
                <form action="{{route('confirm-user-details-edit')}}" method="post">
                    @csrf
                    
                    <div class="form-group">
                        <label for="email">New Email</label>
                        <input type="text" class="form-control" placeholder="{{$current_details->email}}" name="email" id= "email" value="{{old('email')}}">
                        <span class="text-danger">@error("email") {{$message}} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="password">New Password</label>
                        <input type="password" class="form-control" placeholder="Enter New Password" name="password" id= "password" value="">
                        <span class="text-danger">@error("password") {{$message}} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="phone">New Phone Number</label>
                        <input type="text" class="form-control" placeholder="{{$current_details->phone}}" name="phone" id= "phone" value="{{old('phone')}}">
                        <span class="text-danger">@error("phone") {{$message}} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="fname">New First Name</label>
                        <input type="text" class="form-control" placeholder="{{$current_details->fname}}" name="fname" id= "fname" value="{{old('fname')}}">
                        <span class="text-danger">@error("fname") {{$message}} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="lname">New Last Name</label>
                        <input type="text" class="form-control" placeholder="{{$current_details->lname}}" name="lname" id= "lname" value="{{old('lname')}}">
                        <span class="text-danger">@error("lname") {{$message}} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="address">New Address</label>
                        <input type="text" class="form-control" placeholder="{{$current_details->address}}" name="address" id= "address" value="{{old('address')}}">
                        <span class="text-danger">@error("address") {{$message}} @enderror</span>
                    </div>
                    
                    
                    <button class="button btn btn-block btn-primary" type="submit">Confirm Edit</button>
                    

                </form>
                <br>
                <a href="user-dashboard">Return to Dashboard</a>
                <br>
                <a href="logout-user">Logout</a>
            </div>
        </div>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

</html>