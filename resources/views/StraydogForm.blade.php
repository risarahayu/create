@extends('layouts.app')

@section('col-1')

<style>
    input[type="file"] {
  display: block;
}
.imageThumb {
  max-height: 75px;
  border: 2px solid #A11A79;
  border-radius: 4px;
  padding: 1px;
  cursor: pointer;
}
.pip {
  display: inline-block;
  margin: 10px 10px 0 0;
}
.remove {
  display: block;
  color: white;
  text-align: center;
  cursor: pointer;
}
.remove:hover {
  background: white;
  color: black;
}
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card my-4">
                <div class="card-header">{{ __('Dog Form') }}</div>

                <div class="card-body">
                    <form method="POST" action="store"  enctype="multipart/form-data" >
                        @csrf

                        <div class="form-group row">
                            <label for="dog type" class="col-md-4 col-form-label">{{ __('Dog type') }}</label>

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
                            <label for="color" class="col-md-4 col-form-label ">{{ __('Color') }}</label>

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
                            <label for="temprament" class="col-md-4 col-form-label ">{{ __('Temprament') }}</label>

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
                            <label for="gender" class="col-md-4 col-form-label ">{{ __('Gender') }}</label>

                            <div class="col-md-6">
                            <select class="form-control" id="gender" name="gender">
                            @foreach ($gender as $genders)
                                <option value="{{ $genders->id }}">{{ $genders->gender_name }}</option>
                            @endforeach
                            </select>
                               
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="size" class="col-md-4 col-form-label ">{{ __('Size') }}</label>

                            <div class="col-md-6">
                                <input id="size" type="text" class="form-control" name="size" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label ">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row ">
                        <div class="mb-3">
                            
                            <!-- <input class="form-control" name="image" type="file"   multiple="multiple" id="fileupload"> -->
                            <!-- <input class="form-control" name="image[]" type="file" multiple="multiple" id="fileupload">
                            @error('image')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                            <div id="dvPreview">
                            </div> -->

                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                        <div class="field" align="left">
                          <!-- <h5>Upload your images</h5> -->
                          <label for="files">
                              <a class="btn  btn-sm" rel="nofollow"><img src="{{asset('storage/logo/ic_outline-file-upload.svg')}}" alt="" class="img-fluid px-3" alt=""><b>Upload Image</b></a>
                          </label>
                          <br>
                          
                          <input type="file" id="files" style="display:none;" name="image[]" multiple />
                          
                        </div>
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
<script language="javascript" type="text/javascript">
// window.onload = function () {
//     var fileUpload = document.getElementById("fileupload");
//     fileUpload.onchange = function () {
//         if (typeof (FileReader) != "undefined") {
//             var dvPreview = document.getElementById("dvPreview");
//             dvPreview.innerHTML = "";
//             var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
//             for (var i = 0; i < fileUpload.files.length; i++) {
//                 var file = fileUpload.files[i];
//                 if (regex.test(file.name.toLowerCase())) {
//                     var reader = new FileReader();
//                     reader.onload = function (e) {
//                         var img = document.createElement("IMG");
//                         img.height = "100";
//                         img.width = "100";
//                         img.src = e.target.result;
//                         dvPreview.appendChild(img);
//                     }
//                     reader.readAsDataURL(file);
//                 } else {
//                     alert(file.name + " is not a valid image file.");
//                     dvPreview.innerHTML = "";
//                     return false;
//                 }
//             }
//         } else {
//             alert("This browser does not support HTML5 FileReader.");
//         }
//     }
// };

// yang kedua
$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#files").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < filesLength; i++) {
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<span class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove\"><img src='{{asset('storage/logo/delete-circle.svg')}}'></span>" +
            "</span>").insertAfter("#files");
          $(".remove").click(function(){
            $(this).parent(".pip").remove();
          });
          
          // Old code here
          /*$("<img></img>", {
            class: "imageThumb",
            src: e.target.result,
            title: file.name + " | Click to remove"
          }).insertAfter("#files").click(function(){$(this).remove();});*/
          
        });
        fileReader.readAsDataURL(f);
      }
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});
</script>


@endsection

@section('col-2')
<img src="{{asset('storage/logo/image_dog.svg')}}" alt="" class="img-fluid">
@endsection