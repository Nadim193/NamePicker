<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Name</title>
</head>
<body>
    @extends('Layout.app')
        @section('content')
        <center><h1>Add Your Item</h1></center>

        @if(session()->has('success'))
            <div class="alert alert-success">
            {{ session()->get('success') }}
            </div>
        @endif
        @if(session()->has('error'))
            <div class="alert alert-danger">
            {{ session()->get('error') }}
            </div>
        @endif

        <div style="margin-left: 1%;">
            <form action="{{route('submit')}}" class="form-group" method="post">
                <!-- Cross Site Request Forgery-->
                {{csrf_field()}}

                <div class="col-md-4 form-group">
                    <b><span>Enter Name: </span></b>
                    <input type="text" name="name" value="{{old('name')}}" class="form-control">
                    @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <br>
                <input type="submit" class="btn btn-success" value="Insert" >                  
            </form>
        </div>
        @endsection
</body>
</html>