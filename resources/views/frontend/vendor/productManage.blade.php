@extends('backend.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Product Manage</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <table class="table table-borderd table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">SL</th>
                                    <th class="text-center">Catagory Name</th>
                                    <th class="text-center">Product Name</th>
                                    <th class="text-center">Product Qty</th>
                                    <th class="text-center">Product Price</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Image</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $row)
                                <tr>
                                    <td scope="row">{{ $loop->index+1 }}</td>

                                    <td>{{ $row->catagory->name }}</td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->qty }}</td>
                                    <td>{{ $row->price }}</td>
                                    <td>
                                        @if($row->status==1)
                                        <a href="" class="btn btn-sm btn-primary" >Active</a>
                                        @else
                                        <a href="" class="btn btn-sm btn-danger" >Inactive</a>
                                        @endif
                                    </td>
                                    <td>
                                        <img class="rounded-circle" src="{{ asset('/product/'.$row->image )}}" alt="" height=50 width=50 >
                                    </td>
                                    <td>
                                        @if($row->status==0)
                                            <a href="{{ url('/vendor/product/approved/'.$row->id) }}" class="btn btn-sm btn-primary" >Approved</a>
                                        @else
                                            <a href="{{ url('/vendor/product/pending/'.$row->id) }}" class="btn btn-sm btn-info" >Pending</a>
                                        @endif

                                        <a href="{{ url('/vendor/product/drop/'.$row->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are You Sure?You Want To Deleted?')" >Delete</a>
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
</body>
</html>
@endsection