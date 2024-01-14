    @extends('layouts.template3')

    @section('menu')
    <div class="section-title">
        <h2>Reservation</h2>
        <p>Book a Table</p>
    </div>

    <form action="{{url('/reservation')}}" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">

        @csrf

        <div class="row">
        <div class="col-lg-4 col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
            <div class="validate"></div>
        </div>
        <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required>
            <div class="validate"></div>
        </div>
        <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
            <div class="validate"></div>
        </div>
        <div class="col-lg-4 col-md-6 form-group mt-3">
            <input type="date" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
            <div class="validate"></div>
        </div>
        <div class="col-lg-4 col-md-6 form-group mt-3">
            <input type="time" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
            <div class="validate"></div>
        </div>
        <div class="col-lg-4 col-md-6 form-group mt-3">
            <input type="number" class="form-control" name="guest" id="guest" placeholder="# of guest" data-rule="minlen:1" data-msg="Please enter at least 1 chars" required>
            <div class="validate"></div>
        </div>
        <div class="col-lg-4 col-md-6 form-group mt-3">
            <select name="category_id" id="categori_id" class="form-select" required>
                <option value="">Pilih kategori</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select><div class="validate"></div>
        </div>
        </div>
        <div class="form-group mt-3">
        <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
        <div class="text-center mt-3"><button type="submit">Book a Table</button></div>
    </form>
    @endsection
