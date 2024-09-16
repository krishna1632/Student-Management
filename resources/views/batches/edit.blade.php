@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Edit Page</div>
    <div class="card-body">
        <form action="{{url('batches/' .$batches->id)}}" method="post">
            {!! csrf_field()!!}
            @method('PATCH')
            <input type="hidden" name="id" id="id" value="{{$batches->id}}">
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name" class="form-control" value="{{$batches->name}}"><br>
            <label for="course_id">Subjects</label><br>
            <input type="text" name="course_id" id="course_id" class="form-control" value="{{$batches->course_id}}"><br>
            <label for="start_date">Dration</label><br>
            <input type="text" name="start_date" id="start_date" class="form-control"
                value="{{$batches->start_date}}"><br>
            <input type="submit" value="Update" class="btn btn-success"><br>
        </form>
        <a href="{{route('batches.index')}}" class="btn btn-danger btn-sm" title="Add new teacher">
            <i class="fa fa-arrow-left" aria-hidden="true"></i> Go to Index Page
        </a><br><br>
    </div>
</div>
@stop