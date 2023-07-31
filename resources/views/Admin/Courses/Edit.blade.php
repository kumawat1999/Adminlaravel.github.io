@extends('Admin/include/Commen')
@section('content')
<div class="col-sm-3"></div>
<div class="col-sm-8" style="margin-top:50px;">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">User Form</h6>
        <form method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Titel</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$editview->Titel}}" name="Titel" id="inputEmail3" >
                    @error('Titel')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Photo</label>
                <img src="{{url('BannerPics/'.$editview->Photo)}}" width="50" >
                <div class="col-sm-10">
                    <input type="hidden" class="form-control" name="exist_photo" value="{{$editview->Photo}}" >
                    <input type="file" class="form-control" name="Photo" value="{{$editview->Photo}}" >
                    @error('Photo')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary col-sm-2">Send Data</button>
        </form>
    </div>
</div>

@endsection