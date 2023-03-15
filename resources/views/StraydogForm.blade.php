@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dog Form') }}</div>

                <div class="card-body">
                    <form method="POST" action="store">
                        @csrf

                        <div class="form-group row">
                            <label for="dog type" class="col-md-4 col-form-label text-md-right">{{ __('Dog type') }}</label>

                            <div class="col-md-6">
                                <input id="animalType" type="text" class="form-control @error('animalType') is-invalid @enderror" name="animalType" value="{{ old('animalType') }}" required autocomplete="animalType" autofocus>

                                @error('animalType')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="color" class="col-md-4 col-form-label text-md-right">{{ __('color') }}</label>

                            <div class="col-md-6">
                                <input id="color" type="color" class="form-control @error('color') is-invalid @enderror" name="color" value="{{ old('color') }}" required autocomplete="color">

                                @error('color')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="temprament" class="col-md-4 col-form-label text-md-right">{{ __('temprament') }}</label>

                            <div class="col-md-6">
                                <input id="temprament" type="text" class="form-control @error('temprament') is-invalid @enderror" name="temprament" required autocomplete="new-temprament">

                                @error('temprament')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('gender') }}</label>

                            <div class="col-md-6">
                                <input id="gender" type="text" class="form-control" name="gender" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="size" class="col-md-4 col-form-label text-md-right">{{ __('size') }}</label>

                            <div class="col-md-6">
                                <input id="size" type="text" class="form-control" name="size" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('description') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('submit') }}
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