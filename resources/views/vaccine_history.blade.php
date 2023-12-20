<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset" style="margin-top:20px;">
                <h4>History & Status of your Bookings</h4>
                <hr>
                <table class="table">
                    <thead>
                        <th>Vaccine Name</th>
                        <th>Hospital Name</th>
                        <th>Appointed Date</th>
                        <th>Payment Status?</th>
                        <th>Taken?</th>
                    </thead>
                    <tbody>
                        @foreach($total as $t)
                            <tr>
                                <td>{{$t[0]}}</td>
                                <td>{{$t[1]}}</td>
                                <td>{{$t[2]}}</td>
                                <td>{{$t[3]}}</td>
                                <td>{{$t[4]}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="user-dashboard">Return to Dashboard</a>
                <br>
                <a href="logout-user">Logout</a>
            </div>
        </div>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

</html>