@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h3>Teacher Page</h3>
    </div>

    <div class="card-body">
        <a href="{{route('teachers.index')}}" class="btn btn-danger btn-sm" title="Add new student">
            <i class="fa fa-arrow-left" aria-hidden="true"></i> Go to Index Page
        </a><br><br>
        <div class="card-body">
            <h5 class="card-title">Name: -{{$teachers->name}}</h5>
            <p class="card-text">Address: -{{$teachers->address}}</p>
            <p class="card-text">Mobile: -{{$teachers->mobile}}</p>
        </div>
        <hr>
    </div>
</div>
@endsection