@extends('Admin/include/Commen')
@section('content')
<div class="col-sm-3"></div>
<div class="col-sm-8" style="margin-top:50px;">
    <div class="bg-secondary rounded h-100 p-4">
        @if($meassage=Session::get('success'))
        <div class="alert alert-success alert-block">{{$meassage}}</div>
        @endif
        <h6 class="mb-4">CMS Form</h6>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titel</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($result as $key=>$datas)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$datas->titel}}</td>
                    <td>{{$datas->description}}</td>
                    <td>
                        @if($datas->Status=='1')
                        <a href="/status/{{$datas->id}}/data" class="btn btn- bi bi-toggle2-on"></a>|
                        @else
                        <a href="/status/{{$datas->id}}/data" class="btn btn- bi bi-toggle2-off"></a>
                        @endif
                    </td>
                    <td>
                        <a href="/updated/{{$datas->id}}/data" class="bi bi-pen btn btn-dark"></a>|
                        <a href="/deleted/{{$datas->id}}/data" class="bi bi-trash btn btn-danger"></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection