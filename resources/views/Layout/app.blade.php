<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
<center><h1>Welcome Back, User</h1></center>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></link>
                <div class="navbar navbar-inverse">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="navbar-collapse collapse" id="mobile_menu">
                                    <ul class="nav navbar-nav" id="nave">
                                        <li class=""><a href="{{route('deshboard')}}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                                        <li class=""><a href="{{route('name')}}" ><span class="glyphicon glyphicon-pencil"></span> Add Name</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                <br>
                <div class="content">
                    @yield('content')
                </div>
</body>
</html>