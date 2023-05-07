@extends('layouts.app')

@section('col-1')
    <div class="d-grid col-8 mx-auto mt-4">
        <h2 class="">Scooter Squad</h2>
        <p>Mission Paws’ible Pet Taxi can assist in moving the animal to the closest vet</p>
        <button class="btn btn-background">Book Now</button>
    </div>
    <div class="d-grid col-8 mx-auto mt-4">
        <h2 class="">Fundraise</h2>
        <p>Tell your friends and family about this animal and ask for help to cover the medical bills</p>
        <button class="btn btn-background">Start Now</button>
    </div>
    
@endsection
@section('col-2')
    <img src="{{asset('storage/logo/Group finish Rescue.svg')}}" alt="" class="img-fluid justify-content-center" style="max-height:70vh;">
@endsection