@extends('backend.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Size List</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Size List</h4>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Sr.</th>
                                    <th>Catagory Name</th>
                                    <th>Size Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($size as $row)
                                <tr>
                                    <th scope="row">{{ $loop->index+1 }}</th>
                                    <td>{{ $row->catagory->name }}</td>
                                    <td>{{ $row->name }}</td>
                                    <td>
                                        @if($row->status==1)
                                        <a href="" class="btn btn-sm btn-warning">active</a>
                                        @else
                                        <a href=""class="btn btn-sm btn-danger">inactive</a>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('/size/edit/'.$row->id) }}" class="btn btn-sm btn-primary" >Edit</a>
                                        <a href="{{ url('/size/delete/'.$row->id) }}" class="btn btn-sm btn-info" onclick="return confirm('Are You Sure?You Want To Deleted ?')" >Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection