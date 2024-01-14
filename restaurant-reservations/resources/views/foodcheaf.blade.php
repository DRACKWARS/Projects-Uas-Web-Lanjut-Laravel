    @extends('layouts.template3')

    @section('menu')
    <section id="chefs" class="chefs">
        <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Chefs</h2>
            <p>Our Proffesional Chefs</p>
        </div>

        <div class="row">

        @foreach ($data as $data)

        <div class="col">

            <div class="">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
                <img width="100%" height="300" src="/images/{{$data->image}}" class="img-top" alt="">
                <div class="member-info">
                <div class="member-info-content">
                    <h4>{{$data->name}}</h4>
                    <span>{{$data->spesiality}}</span>
                </div>
                </div>
            </div>
            </div>
        </div>

        @endforeach

        </div>

        </div>
    </section>
    @endsection
