@extends('backend.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Create</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                    <h4>Color Create</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/color/store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Status</label>
                                <select name="catagory_id" id="" class="form-control">
                                    <option value="" disabled selected>Select A Color Name</option>
                                    @foreach($catagories as $row)
                                    <option value="{{ $row->id }}">{{$row->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="">Color Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Color Name">
                            </div>

                            <div class="form-group">
                                <label for="">Status</label>
                                <select name="status" id="" class="form-control">
                                    <option value="" disabled selected>Select A Color Name</option>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-block btn-primary">Color Update</button>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3"></div>

        </div>
    </div>
</body>
</html>
@endsection