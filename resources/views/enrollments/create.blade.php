@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Enrollment Page</div>
    <div class="card-body">
        <form action="{{url('enrollments')}}" method="post">
            {!! csrf_field()!!}
            <label for="enroll_no">Enrollment No.</label><br>
            <input type="text" name="enroll_no" id="enroll_no" class="form-control"><br>
            <label for="batch_id">Batch ID</label><br>
            <input type="text" name="batch_id" id="batch_id" class="form-control"><br>
            <label for="student_id">Student ID</label><br>
            <input type="text" name="student_id" id="student_id" class="form-control"><br>
            <label for="join_date">Join Date</label><br>
            <input type="text" name="join_date" id="join_date" class="form-control"><br>
            <label for="fee">Fees</label><br>
            <input type="text" name="fee" id="fee" class="form-control"><br>
            <input type="submit" value="Save" class="btn btn-success"><br>
        </form>
        <br>
        <a href="{{url('/enrollments')}}" class="btn btn-primary btn-sm" title="Back">
            <i class="fa fa-plus" aria-hidden="true"></i> Back to index page
        </a><br><br>
    </div>
</div>
@stop