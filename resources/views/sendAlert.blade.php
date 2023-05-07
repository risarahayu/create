@extends('layouts.app')

@section('col-1')
    <p style="color: #BD1A8D" class="mt-5 display-5">Your alert had been send!</p>
    <h5 class="">
            Sit tight while Mission Paws’ible Squad 
        <br>
            receive your message
</h5>
    <div style="color: #BD1A8D;  width:fit-content;"  class="rounded p-2 mx-auto shadow">
            While you wait please see resource
        <br>
            close by that could assis you
    </div>

    <div class="d-grid mt-5   col-8 mx-auto">
        <button class="btn-background btn">
            Continue
        </button>
    </div>
@endsection
@section('col-2')
    <img src="{{asset('storage/logo/Group 11.svg')}}" alt="" class="img-fluid justify-content-center" style="max-height:70vh;">
@endsection