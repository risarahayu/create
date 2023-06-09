@extends('layouts.app')

@section('content')

<style>
    input[type="file"] {
  display: block;
}
.imageThumb {
  max-height: 75px;
  border: 2px solid;
  padding: 1px;
  cursor: pointer;
}
.pip {
  display: inline-block;
  margin: 10px 10px 0 0;
}
.remove {
  display: block;
  background: #444;
  border: 1px solid black;
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
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dog Form') }}</div>

                <div class="card-body">
                    <form method="POST" action="store"  enctype="multipart/form-data" >
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
                            <select class="form-control" id="gender" name="gender">
                            @foreach ($gender as $genders)
                                <option value="{{ $genders->id }}">{{ $genders->gender_name }}</option>
                            @endforeach
                            </select>
                               
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
                        <div class="form-group row ">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Default file input example</label>
                            <!-- <input class="form-control" name="image" type="file"   multiple="multiple" id="fileupload"> -->
                            <!-- <input class="form-control" name="image[]" type="file" multiple="multiple" id="fileupload">
                            @error('image')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                            <div id="dvPreview">
                            </div> -->

                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div class="field" align="left">
  <h3>Upload your images</h3>
  <input type="file" id="files" name="image[]" multiple />
</div>
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
            "<br/><span class=\"remove\">Remove image</span>" +
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