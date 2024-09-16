@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Edit Page</div>
    <div class="card-body">
        <form action="{{url('courses/' .$courses->id)}}" method="post">
            {!! csrf_field()!!}
            @method('PATCH')
            <input type="hidden" name="id" id="id" value="{{$courses->id}}">
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name" class="form-control" value="{{$courses->name}}"><br>
            <label for="subjects">Subjects</label><br>
            <input type="text" name="subjects" id="subjects" class="form-control" value="{{$courses->subjects}}"><br>
            <label for="duration">Dration</label><br>
            <input type="text" name="duration" id="duration" class="form-control" value="{{$courses->duration}}"><br>
            <input type="submit" value="Update" class="btn btn-success"><br>
        </form>
        <a href="{{route('courses.index')}}" class="btn btn-danger btn-sm" title="Add new teacher">
            <i class="fa fa-arrow-left" aria-hidden="true"></i> Go to Index Page
        </a><br><br>
    </div>
</div>
@stop