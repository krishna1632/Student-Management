@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Enrollment Page</div>
    <div class="card-body">
        <a href="{{route('enrollments.index')}}" class="btn btn-danger btn-sm" title="Add new student">
            <i class="fa fa-arrow-left" aria-hidden="true"></i> Go to Index Page
        </a><br><br>
        <div class="card-body">
            <h5 class="card-title">Enrollment No.:- {{$enrollments->enroll_no}}</h5>
            <p class="card-text">Batch ID:- {{$enrollments->batch_id}}</p>
            <p class="card-text">Student ID:- {{$enrollments->student_id}}</p>
            <p class="card-text">Join date:- {{$enrollments->join_date}}</p>
            <p class="card-text">Fee:- {{$enrollments->fee}}</p>
        </div>
        <hr>
    </div>
</div>
@endsection