@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Edit Page</div>
    <div class="card-body">
        <form action="{{url('teachers/' .$teachers->id)}}" method="post">
            {!! csrf_field()!!}
            @method('PATCH')
            <input type="hidden" name="id" id="id" value="{{$teachers->id}}">
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name" class="form-control" value="{{$teachers->name}}"><br>
            <label for="address">Address</label><br>
            <input type="text" name="address" id="address" class="form-control" value="{{$teachers->address}}"><br>
            <label for="mobile">Mobile Number</label><br>
            <input type="text" name="mobile" id="mobile" class="form-control" value="{{$teachers->mobile}}"><br>
            <input type="submit" value="Update" class="btn btn-success"><br>
        </form>
        <a href="{{route('teachers.index')}}" class="btn btn-danger btn-sm" title="Add new teacher">
            <i class="fa fa-arrow-left" aria-hidden="true"></i> Go to Index Page
        </a><br><br>
    </div>
</div>
@stop