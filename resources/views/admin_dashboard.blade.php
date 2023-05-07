@extends('layouts.app_new')


@section('row')

<div class="d-flex flex-row mb-3 justify-content-center">
  <div class="p-5">
  <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{asset('storage/logo/frame 35.svg')}}" class="img-fluid rounded-start py-3 pl-3" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Dog Post</h5>
        <p class="card-text h1">{{$count_post}}</p>
        <p class="card-text"><small class="text-muted">This is the dog you already post</small></p>
      </div>
    </div>
  </div>
</div>
  </div>
  <div class="p-5">
  <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{asset('storage/logo/frame 36.svg')}}" class="img-fluid rounded-  py-3 pl-3" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Dog Request</h5>
        <p class="card-text h1">{{$count}}</p>
        <p class="card-text"><small class="text-muted">This is the dog you request</small></p>
      </div>
    </div>
  </div>
</div>
  </div>
</div>

<div class="container mb-5 " style="max-width:90%;">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Foto</th>
      <th scope="col">Animal Type</th>
      <th scope="col">Color(s)</th>
      <th scope="col">Size</th>
      <th scope="col">Requester</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($requester as $files)
      @if($files["image"]!='')
      <tr>
        <td>
          @foreach(json_decode($files["image"]) as $gambar)
            <img src="{{asset('storage/dog-image/'. $gambar)}}" class="img-fluid rounded-start ml-4" style="height:70px;" alt="...">
          @endforeach
        </td>
        <td>
          {{($files["animalType"])}}
        </td>
        <td>
          {{($files["gender"])}}
        </td>
        <td>
          {{$files["size"]}}
        </td>
        <td>
          {{$files["count_user"]}}
        </td>
        <td>
          <a href="{{route('detail',$files->id)}}" class=" btn btn-background">See Details</a>
        </td>
      </tr>
      @Endif
      @endforeach
  </tbody>
</table>
@endsection