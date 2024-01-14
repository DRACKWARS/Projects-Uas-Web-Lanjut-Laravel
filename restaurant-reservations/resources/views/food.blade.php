    @extends('layouts.template2')

    @section('menu')
        <div class="row row-cols-2 row-cols-md-2 g-4">

    @foreach ($data as $data)

    <div class="col">
        <div class="card" style="width: 100%">
        <img src="/images/{{$data->image}}" class="card-img-top" alt="..." width="70%" height="400px">
        <div class="card-body">
            <div class="price"><h6>{{$data->price}}</h6></div>
            <h5 class="card-title">{{$data->title}}</h5>
            <p class="card-text">{{$data->description}}</p>
        </div>
        </div>
    </div>

    @endforeach

    </div>
    @endsection
