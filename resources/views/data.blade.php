<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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
        <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"> <span class="glyphicon glyphicon-user">  </span> Your Data</h3>
            </div>
            <div class="panel-body">
            <div class="table-responsive">
                @csrf
                <table id="editable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                      <th>Your Name</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                        @foreach($datas as $data)
                            <tr>
                            <td>{{$data->name}}</td>
                            </tr>
                        @endforeach
                </tbody>
                </table>
            </div>
            </div>
            <center><button class="btn btn-success" style="width: 20%;" onclick="copyToClipboard('#myTable')">Copy!!</button></center>
            <br>
        </div>
        </div>
        @endsection
        <script>
            function copyToClipboard(element) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($(element).text()).select();
            document.execCommand("copy");
            $temp.remove();
            }
        </script>
</body>
</html>