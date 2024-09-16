@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Edit Enrollment Page</div>
    <div class="card-body">
        <form action="{{url('enrollments/' .$enrollments->id)}}" method="post">
            {!! csrf_field()!!}
            @method('PATCH')
            <input type="hidden" name="id" id="id" value="{{$enrollments->id}}">
            <label for="enroll_no">Enrollment No.</label><br>
            <input type="text" name="enroll_no" id="enroll_no" class="form-control"
                value="{{$enrollments->enroll_no}}"><br>
            <label for="batch_id">Batch ID</label><br>
            <input type="text" name="batch_id" id="batch_id" class="form-control"
                value="{{$enrollments->batch_id}}"><br>
            <label for="student_id">Student ID</label><br>
            <input type="text" name="student_id" id="student_id" class="form-control"
                value="{{$enrollments->student_id}}"><br>
            <label for="join_date">Join Date</label><br>
            <input type="text" name="join_date" id="join_date" class="form-control"
                value="{{$enrollments->join_date}}"><br>
            <label for="fee">Fees</label><br>
            <input type="text" name="fee" id="fee" class="form-control" value="{{$enrollments->fee}}"><br>
            <input type="submit" value="Update" class="btn btn-success"><br>
        </form>
        <a href="{{route('enrollments.index')}}" class="btn btn-danger btn-sm" title="Add new teacher">
            <i class="fa fa-arrow-left" aria-hidden="true"></i> Go to Index Page</a>
        <br><br>
    </div>
</div>
@stop