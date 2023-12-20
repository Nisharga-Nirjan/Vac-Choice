<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vac-Choice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
                <h4>Welcome To Vac-Choice. Hello {{$fname}}-{{$nid}}</h4>
                <hr>
                @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                <form action="{{route('book-vaccine')}}" method="post">
                    @csrf
                    <button class="button btn btn-block btn-primary" type="submit">Book a Vaccine!</button>
                </form>

                <br>

                <form action="{{route('vac-history')}}" method="post">
                    @csrf
                    <button class="button btn btn-block btn-primary" type="submit">Check Your History!</button>
                </form>
                
                <br>

                <form action="{{route('user-details')}}" method="post">
                    @csrf
                    <button class="button btn btn-block btn-primary" type="submit">Personal Info</button>
                </form>

                <br>

                <a href="logout-user">Logout</a>
                
            </div>
        </div>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</html>