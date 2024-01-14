@extends('layouts.adminTemplate')

@section('users')
<div class="container">
    <p class="container h1 text-success">Data Users</p>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>action</th>
        </tr>
        </thead>

        <tbody>
            @foreach ($data as $data)
        <tr>
            <th>{{$data->name}}</th>
            <th>{{$data->email}}</th>
            @if ($data->usertype=="0")
            <th>
            <a href="{{url('/deleteuser',$data->id)}}">
            <button type="button" class="btn btn-danger bg-danger">Delete</button></a>
            </th>
            @else
            <th><button type="button" class="btn btn-danger bg-danger">Not Allowed</button></th>
            @endif
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
