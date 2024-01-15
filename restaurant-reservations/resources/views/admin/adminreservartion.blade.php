@extends('layouts.adminTemplate')

@section('users')
<div class="container">
    <p class="container h1 text-info">Data Reservasi</p>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Category</th>
            <th>Phone</th>
            <th>Chef</th>
            <th>Guest</th>
            <th>Date</th>
            <th>Time</th>
            <th>Message</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>
            @foreach ($data as $data)
        <tr>
            <th>{{$data->name}}</th>
            <th>{{$data->email}}</th>
            <th>{{$data->category_id}}</th>
            <th>{{$data->phone}}</th>
            <th>{{$data->chef_id}}</th>
            <th>{{$data->guest}}</th>
            <th>{{$data->date}}</th>
            <th>{{$data->time}}</th>
            <th>{{$data->message}}</th>
            <th>
            <a href="{{url('/deleteuser',$data->id)}}">
            <button type="button" class="btn btn-danger bg-danger">Delete</button></a>
            </th>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
