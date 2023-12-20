<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results for Hospital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset" style="margin-top:20px;">
                <h4>Hospital Results</h4>
                <hr>
                <form action="search-hospital" method="post">
                    @csrf
                    <input type="text" name="query" placeholder="Find Your Hospital!">
                    <button type="submit">Search</button>
                </form>
                <ul>
                    @foreach ($results as $result)
                        <li>{{ $result }}</li>
                        <form action="selected-hospital" method="post" style="display: inline;">
                            @csrf
                            <input type="hidden" name="value" id="value" value="{{ $result }}">
                            <button class="button btn btn-block btn-primary" type="submit">Select</button>

                        </form>
                    @endforeach
                </ul>
                <a href="book-vaccine">Show All Available Vaccines</a>
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