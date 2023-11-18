<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Login Page</title>
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

    {{-- == Signup Form Section ==} --}}
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="/images/logo.PNG" alt="logo" width="150">
            </div>
            <div class="col-sm-12">
                <h3
                    style="text-align: center; font-weight: 800; color: rgb(228, 9, 64); font-family: Georgia, 'Times New Roman', Times, serif;">
                    Book Rental Management System</h3>
                <div class="section-title" style="margin-top: 20px;">
                    <h2
                        style="text-align: center; margin-top:10px; font-weight: 500; color: blue; font-family: Georgia, 'Times New Roman', Times, serif;">
                        User Login</h2>
                </div>
            </div>
        </div>

        <div class="row" style="padding-left:30%; padding-right:30%;">
            {{-- == Message Alert Section ==} --}}
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    <p>{{ session()->get('success') }}</p>
                </div>
            @endif
            @if (session()->has('error'))
                <div class="alert alert-danger" role="alert">
                    <p>{{ session()->get('error') }}</p>
                </div>
            @endif
            <form action="{{ url('user_login_qry') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="email">Email Address:</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-info m-3">Login</button>
            </form><br>
            <span>Create a new Account: <a href="/" style="text-decoration:none">Signup Here</a></span>
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
