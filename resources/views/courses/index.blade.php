@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">
        <h2>Course Application:</h2>
    </div>
    <div class="card-body">
        <a href="{{url('/courses/create')}}" class="btn btn-success btn-sm" title="Add new Course">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New
        </a><a href="{{url('http://127.0.0.1:8000/')}}" class="btn btn-danger btn-sm" title="go to home page">
            <i class="fa fa-home" aria-hidden="true"></i> Home Page
        </a><br><br>



        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Course Name</th>
                        <th>Subjects</th>
                        <th>Duration</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($courses as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->subjects}}</td>
                        <td>{{$item->duration}}</td>

                        <td>
                            <a href="{{url('/courses'.'/'. $item->id)}}" title="View Course"> <button
                                    class="btn btn-info btn-sm"><i class="fa fa-eye"
                                        aria-hidden="true"></i>View</button>
                            </a>

                            <a href="{{url('/courses'.'/'. $item->id. '/edit')}}" title="Edit Course"><button
                                    class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                        aria-hidden="true"></i>Edit</button></a>

                            <form action="{{url('/courses'.'/'.$item->id)}}" method="post" accept-charset="UTF-8"
                                style="display:inline">
                                {{method_field('DELETE')}}
                                {{csrf_field()}}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Course"
                                    onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o"
                                        aria-hidden="true"></i>Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{$courses->links('pagination::bootstrap-4')}}

        </div>
    </div>
</div>
@endsection