<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Home Page</title>
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
                    </li>
                    <li><a class="nav-link scrollto active" href="admin_home">All Users</a></li>
                    <li><a class="nav-link scrollto" href="add_book">Add Books</a></li>
                    <li><a class="nav-link scrollto" href="all_books">All Books</a></li>
                    <li><a class="nav-link scrollto" href="rented_books">Rented Books</a></li>
                    <li><a class="nav-link scrollto" href="logout1">Logout</a></li>
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
                    Total Users</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Image</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($shows as $show)
                    <tr>
                        <td>{{ $show->id }}</td>
                        <td>{{ $show->name }}</td>
                        <td>{{ $show->email }}</td>
                        <td>{{ $show->password }}</td>
                        <td> <img src="{{ 'upload/' . $show->image }}" class="rounded" width="50px" /> </td>
                        <td><a href="{{ url('delete/' . $show->id) }}" class="btn btn-danger">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
