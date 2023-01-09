@extends('backend.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Manage</title>
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
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Phome</th>
                                    <th class="text-center">Address</th>
                                    <th class="text-center">Is_Approved</th>
                                    <th class="text-center">Logo</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($vendors as $row)
                                <tr>
                                    <td scope="row">{{ $loop->index+1 }}</td>
                                    <td>{{ $row->name }}</td>
                                    <td class="w-50">{{ $row->email }}</td>
                                    <td>{{ $row->phone }}</td>
                                    <td>{{ $row->address }}</td>
                                    <td>
                                        @if($row->is_approved==1)
                                        <a href="" class="btn btn-sm btn-primary" >Active</a>
                                        @else
                                        <a href="" class="btn btn-sm btn-danger" >Inactive</a>
                                        @endif
                                    </td>
                                    <td>
                                        <img src="{{ asset('/avtar/'.$row->logo) }}" alt="" height=50 width=50 >
                                    </td>
                                    <td>
                                        @if($row->is_approved==0)
                                        <a href="{{ url('/vendor/pending/'.$row->id) }}" class="btn btn-sm btn-success" >Approved</a>
                                        @else
                                        <a href="{{ url('/vendor/approve/'.$row->id) }}" class="btn btn-sm btn-success" >Pending</a>
                                        @endif
                                        <a href="{{ url('/vendor/delete/'.$row->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are You Sure?You Want To Deleted? ')" >Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $vendors->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection