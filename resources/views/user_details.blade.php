<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
                <h4>Your Info</h4>
                <hr>
                <ul>
                    <li>NID: {{ $current_user->nid }}</li>
                    <li>Email: {{ $current_user->email }}</li>
                    <li>Phone Number: {{ $current_user->phone }}</li>
                    <li>First Name: {{ $current_user->fname }}</li>
                    <li>Last Name: {{ $current_user->lname }}</li>
                    <li>Address: {{ $current_user->address }}</li>
                </ul>

                <form action="{{route('edit-user-details')}}" method="post">
                    @csrf
                    <button class="button btn btn-block btn-primary" type="submit">Edit</button>
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