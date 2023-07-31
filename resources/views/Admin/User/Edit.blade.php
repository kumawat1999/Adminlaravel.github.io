@extends('Admin/include/Commen')
@section('content')
<div class="col-sm-3"></div>
<div class="col-sm-8"  style="margin-top:50px;">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Edit Form</h6>
      
        <form method="post" >
            @csrf
            @method('PUT')

            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Name" value="{{ $Edit_data->Name }}" id="inputEmail3" >
                    @error('Name')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Email" value="{{ $Edit_data->Email }}" id="inputEmail3" >
                    @error('Email')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
            </div>

            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Gender" id="gridRadios1" value="{{ $Edit_data->Gender }}" >

                        <label class="form-check-label" for="gridRadios1">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Gender" id="gridRadios2" value="{{ $Edit_data->Gender }}">
                        <label class="form-check-label" for="gridRadios2">
                            Female
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Gender" id="gridRadios2" value="{{ $Edit_data->Gender }}">
                        <label class="form-check-label" for="gridRadios2">
                            Other
                        </label>
                    </div>
                    @error('Gender')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" value="{{ $Edit_data->Password }}" name="Password" id="inputPassword3">
                        @error('Password')
                        <p style="color:red;">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="Address" value="{{ $Edit_data->Address }}" id="inputEmail3">
                        @error('Address')
                        <p style="color:red;">{{$message}}</p>
                        @enderror
                    </div>
                </div>


            </fieldset>
            <button type="submit" class="btn btn-primary col-sm-2">Send Data</button>
        </form>
    </div>
</div>

@endsection