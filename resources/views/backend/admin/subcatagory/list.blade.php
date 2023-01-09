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
                @foreach($subcatagories as $subcatagory)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $subcatagory->id }}</td>
                        <td>{{ $subcatagory->catagory->name}}</td>
                        <td>{{ $subcatagory->name }}</td> 
                        <td>
                            <a href="{{ url('/subcatagory/edit/'.$subcatagory->id) }}" class="btn btn-md btn-info">Edit</a>
                            <a href="{{ url('/subcatagory/delete/'.$subcatagory->id) }}" class="btn btn-md btn-danger" onclick="return confirm('Are you sure.you want to deleted?')" >Delete</a>
                        </td>
                    </tr>
                
                @endforeach

            </table>
        </div>
        {{ $subcatagories->links() }}
        <div class="col-md-1"></div>
    </div>
</div>
@endsection