
@extends('layouts.adminTemplate')

@section('users')
<div class="container">
    <p class="container h1 text-primary">Insert Event</p>
    <div>
        <form action="{{url('/uploadcategories')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group container">
                <label>Event</label>
                <input type="text" class="form-control" name="name" placeholder="Event" required>
            </div>
            <div class="form-group container">
                <label>Deskripsi</label>
                <input type="text" class="form-control" name="description" placeholder="Deskripsi">
            </div>
            <div class="container mt-3">
                <button type="submit" value="Save" class="btn btn-success bg-success">Save</button></a>
            </div>
        </form>
    </div>

    <div class="container mt-5">
    <p class="container h1 text-success">Data Event</p>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Macam-macam Event</th>
            <th>Deskripsi</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>

            @foreach ($data as $data)

        <tr>
            <th>{{$data->name}}</th>
            <th>{{$data->description}}</th>
            <th><a href="{{url('/deletecategories',$data->id)}}">
                <button type="button" class="btn btn-danger bg-danger">Delete</button></a>
            </th>
        </tr>

        @endforeach

        </tbody>
    </table>
</div>

</div>
@endsection
