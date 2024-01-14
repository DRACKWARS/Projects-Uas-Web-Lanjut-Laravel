@extends('layouts.adminTemplate')

@section('users')
<div class="container">
    <p class="container h1 text-primary">Insert Menu</p>
    <div>
        <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group container">
                <label>Name</label>
                <input type="text" class="form-control" name="title" placeholder="Nama Menu" required>
            </div>
            <div class="form-group container">
                <label>Deskripsi</label>
                <input type="text" class="form-control" name="description" placeholder="Deskripsi" required>
            </div>
            <div class="form-group container">
                <label>Image</label>
                <input type="file" class="form-control" name="image" required>
            </div>
            <div class="form-group container">
                <label>Harga</label>
                <input type="num" class="form-control" name="price" placeholder="Harga" required>
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
            <th>Nama Makanan</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>

            @foreach ($data as $data)

        <tr>
            <th>{{$data->title}}</th>
            <th>{{$data->price}}</th>
            <th>{{$data->description}}</th>
            <th><img height="200" width="200" src="/images/{{$data->image}}"></th>
            <th><a href="{{url('/deletemenu',$data->id)}}">
            <button type="button" class="btn btn-danger bg-danger">Delete</button></a>
            <a href="{{url('/updateview',$data->id)}}">
            <button type="button" class="btn btn-primary bg-primary mt-2">Update</button></a>
            </th>
        </tr>

        @endforeach

        </tbody>
    </table>
    </div>
</div>

</div>
@endsection
