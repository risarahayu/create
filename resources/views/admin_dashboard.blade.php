@extends('layouts.app_new')


@section('row')
<div class="row">
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
</div>


<div class="row justify-content-xl-left justify-content-md-cebter">
      <!-- <div class="col-12"> -->
  
    <h3 class="text-center">Dog you Post</h3>
      @foreach($file_post as $files)
        @foreach(json_decode($files->image) as $gambar)
        <div class="card m-3" style="max-width: 360px;">
          <div class="row g-0 align-items-center">
            <div class="col-md-4">
                <img src="{{asset('storage/dog-image/'. $gambar)}}" class="img-fluid rounded-start ml-4" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
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

      <div class="row justify-content-center">
          <div class="col-4">
          {{ $file_post->links() }}
          </div>
      </div>
     
     
  <!-- </div> -->
  <div class="col-12"></div>
</div>
@endsection