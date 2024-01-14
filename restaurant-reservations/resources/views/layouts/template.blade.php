<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tiMovie - @yield('title', 'Website')</title>
    <link href="/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="/bootstrap/style.css" rel="stylesheet">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="mt-top d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-center">

      <h1 class="logo me-auto me-lg-0"><a href="#">Restaurantly</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="/food">Menu</a></li>
          <li><a class="nav-link scrollto" href="/reservation">Reservasi</a></li>
          <li><a class="nav-link scrollto" href="/foodcheaf">Chef</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
        @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                    <x-app-layout>

                    </x-app-layout>
                    @else
                        <a class="book-a-table-btn scrollto d-none d-lg-flex" href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a class="book-a-table-btn scrollto d-none d-lg-flex mt-2" href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
        @yield('home')
    </div>
  </section><!-- End Hero -->
  <div>
    @yield("menu")
</div>
<script src="/bootstrap/bootstrap.bundle.min.js"></script>

</body>

</html>
