@extends('layouts.adminTemplate')

@section('users')
<div class="container">
    <p class="container h1 text-primary">Update Menu</p>
    <div>
        <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group container">
                <label>Name</label>
                <input type="text" class="form-control" name="title" value="{{$data->title}}" required>
            </div>
            <div class="form-group container">
                <label>Deskripsi</label>
                <input type="text" class="form-control" name="description" value="{{$data->description}}" required>
            </div>
            <div class="form-group container">
                <label>Image Lama</label>
                <img height="200" width="200" src="/images/{{$data->image}}" alt="">
            </div>
            <div class="form-group container">
                <label>Image Baru</label>
                <input type="file" class="form-control" name="image" required>
            </div>
            <div class="form-group container">
                <label>Harga</label>
                <input type="num" class="form-control" name="price" value="{{$data->price}}" required>
            </div>
            <div class="container mt-3">
                <button type="submit" value="Save" class="btn btn-success bg-success">Save</button></a>
            </div>
        </form>
    </div>
</div>
@endsection
