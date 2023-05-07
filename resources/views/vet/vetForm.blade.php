@extends('layouts.app')

@section('col-1')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card my-4">
                <div class="card-header">{{ __('Dog Vet Form') }}</div>

                <div class="card-body">
                    <form method="POST" action="storeVet"  enctype="multipart/form-data" >
                        @csrf

                        <div class="form-group row">
                            <label for="vetName" class="col-md-4 col-form-label">{{ __('Dog Vet Name') }}</label>

                            <div class="col-md-6">
                                <input id="vetName" type="text" class="form-control @error('vetName') is-invalid @enderror" name="vetName" value="{{ old('vetName') }}" required autocomplete="vetName" autofocus>

                                @error('vetName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telephone" class="col-md-4 col-form-label ">{{ __('telephone') }}</label>

                            <div class="col-md-6">
                                <input id="telephone" type="telephone" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone">

                                @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="whatsApp" class="col-md-4 col-form-label ">{{ __('whatsApp') }}</label>

                            <div class="col-md-6">
                                <input id="whatsApp" type="text" class="form-control @error('whatsApp') is-invalid @enderror" name="whatsApp" required autocomplete="new-whatsApp">

                                @error('whatsApp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dayStart" class="col-md-4 col-form-label ">{{ __('dayStart') }}</label>

                            <div class="col-md-6">
                            <select class="form-control" id="dayStart" name="dayStart">
                            <option value="Sunday">Sunday</option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                            </select>
                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dayClose" class="col-md-4 col-form-label  ">{{ __('dayClose') }}</label>

                            <div class="col-md-6 ">
                            <select class="form-control " id="dayClose" name="dayClose">
                            <option value="Sunday">Sunday</option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                            </select>
                               
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="hourOpen" class="col-md-4 col-form-label ">{{ __('hourOpen') }}</label>

                            <div class="col-md-6">
                                <input id="hourOpen" type="time" class="form-control vet-hour" name="hourOpen" required autocomplete="hourOpen">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="hourClose" class="col-md-4 col-form-label ">{{ __('hourClose') }}</label>

                            <div class="col-md-6">
                                <input id="hourClose" type="time" class="form-control vet-hour" name="hourClose" required autocomplete="hourClose">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fullDay" class="col-md-4 col-form-label ">{{ __('fullDay') }}</label>

                            <div class="col-md-6 ">
                                <input id="fullDay" type="checkbox" class="form-check-input" name="fullDay"  autocomplete="fullDay" style="">24 Hours
                            </div>
                            <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
                            <script>
                                var hourOpen, hourClose;
                                $('.vet-hour').change(function() {
                                    if ($(this).is('#hourOpen')) {hourOpen = $(this).val()};
                                    if ($(this).is('#hourClose')) {hourClose = $(this).val()};
                                });
                                $('#fullDay').change(function() {
                                    if(this.checked) {
                                        $('.vet-hour').prop('disabled',true).val("");
                                    } else {
                                        $('.vet-hour').prop('disabled',false);
                                        $('#hourOpen').val(hourOpen);
                                        $('#hourClose').val(hourClose);
                                    }
                                });
                            </script>
                        </div>
                        <div class="form-group row">
                            <label for="area" class="col-md-4 col-form-label ">{{ __('Area') }}</label>
                            <div class="col-md-6">
                                <input id="area" type="text" class="form-control" name="area" required autocomplete="area">
                            </div>
                        </div>
                       
                        <div class="form-group row mb-0">
                            <div class="col d-grid gap-2">
                                <button type="submit" class="btn btn-background">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
@section('col-2')
    <img src="{{asset('storage/logo/Group finish Rescue.svg')}}" alt="" class="img-fluid justify-content-center" style="max-height:70vh;">
@endsection