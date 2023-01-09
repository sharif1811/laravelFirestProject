@extends('Frontend.master')
@section('content')

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="card my-5">
                        <div class="card-header">
                            <h4>Product Created</h4>
                            <a href="{{ url('/vendor/dashboard') }}" style="margin-top: -34px;" class="btn btn-sm btn-success float-right">Products Update</a>
                        </div>
                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                <label for="">Catagory</label>
                                    <select name="catagory_id" class="form-control" id="">
                                        <option value=""disabled>Select A Catagory</option>
                                        @foreach($catagories as $catagory)
                                        <option value="{{ $catagory->id }}" @if($catagory->id==$catagory->name) selected @endif >{{$catagory->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group">
                                <label for="">Color</label>
                                    <select class="form-control" name="color_id" id="">
                                        <option value="" disabled>Select A Color</option>
                                        @foreach($colors as $color)
                                        <option value="{{ $color->id }}" @if($color->id==$color->name) selected @endif >{{$color->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Size</label>
                                    <select class="form-control" name="size_id" id="">
                                        <option value="" disabled>Select A Size</option>

                                        @foreach($sizes as $size)
                                        <option value="{{ $size->id }}" @if($size->id==$size->name) selected @endif >{{$size->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <select class="form-control" name="status" id="">
                                        <option value="" selected disabled>Select A Status</option>
                                        <option value="{{1}}" @if($products->status==1)selected @endif> Active</option>
                                        <option value="{{0}}" @if($products->status==0)selected @endif> Inactive
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Product Name</label>
                                    <input type="text" name="name" placeholder="Product Name" class="form-control" value="{{ old('name') }} {{ $products->name }} ">
                                </div>
                                <div class="form-group">
                                    <label for="">Product Price</label>
                                    <input type="text" name="price" placeholder="Product Price" class="form-control" value="{{ old('price') }} {{ $products->price }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Product QTY</label>
                                    <input type="number" min="1" name="qty" placeholder="Product Qty" class="form-control" value="{{ old('qty') }} {{ $products->qty }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Image</label>
                                    <input type="file" name="image" class="form-control" >
                                    <img src="{{ asset('/product/'.$products->image) }}" height=50 width=50 alt="">
                                </div>
                                <div class="form-group">
                                    <label for="">Gallery Image</label>
                                    <input type="file" name="multi_image[]" multiple class="form-control" >
                                    <img src="{{ asset('/gallery/'.$products->multi_image) }}" height="50" width="50" alt="">
                                </div>
                                <button type="submit" class="btn btn-block btn-primary">Product Update</button>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
@endsection