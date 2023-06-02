@extends('backend.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
                <form action="{{ url('/order/manage') }}" method="get">
                    <div class="input-group mb-3">
                        <input type="date" name="from" class="form-control" placeholder="Username" aria-label="Username">
                        <span class="input-group-text">To</span>
                        <input type="date" name="to" class="form-control" placeholder="Server" aria-label="Server">
                        <button type="submit" class="btn btn-sm btn-success">Serce</button>
                    </div>
                </form>

                <tr>
                    <th scope="col">Sl.</th>
                    <th scope="col">U-name</th>
                    <th scope="col">V-name</th>
                    <th scope="col">P-name</th>
                    <th scope="col">T-qty</th>
                    <th scope="col">T-price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <th scope="row">{{ $loop->index+1 }}</th>
                        <td>{{ $order->user->name }}</td>
                        <td>{{ $order->product->name }}</td>
                        <td>{{ $order->vendor->name }}</td>
                        <td>{{ $order->total_qty }}</td>
                        <td>{{ $order->total_price }}</td>
                        <td>
                            <a href="{{ url('/order/view/'.$order->id) }}" class="btn btn-sm btn-primary">View</a>
                            <a href="{{ url('/order/delete/'.$order->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are You Sure.You Want To Deleted?')">Delete</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        </div>
    </div>
</div>
@endsection