@extends('layouts.app')

@section('col-1')
<div class="container py-5">
<div class="card" >
<div class="card-header" >
    Dog Information
</div>
<div class="card-body" >
<div class="container" >
    <!--  -->
<div class="row ">
    <div class="col-md-6">
        <div class="row">
            <div class="col-2">
                <img src="{{asset('storage/logo/cil_animal_black.svg')}}" alt="" class="img-fluid">
            </div>
            <div class="col-10 text-left">
                Animal Type
                <br>
                {{($file->animalType)}}
            </div>
        </div>
    </div>
    <div class="col-md-6">
    <div class="row">
            <div class="col-2">
                <img src="{{asset('storage/logo/bi_gender-ambiguous.svg')}}" alt="" class="img-fluid">
            </div>
            <div class="col-10 text-left">
                Gender
                <br>
                {{($file->gender)}}
            </div>
        </div>
    </div>
</div>
 <!--  -->
 <!--  -->
<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-2">
                <img src="{{asset('storage/logo/tabler_color-swatch.svg')}}" alt="" class="img-fluid">
            </div>
            <div class="col-10 text-left">
                Color(s)
                <br>
                {{($file->color)}}
            </div>
        </div>
    </div>
    <div class="col-md-6">
    <div class="row">
            <div class="col-2">
                <img src="{{asset('storage/logo/cil_animal (1).svg')}}" alt="" class="img-fluid">
            </div>
            <div class="col-10 text-left">
                Size
                <br>
                {{($file->size)}}
            </div>
        </div>
    </div>
</div>
 <!--  -->
 <!--  -->
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-1">
                <img src="{{asset('storage/logo/ic_outline-description.svg')}}" alt="" class="img-fluid">
            </div>
            <div class="col-10 text-left">
                Description
                <br>
                {{($file->description)}}
            </div>
        </div>
    </div>
</div>
 <!--  -->
  <!--  -->
  
    <div class="text-left  border-top pt-3 mt-3">
        <h6>Photo(s)</h6>
    
    @foreach(json_decode($file->image) as $gambar)
    
        <img src="{{asset('storage/dog-image/'. $gambar)}}" class="rounded" alt="..." style="max-height: 200px;">
    
    @endforeach
   
    </div>
    
            <!-- <div class="col "> -->
           
            <!-- @foreach(json_decode($file->image) as $gambar)
            <div class="col-4 ">
                    <img src="{{asset('storage/dog-image/'. $gambar)}}" alt="" class="img-thumbnail rounded ">
            </div>
                @endforeach -->
            <!-- </div> -->

 <!--  -->
</div>
</div>
</div>
</div>
@endsection

@section('col-2')
<img src="{{asset('storage/logo/Group 28.svg')}}" alt="" class="img-fluid justify-content-center" style="max-height:70vh;">
<br>
@if(Auth::user()->role=='2')
    <h5 class="mt-4">We will chat you soon!</h5>
    @if($contact_dog->count()>0)
    <h5 class="mt-4 btn btn-background">You already request this dog</h5>
    @else
    <form action="/straydog/request" method="Post" class="d-flex" >
            @csrf
            <input class="form-control me-2" type="text" name="whatsapp" placeholder="enter phone number  ..">
            <input class="form-control me-2" type="text" name="instagram" placeholder="enter instagram ..">
            <input class="form-control me-2" type="text" style="display:none;" value="{{$file->id}}" name="straydog_id" placeholder="enter instagram .." >
            <button type="submit" class="btn btn-background">
                                    {{ __('Submit') }}
            </button>
    </form>
@endif
@endif


<!-- <div class="row justify-content-center btn btn-background mt-3">
  <div class="col " style="color:white;">
    <img src="{{asset('storage/logo/logos_whatsapp-icon.svg')}}" alt="" class="img-fluid" style="height:30px;">
    089-999-999-999
</div> -->

</div>

@if(Auth::user()->role=='1')
<div class="container mb-5 " style="max-width:90%;">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Whatsapp</th>
      <th scope="col">instagram</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($RequesterData as $Requester)
    <tr>
        <td>
            {{$Requester->name}}
        </td>
        <td>
            {{$Requester->email}}
        </td>
        <td>
            {{$Requester->Add_contact->whatsapp}}
        </td>    
        <td>
            {{$Requester->Add_contact->instagram}}
        </td>  
        <td>
            <a href="" class=" btn btn-background">Approve</a>
            <a href="" class=" btn btn-background">Decline</a>
        </td>  
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endif



@endsection