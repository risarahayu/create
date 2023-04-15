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
<div class="row">
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
<img src="{{asset('storage/logo/Group 18.svg')}}" alt="" class="img-fluid" style="max-height:70vh;">
<br>


<div class="row justify-content-center btn btn-background mt-3">
  <div class="col " style="color:white;">
    <img src="{{asset('storage/logo/mdi_email-send.svg')}}" alt="" class="img-fluid" style="height:30px;">
    Send Alert
</div>

</div>

@endsection