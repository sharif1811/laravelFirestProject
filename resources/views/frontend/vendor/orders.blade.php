@extends('frontend.master')
@section('content')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Order List</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <table class="table">
                <div class="card">
                    <div class="card-header">
                    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
                    <a class="navbar-brand  text-white" href="{{ url('/vendor/dashboard') }}">Navbar</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link text-white mx-3" href="{{ url('/vendor/order') }}">ORDER</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white mx-3" href="{{ url('/vendor/pending/product/list') }}">PENDING PRODUCT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white mx-3" href="{{ url('/vendor/approved/product/list') }}">APPROVED PRODUCT</a>
                        </li>
                    </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class=" mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 mx-3 mr-2 my-sm-0 text-white" type="submit">Search</button>
                </form>
                </div>
                </nav>
                        <thead>
                            <tr>
                                <th>Sr.</th>
                                <th>images</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Qty</th>
                            </tr>
                        </thead>
                    </div>
                    <div class="card-body">
                        <tbody>
                            @foreach ($orders as $order)
                            <tr>
                                <td scope="row">{{ $loop->index+1 }}</td>
                                <td>
                                    <img src="{{ asset('/product/'.$order->products->image) }}" alt="" height=50 width=50 style="border-radius:50%;">
                                </td>
                                <td>{{ $order->products->name }}</td>
                                <td>{{ $order->products->price }}</td>
                                <td>{{ $order->products->qty }}</td>

                            </tr>
                            @endforeach

                        </tbody>
                    </div>
                </div>



                </table>
             </div>
             {{$orders->links()}}
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