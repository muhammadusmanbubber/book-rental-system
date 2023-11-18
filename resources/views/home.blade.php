<?php
session()->get('id');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="styleshee">
    <link href="assets/vendor/glightbox/css/</a>glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">
            <div class="logo me-auto">
                <a href="home"><img src="/images/logo.png" alt="logo"></a>
            </div>
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="home">Home</a></li>
                    <li><a class="nav-link scrollto" href="profile">Profile</a></li>
                    <li><a class="nav-link scrollto" href="rented">Rented Books</a></li>
                    <li><a class="nav-link scrollto" href="logout">Logout</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <div class="section-title" style="margin-top: 100px;">
        <h2
            style="text-align: center; margin-top:10px; font-weight: 500; color: blue; font-family: Georgia, 'Times New Roman', Times, serif;">
            Books For Rent</h2>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($show_books as $shows)
                <div class="col-md-4">
                    <a href="{{ url('book_details', $shows->id) }}">
                        <div class="book-item pb-4">
                            <img src="{{ 'books/' . $shows->image }}" alt="image"
                                style="height: 350px;width: 300px;">
                            <div class="down-content">
                                <h5 class="m-3 text-info">{{ $shows->book_name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

        {{-- Paginater Function --}}
        <div class="d-flex">
            {{ $show_books->links() }}
        </div>
    </div>
    <hr>
    {{-- --footer section-- --}}
    <footer class="bg-light">
        <div class="container py-4">
            <div class="text-center">
                <div class="copyright">
                    &copy; Copyright <strong><span>Book Rental System</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    Designed by <a href="#">Muhammad Usman Bubber</a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
