@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h3>Course Page</h3>
    </div>

    <div class="card-body">
        <a href="{{route('courses.index')}}" class="btn btn-danger btn-sm" title="Add new student">
            <i class="fa fa-arrow-left" aria-hidden="true"></i> Go to Index Page
        </a><br><br>
        <div class="card-body">
            <h5 class="card-title">Name: -{{$courses->name}}</h5>
            <p class="card-text">Subjects: -{{$courses->subjects}}</p>
            <p class="card-text">Duration: -{{$courses->duration}}</p>
        </div>
        <hr>
    </div>
</div>
@endsection