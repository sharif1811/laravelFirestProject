@extends('backend.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
        <div class="card my-3">
            <div class="card-header">
                <a href="{{ url('/order/back') }}" class="btn btn-sm btn-primary">back</a>
                <h3 class="text-center">Order Details</h3>
            </div>
            <div class="card-body">
            <table class="table table-bordered">
                <thead>
                </thead>
                <tbody class="shadow">
                    <tr>
                        <th>User Name</th>
                        <td>{{ $orders->user->name }}</td>
                    </tr>
                    <tr>
                        <th>Vendor Name</th>
                        <td>{{ $orders->vendor->name }}</td>
                    </tr>
                    <tr>
                        <th>Vendor Logo</th>
                        <td>
                            <img src="{{ asset('/avtar/'.$orders->vendor->logo) }}" height=70 width=70 alt="">
                        </td>
                    </tr>
                    <tr>
                        <th>Product Name</th>
                        <td>{{ $orders->product->name }}</td>
                    </tr>
                    <tr>
                        <th>Product Image</th>
                        <td>
                            <img class="rounded-circle" src="{{ asset('/product/'.$orders
                                ->product->image) }}" alt="" height=70 width=70>
                        </td>
                    </tr>
                    <tr>
                        <th>Total Qty</th>
                        <td>{{ $orders->total_qty }}</td>
                    </tr>
                    <tr>
                        <th>Total Price</th>
                        <td>{{ $orders->total_price }}</td>
                    </tr>
                    <tr>
                        <a href="" class="my-2 d-block btn btn-warning btn-sm" onclick="window.print()">print</a>

                    </tr>

                </tbody>
                </table>
            </div>
        </div>
        </div>
        <div class="col-md-3"></div>
        
    </div>
</div>
@endsection