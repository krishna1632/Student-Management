@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Payments</div>
    <div class="card-body">
        <form action="{{url('payments')}}" method="post">
            {!! csrf_field()!!}
            <label for="enrollment_id">Enrollment Number</label><br>
            <select name="enrollment_id" id="enrollment_id" class="form-control">
                @foreach($enrollments as $id=>$enroll_no)
                <option value="{{$id}}">{{$enroll_no}}</option>
                @endforeach
            </select>

            <label for="paid_date">Paid Date</label><br>
            <input type="text" name="paid_date" id="paid_date" class="form-control"><br>

            <label for="amount">Amount</label><br>
            <input type="text" name="amount" id="amount" class="form-control"><br>

            <input type="submit" value="Save" class="btn btn-success"><br>
        </form>
        <br>
        <a href="{{url('/payments')}}" class="btn btn-primary btn-sm" title="Back">
            <i class="fa fa-plus" aria-hidden="true"></i> Back to index page
        </a><br><br>
    </div>
</div>
@stop