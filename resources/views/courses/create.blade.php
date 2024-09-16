@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Courses Page</div>
    <div class="card-body">
        <form action="{{url('courses')}}" method="post">
            {!! csrf_field()!!}
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" autocomplete="off"
                required><br>
            <label for="subjects">Subjects</label><br>
            <input type="text" name="subjects" id="subjects" class="form-control" placeholder="Enter subjects"
                autocomplete="off" required><br>
            <label for="duration">Duration</label><br>
            <input type="text" name="duration" id="duration" class="form-control" placeholder="Enter duration"
                autocomplete="off" required><br>
            <input type="submit" value="Save" class="btn btn-success"><br>

        </form><br>

        <a href="{{url('/courses')}}" class="btn btn-primary btn-sm" title="Back">
            <i class="fa fa-plus" aria-hidden="true"></i> Back to index page
        </a><br><br>
    </div>
</div>
@stop