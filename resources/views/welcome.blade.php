<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    @extends('Layout.app')
        @section('content')
        <div style="margin-left: 1%;">
            <form action="{{route('deshboard')}}" class="form-group" method="post">
                <!-- Cross Site Request Forgery-->
                {{csrf_field()}}

                <div class="col-md-4 form-group">
                    <b><span>Enter Any Number: </span></b>
                    <input type="number" name="number" value="{{old('number')}}" class="form-control">
                    @error('number')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <br>
                <input type="submit" class="btn btn-success" value="Enter" >                  
            </form>
        </div>
        <hr>
        @endsection
</body>
</html>