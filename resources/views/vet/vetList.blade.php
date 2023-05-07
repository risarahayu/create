@extends('layouts.app_new')

@section('row')


<div class="row mb-4">
    <div class="col-3">
        <h2>Vet List</h2>
    </div>
    <div class="col-6 align-self-center">
        <form action="/straydog/search/all" method="GET" class="d-flex" role="search" >
            <input class="form-control me-2" type="text" name="search" placeholder="Search something .." value="{{ old('search') }}">
            <input  class="btn btn-outline-success"  type="submit" value="search">
        </form>
    </div>
</div>



@foreach($dataVet as $dataVet)

<div class="card m-3" style="max-width: 360px;">
    <div class="row">
        <h5 class="card-title">{{$dataVet->vetName}}</h5>
    </div>
    <!-- ROW -->
    <div class="row">
        <div class="col">
        <!--  -->
            <div class="row">
                <div class="col-3">
                    <img src="{{asset('storage/logo/bi_telephone-fill.svg')}}" alt="" class="img-fluid">
                </div>
                <div class="col-9">
                    Telephone
                        <br>
                    {{$dataVet->telephone}}
                </div>
            </div>
        <!--  -->
        </div>
        <div class="col">
        <!--  -->
            <div class="row">
                <div class="col-3">
                    <img src="{{asset('storage/logo/ri_whatsapp-fill.svg')}}" alt="" class="img-fluid">
                </div>
                <div class="col-9">
                    Whatsapp
                        <br>
                    {{$dataVet->whatsApp}}
                </div>
            </div>
        <!--  -->
        </div>
    </div>
    <!-- Row -->
    <!-- ROW -->
    <div class="row">
        <div class="col">
        <!--  -->
            <div class="row">
                <div class="col-3">
                    <img src="{{asset('storage/logo/uis_calender.svg')}}" alt="" class="img-fluid">
                </div>
                <div class="col-9">
                    Day Open
                        <br>
                    {{$dataVet->dayStart}} - {{$dataVet->dayClose}}
                </div>
            </div>
        <!--  -->
        </div>
    </div>
    <!-- Row -->
    @if($dataVet->fullDay)
    <!-- ROW -->
    <div class="row" style="">
        <div class="col">
        <!--  -->
            <div class="row">
                <div class="col-2">
                    <img src="{{asset('storage/logo/ic_outline-access-time-filled.svg')}}" alt="" class="img-fluid">
                </div>
                <div class="col-10">
                    This is fullday
                </div>
            </div>
        <!--  -->
        </div>
        
    </div>
    <!-- Row -->
    @else
    <!-- ROW -->
    <div class="row" style="">
        <div class="col">
        <!--  -->
            <div class="row">
                <div class="col-3">
                    <img src="{{asset('storage/logo/ic_outline-access-time-filled.svg')}}" alt="" class="img-fluid">
                </div>
                <div class="col-9">
                    hourOpen
                        <br>
                    {{$dataVet->hourOpen}}
                </div>
            </div>
        <!--  -->
        </div>
        <div class="col">
        <!--  -->
            <div class="row">
                <div class="col-3">
                    
                </div>
                <div class="col-9">
                    hourClose
                        <br>
                    {{$dataVet->hourClose}}
                </div>
            </div>
        <!--  -->
        </div>
    </div>
    <!-- Row -->
    @endif
    <!-- ROW -->
    <div class="row" style="">
        <div class="col">
        <!--  -->
            <div class="row">
                <div class="col-3">
                    <img src="{{asset('storage/logo/majesticons_map-marker-area.svg')}}" alt="" class="img-fluid">
                </div>
                <div class="col-9">
                    area
                        <br>
                    {{$dataVet->area}}
                </div>
            </div>
        <!--  -->
        </div>
        <div class="col">
        <!--  -->
            <div class="row">
                <div class="col-3">
                    
                </div>
                <div class="col-9">
                        <a href="" class=" btn btn-background">See Details</a>
                </div>
            </div>
        <!--  -->
        </div>
    </div>
    <!-- Row -->
</div>


@endforeach

@endsection

