@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Payment Page</div>
    <div class="card-body">
        <a href="{{route('payments.index')}}" class="btn btn-danger btn-sm" title="Add new student">
            <i class="fa fa-arrow-left" aria-hidden="true"></i> Go to Index Page
        </a><br><br>
        <div class="card-body">
            <h5 class="card-title">Enrollment No.: -{{$payments->enrollment->enroll_no}}</h5>
            <p class="card-text">Paid Date: -{{$payments->paid_date}}</p>
            <p class="card-text">Amount: -{{$payments->amount}}</p>

        </div>
        <hr>
    </div>
</div>
@endsection