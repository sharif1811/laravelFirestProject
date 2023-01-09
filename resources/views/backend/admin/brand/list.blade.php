@extends('backend.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <table class="table table-bordered">
                @if(session()->has('success'))
                    <div class="alert alert-info">{{ session()->get('success') }}</div>
                @endif
                <tr>
                    <th>Sr..</th>
                    <th>Id</th>
                    <th>Catagory Name</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                @foreach($brands as $brand)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $brand->id }}</td>
                        <td>{{ $brand->catagory->name}}</td>
                        <td>{{ $brand->name }}</td> 
                        <td>
                            <a href="{{ url('/brand/edit/'.$brand->id) }}" class="btn btn-md btn-info">Edit</a>
                            <a href="{{ url('/brand/delete/'.$brand->id) }}" class="btn btn-md btn-danger" onclick="return confirm('Are you sure.you want to deleted?')" >Delete</a>
                        </td>
                    </tr>
                
                @endforeach

            </table>
        </div>
        {{ $brands->links() }}
        <div class="col-md-1"></div>
    </div>
</div>
@endsection