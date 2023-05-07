@extends('layouts.app')

@section('col-1')
<div class="container py-5">
<div class="card" >
<div class="card-header" >
    Dog Vet Information
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
                Vet Name
                <br>
                {{($dataVet->vetName)}}
            </div>
        </div>
    </div>
    <div class="col-md-6">
    <div class="row">
            <div class="col-2">
                <img src="{{asset('storage/logo/bi_gender-ambiguous.svg')}}" alt="" class="img-fluid">
            </div>
            <div class="col-10 text-left">
                Telephone
                <br>
                {{($dataVet->telephone)}}
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
                {{($dataVet->whatsApp)}}
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
                {{($dataVet->dayStart)}}
                <br>
                {{($dataVet->dayClose)}}
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
                {{($dataVet->hourOpen)}}
                <br>
                {{($dataVet->hourClose)}}
                <br>
                {{($dataVet->fullDay)}}
                <br>
                {{($dataVet->area)}}
            </div>
        </div>
    </div>
</div>
 <!--  -->
  <!--  -->
</div>
</div>
</div>
</div>
@endsection

@section('col-2')
<img src="{{asset('storage/logo/Group finish Rescue.svg')}}" alt="" class="img-fluid" style="max-height:70vh;">
</div>

@endsection