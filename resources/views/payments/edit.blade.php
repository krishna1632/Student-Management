@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Edit Page</div>
    <div class="card-body">
        <form action="{{url('payments/' .$payment->id)}}" method="post">
            {!! csrf_field()!!}
            @method('PATCH')
            <input type="hidden" name="id" id="id" value="{{$payment->id}}">


            <label for="enrollment_id">Enrollment Number</label><br>
            <select name="enrollment_id" id="enrollment_id" class="form-control">
                @foreach($enrollments as $id=>$enroll_no)
                <option value="{{$id}}">{{$enroll_no}}</option>
                @endforeach
            </select>


            <label for="paid_date">Paid Date</label><br>
            <input type="text" name="paid_date" id="paid_date" class="form-control" value="{{$payment->paid_date}}"><br>
            <label for="amount">Amount</label><br>
            <input type="text" name="amount" id="amount" class="form-control" value="{{$payment->amount}}"><br>
            <input type="submit" value="Update" class="btn btn-success"><br>
        </form><br>
        <a href="{{route('courses.index')}}" class="btn btn-danger btn-sm" title="Add new teacher">
            <i class="fa fa-arrow-left" aria-hidden="true"></i> Go to Index Page
        </a><br><br>
    </div>
</div>
@stop