@extends('layouts.template')

@section('home')
<div class="row">
    <div class="col-lg-8">
      <h1>Welcome to <span>Restaurantly</span></h1>
      <h2>Delivering great food for more than 18 years!</h2>

      <div class="btns">
        <a href="/food" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
        <a href="/reservation" class="btn-book animated fadeInUp scrollto">Book a Table</a>
      </div>
    </div>
  </div>
@endsection
