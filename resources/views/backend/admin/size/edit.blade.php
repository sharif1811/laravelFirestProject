@extends('backend.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Size Create</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <form action="{{ url('/size/update/'.$size->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Status</label>
                                <select name="catagory_id" id="" class="form-control">
                                    <option value="" disabled >Select A Color Name</option>
                                    @foreach($catagories as $catagory)
                                        <option value="{{ $catagory->id }}" @if($catagory->id==$catagory->name) selected @endif >{{ $catagory->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Size Name</label>
                                <input type="text" value="{{ $size->name }}" name="name" placeholder="Enter Size Name" class="form-control">   
                            </div>
                            <div class="form-group">
                                <label for="">Status</label>
                                <select class="form-control" name="status" id="">
                                    <option value="" disabled  >Select A Size Name</option>
                                    <option value="1" @if($size->status==1) selected @endif >Active</option>
                                    <option value="0"  @if($size->status==0) selected @endif>Inactive</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-block btn-danger">Size Create</button>

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