@extends('layouts.app_new')

@section('row')
<div class="row mb-4">
    <div class="col-3">
        <h2>Stray Dog List</h2>
    </div>
    <div class="col-6 align-self-center">
        <form action="/straydog/search" method="GET" class="d-flex" role="search" >
            <input class="form-control me-2" type="text" name="search" placeholder="Search something .." value="{{ old('search') }}">
            <input  class="btn btn-outline-success"  type="submit" value="search">
        </form>
    </div>
</div>



@foreach($file as $files)

@foreach(json_decode($files->image) as $gambar)

<div class="card m-3" style="max-width: 360px;">  


  <div class="row g-0 align-items-center">
    <div class="col-md-4">
      <img src="{{asset('storage/dog-image/'. $gambar)}}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <!--  -->
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-3">
                        <img src="{{asset('storage/logo/cil_animal (1).svg')}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-9 text-left">
                        Size
                        <br>
                        {{($files->size)}}
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <!--  -->
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-3">
                            <img src="{{asset('storage/logo/bi_gender-ambiguous.svg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="col-9 text-left">
                            Gender
                            <br>
                            {{($files->gender)}}
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="row">
                <div class="col">
                <a href="{{route('detail',$files->id)}}" class=" btn btn-background">See Details</a>
                </div>
            </div>
      </div>
    </div>
  </div>

</div>








@endforeach
@endforeach

@endsection

