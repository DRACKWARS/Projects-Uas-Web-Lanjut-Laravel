
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="/asset/styles.css" rel="stylesheet" />
        <link href="/bootstrap/bootstrap.min.css" rel="stylesheet">
        <link href="/bootstrap/bootstrap-icons.css" rel="stylesheet">
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="/redirects">Admin Panel</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <x-app-layout>

                    </x-app-layout>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="{{url('/users')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-alt"></i></div>
                                User
                            </a>
                            <a class="nav-link" href="{{url('/categories')}}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-list"></i></div>
                                Category
                            </a>
                            <a class="nav-link collapsed" href="{{url('/foodmenu')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Menu
                                <div class="sb-sidenav-collapse-arrow"><i class=""></i></div>
                            </a>
                            <a class="nav-link collapsed" href="{{url('viewcheaf')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Chefs
                                <div class="sb-sidenav-collapse-arrow"><i class=""></i></div>
                            </a>
                            <a class="nav-link" href="{{url('/viewreservation')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Reservasi
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    @yield('users')
                </main>
            </div>
        </div>
        <script src="/bootstrap/bootstrap.bundle.min.js"></script>
        <script src="/asset/scripts.js"></script>
    </body>
</html>

