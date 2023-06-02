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

    <title>Check Out Page</title>
  </head>
  <body>
    <div class="container">
    <form action="{{ url('/order/detailes/for-order') }}" method="post">
        @csrf
        <div class="row">
            <div class="col">

                <div class="card my-2">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th class="text-center">SL.</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Qty</th>
                                <th class="text-center">Total-Price</th>
                                <th class="text-center">Action</th>
                            </tr>

                            @php
                                $sum = 0;
                                $qty = 0;
                            @endphp
                            @foreach ($checkOut as $cart)
                                <tr>
                                    <td class="text-center">{{ $loop->index+1 }}</td>
                                    <input type="hidden" name="product_id" value="{{ $cart->product_id }}">
                                    <input type="hidden" name="vendor_id" value="{{ $cart->vendor_id }}">
                                    <td class="text-center">{{ $cart->product ?$cart->product->name:'' }}</td>
                                    <td class="text-center">{{ $cart->price }}</td>
                                    <td class="text-center">
                                        <form action="{{ url('/cart/product/update/'.$cart->id) }}" method="post">
                                        @csrf
                                        <input type="number" name="qty" min="1" value="{{ $totalqty=$cart->qty }}">
                                        <button class="btn btn-sm btn-primary" >Update</button>
                                        </form>
                                    </td>
                                    <td class="text-center">{{ $totalPrice = $cart->price * $cart->qty }}</td>
                                    <td class="text-center">
                                        <a href="{{ url('/cart/product/delete/'.$cart->id) }}" class="btn btn-sm btn-primary" onclick="return confirm('Are You Sure ? You Want To Deleted ?')">Delete</a>
                                    </td>
                                </tr>
                                @php
                                    $sum +=$totalPrice;
                                    $qty +=$totalqty;
                                @endphp
                            @endforeach
                            <tr>
                                <td colspan="4">Subtotal</td>
                                <th colspan="2">{{ $sum }}</th>
                            </tr>

                        </table>

                    </div>
                </div>
            </div>
        </div>
        <center>Shiping And Billing Information</center>
        <hr><hr>
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-body">

                            @csrf
                            <input type="hidden" name="total_price" value="{{ $sum }}">
                            <input type="hidden" name="total_qty" value="{{ $qty }}">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" value="{{ auth()->check() ? auth()->user()->name : old('name') }}" class="form-control" placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" value="{{ auth()->check() ? auth()->user()->email  : old('email') }}" class="form-control" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="tel" value="{{ auth()->check() ? auth()->user()->phone : old('phone') }}" name="phone" class="form-control" placeholder="Enter Phone">
                            </div>
                            <div class="form-group">
                                <label for="">Address</label>
                                <textarea name="address" class="form-control" placeholder="Enter Your Address">{{ auth()->check() ? auth()->user()->address : old('address') }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-block btn-primary">Submit</button>

                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </form>
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