@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Students Page</div>
    <div class="card-body">
        <form action="{{url('students')}}" method="post">
            {!! csrf_field()!!}
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" autocomplete="off"
                required><br>
            <label for="address">Address</label><br>
            <input type="text" name="address" id="address" class="form-control" placeholder="Enter Address"
                autocomplete="off" required><br>
            <label for="mobile">Mobile Number</label><br>
            <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Enter Mobile"
                autocomplete="off" required><br>
            <input type="submit" value="Save" class="btn btn-success"><br>

        </form><br>

        <a href="{{url('/students')}}" class="btn btn-primary btn-sm" title="Back">
            <i class="fa fa-plus" aria-hidden="true"></i> Back to index page
        </a><br><br>
    </div>
</div>
@stop