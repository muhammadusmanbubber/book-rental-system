<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile Page</title>
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
<style>
    table,
    tr,
    td {
        padding: 5px;
        text-align: center;
    }
</style>

<body>
    <?php
    session('email');
    ?>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <div class="logo me-auto">
                <a href="profile"><img src="/images/logo.png" alt="logo"></a>
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li style="margin-top: 13px">
                        <form action="search" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="search" name="search" placeholder="Search here">
                            <input type="submit" name="submit" value="Search">
                        </form>
                    <li><a class="nav-link scrollto active" href="home">Home</a></li>
                    <li><a class="nav-link scrollto" href="profile">Profile</a></li>
                    <li><a class="nav-link scrollto" href="rented">Rented Books</a></li>
                    <li><a class="nav-link scrollto" href="logout">Logout</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="section-title" style="margin-top: 30px;">
                <h2
                    style="text-align: center; margin-top:10px; font-weight: 500; color: blue; font-family: Georgia, 'Times New Roman', Times, serif;">
                    Rented Books</h2>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Book Name</th>
                    <th>Auther Name</th>
                    <th>Rented Date</th>
                    <th>Return Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $shows)
                    <tr>
                        <td>{{ $shows->id }}</td>
                        <td>{{ $shows->user->name }}</td>
                        <td>{{ $shows->user->email }}</td>
                        <td>{{ $shows->book->book_name }}</td>
                        <td>{{ $shows->book->auther_name }}</td>
                        <td>{{ \Carbon\Carbon::parse($shows->rental_date)->format('d F Y, g:i A')}}</td>
                        <td>{{ \Carbon\Carbon::parse($shows->return_date)->format('d F Y, g:i A')}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
