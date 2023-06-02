@extends('backend.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <div class="table table-bordered text-center">
                            <table class="table table-bordered text-center ">
                                    <div>
                                        <tr>
                                            <th>Name</th>
                                            <td>{{ $userView->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>{{ $userView->email }}</td>
                                        </tr>
                                        <tr>
                                            <th>Phone</th>
                                            <td>{{ $userView->phone }}</td>
                                        </tr>
                                        <tr>
                                            <th>Address</th>
                                            <td>{{ $userView->address }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                 <a href="{{ url('/user/manage') }}" class="btn btn-block btn-warning my-3">Back</a>
                                            </td>
                                            <td>
                                                 <a href="" onclick="window.print()" class="btn btn-block btn-primary my-3">Print</a>
                                            </td>
                                               
                                            
                                        </tr>
                                    </div>
                            </table>


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
@endsection