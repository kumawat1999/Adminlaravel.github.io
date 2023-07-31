@extends('Admin/include/Commen')
@section('content')
<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
      
        <div class="col-sm-3"></div>
        <div class="col-sm-8"  style="margin-top:50px;">
        @if($message=Session::get('success'))
        <p class="alert alert-success alert-block col-sm-8">{{$message}}</p>
        @endif
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">User Table
                <a href="{{route('User.Form')}}" type="button" class="btn btn-danger btn btn-sm bi bi-bookmarks rounded-circle"></a>
                </h6>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Password</th>
                            <th scope="col">Address</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($Listing_data as $key=>$data)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $data->Name }}</td>
                            <td>{{ $data->Email }}</td>
                            <td>{{ $data->Gender }}</td>
                            <td>{{ $data->Password }}</td>
                            <td>{{ $data->Address }}</td>
                            <td>
                                <a href="/User/Update/{{ $data->id }}" type="button" class="btn btn-success bi bi-pen rounded-circle"></a>
                            </td>
                            <td>
                                <a href="/User/Delete/{{ $data->id }}" type="button" class="btn btn-danger bi bi-trash rounded-circle"></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="col-sm-5">
                    {!! $Listing_data->links()  !!}
                </div>
            </div>
        </div>

        @endsection