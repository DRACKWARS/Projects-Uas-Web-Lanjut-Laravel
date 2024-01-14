@extends('layouts.adminTemplate')

@section('users')
<div class="container">
    <p class="container h1 text-primary">Insert Chef</p>
    <div>
        <form action="{{url('/uploadchef')}}" method="Post" enctype="multipart/form-data">
            @csrf
            <div class="form-group container">
                <label>Name</label>
                <input type="text" class="form-control" name="name" placeholder="Nama Chef" required>
            </div>
            <div class="form-group container">
                <label>Spesiality</label>
                <input type="text" class="form-control" name="spesiality" placeholder="spesiality" required>
            </div>
            <div class="form-group container">
                <label>Image</label>
                <input type="file" class="form-control" name="image" required>
            </div>
            <div class="container mt-3">
                <button type="submit" value="Save" class="btn btn-success bg-success">Save</button></a>
            </div>
        </form>
    </div>

    <div class="container mt-5">
        <p class="container h1 text-success">Data Menu</p>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Nama Chef</th>
                <th>Spesiality</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            </thead>

            <tbody>

                @foreach ($data as $data)

            <tr>
                <th>{{$data->name}}</th>
                <th>{{$data->spesiality}}</th>
                <th><img height="100" width="100" src="/images/{{$data->image}}"></th>
                <th><a href="{{url('/deletechef',$data->id)}}">
                <button type="button" class="btn btn-danger bg-danger">Delete</button></a>
                <a href="{{url('/updatechef',$data->id)}}">
                <button type="button" class="btn btn-primary bg-primary">Update</button></a>
                </th>
            </tr>

            @endforeach

            </tbody>
        </table>
        </div>
</div>
@endsection
