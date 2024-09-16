@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h3>Batch Page</h3>
    </div>

    <div class="card-body">
        <a href="{{route('batches.index')}}" class="btn btn-danger btn-sm" title="Add new student">
            <i class="fa fa-arrow-left" aria-hidden="true"></i> Go to Index Page
        </a><br><br>
        <div class="card-body">
            <h5 class="card-title">Name: -{{$batches->name}}</h5>
            <p class="card-text">Course ID: -{{$batches->course_id}}</p>
            <p class="card-text">Start Date: -{{$batches->start_date}}</p>
        </div>
        <hr>
    </div>
</div>
@endsection