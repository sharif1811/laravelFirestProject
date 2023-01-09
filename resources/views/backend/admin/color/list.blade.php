@extends('backend.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color List</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Color List</h4>
                    </div>
                    <div class="card-body">
                        <table class="table bordered table-dark table-striped">
                            <tr>
                                <th>Sr.</th>
                                <th>Catagory Name</th>
                                <th>Color Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            @foreach($color as $row)
                            <tr>
                                <th>{{ $loop->index+1 }}</th>
                                <td>{{ $row->catagory->name }}</td>
                                <td>{{ $row->name }}</td>
                                <td>
                                    @if($row->status==1)
                                        <span class="btn btn-md btn-success">Active</span>
                                    @else
                                    <span class="btn btn-md btn-danger">
                                        InActive
                                    </span>

                                    @endif    
                                    
                                </td>
                                <td>
                                    <a href="{{ url('/color/edit/'.$row->id) }}" class="btn btn-primary btn-md">Edit</a>
                                    <a href="{{ url('/color/delete/'.$row->id) }}" class="btn btn-danger btn-md" onclick="return confirm('are you sure.you want to delete')">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        {{ $color->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection