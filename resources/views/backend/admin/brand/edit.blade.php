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
                    <form action="{{ url('/brand/update/'.$brands->id) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="catagoryname">Catagroy</label>
                            <select name="catagory_id" class="form-control">
                                <option disabled>Select A Catagory</option>

                                @foreach($catagories as $row)
                                <option value="{{ $row->id }}">{{ $row->name }}</option>
                                @endforeach
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="catagoryname">Name</label>
                            <input type="text" id="catagoryname" name="name" class="form-control" value="{{ $brands->name }}" placeholder="Enter Subcatagory Name">
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