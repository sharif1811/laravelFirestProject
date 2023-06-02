@extends('backend.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <div class="table">
                        <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Sl.</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $row)
                                        <tr>
                                            <th scope="row">{{ $loop->index+1 }}</th>
                                            <td>{{ $row->name }}</td>
                                            <td>{{ $row->email }}</td>
                                            <td>{{ $row->phone }}</td>
                                            <td>{{ $row->address }}</td>
                                            <td>
                                                <a href="{{ url('/user/view',$row->id) }}" class="btn btn-sm btn-primary">View</a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection