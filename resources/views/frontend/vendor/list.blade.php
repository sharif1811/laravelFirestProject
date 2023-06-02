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

    <title>Product List</title>
  </head>
  <body>
        <div class="container">
           
            <div class="row">
                <div class="col-lg-12">
                    <div class="card my-5">
                        <div class="card-header">
                        <div class="row">
             <nav class="navbar navbar-expand-lg navbar-light bg-primary">
                    <a class="navbar-brand  text-white" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link text-white mx-5" href="{{ url('/vendor/order') }}">ORDER</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white mx-5" href="{{ url('/vendor/pending/product/list') }}">PENDING PRODUCT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white mx-5" href="{{ url('/vendor/approved/product/list') }}">APPROVED PRODUCT</a>
                        </li>
                    </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 mx-3 mr-2 my-sm-0 text-white" type="submit">Search</button>
                </form>
                </div>
                </nav>
            </div>
                            <h4>Product List</h4>
                            <a href="{{ url('/vendor/product/create') }}" class="btn btn-sm btn-primary float-right" style="margin-top:-34px">Create Product</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>SL.</th>
                                        <th>Image</th>
                                        <th>Product_name</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Qty</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $row)
                                    <tr>
                                        <td scope="row">{{ $loop->index+1 }}</td>
                                        <td>
                                            <img src="{{ asset('/product/'.$row->image )}}" alt="" height="50" width="50">
                                        </td>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->price }}</td>
                                        <td>
                                            @if($row->status==1)
                                            <span style="background-color:green; display:inline-block; padding:7px 10px;border-radius:5px; color:white;" >Approved</span>
                                            @else
                                            <span style="background-color:red; display:inline-block; padding:7px 10px;border-radius:5px; color:white;">Pending</span>
                                            @endif
                                        </td>
                                        <td>{{ $row->qty }}</td>
                                        <td>
                                            <a href="{{ url('/vendor/product/edit/'.$row->id) }}" class="btn btn-md btn-primary">Edit</a>
                                            <a href="{{ url('/vendor/product/delete/'.$row->id) }}" onclick="return confirm('Are You Sure?You want to deleted')" class="btn btn-md btn-danger" >Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
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