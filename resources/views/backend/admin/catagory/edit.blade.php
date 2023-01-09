@extends('backend.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    @if(session()->has('success'))
                        <div class="alert alert-info">{{ session()->get('success') }}</div>
                    @endif
                </div>
                <div class="card-body">
                    <form action="{{ url('/catagory/update/'.$catagory->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="catagoryname">Name</label>
                            <input type="text" id="catagoryname" name="name" class="form-control" value="{{ $catagory->name }}" placeholder="Enter Catagory Name">
                        </div>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control">
                            <img src="{{ asset('/category/'.$catagory->image) }}" width="80" height="80" alt="">
                        </div>
                        <button type="submit" class="btn btn-block btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
@endsection