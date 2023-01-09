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
                    <th>Name</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                @foreach($catagorys as $catagory)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $catagory->id}}</td>
                        <td>{{ $catagory->name }}</td> 
                        <td>
                            <img src="{{ asset('/category/'.$catagory->image) }}" width="80" height="80" alt="">
                        </td>
                        <td>
                            <a href="{{ url('/catagory/edit/'.$catagory->id) }}" class="btn btn-md btn-info">Edit</a>
                            <a href="{{ url('/catagory/delete/'.$catagory->id) }}" class="btn btn-md btn-danger" onclick="return confirm('Are you sure.you want to deleted?')" >Delete</a>
                        </td>
                    </tr>
                
                @endforeach

            </table>
        </div>
        {{ $catagorys->links() }}
        <div class="col-md-1"></div>
    </div>
</div>
@endsection