@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Batches Page</div>
    <div class="card-body">
        <form action="{{url('batches')}}" method="post">
            {!! csrf_field()!!}
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" autocomplete="off"
                required><br>
            <label for="course_id">Course ID</label><br>
            <input type="text" name="course_id" id="course_id" class="form-control" placeholder="Enter course_id"
                autocomplete="off" required><br>
            <label for="start_date">Start Date</label><br>
            <input type="text" name="start_date" id="start_date" class="form-control" placeholder="Enter start_date"
                autocomplete="off" required><br>
            <input type="submit" value="Save" class="btn btn-success"><br>

        </form><br>

        <a href="{{url('/batches')}}" class="btn btn-primary btn-sm" title="Back">
            <i class="fa fa-plus" aria-hidden="true"></i> Back to index page
        </a><br><br>
    </div>
</div>
@stop