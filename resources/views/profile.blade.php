<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile Page</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
  
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
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

    <?php
    session()->get('id');
     ?>
   
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
      <div class="container d-flex align-items-center">
  
        <div class="logo me-auto">
      <a href="profile"><img src="/images/logo.png" alt="logo"></a>
        </div>
  
        <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
            <li><a class="nav-link scrollto" href="home">Home</a></li>
            <li><a class="nav-link scrollto active" href="profile">Profile</a></li>
            <li><a class="nav-link scrollto" href="#">Rented Books</a></li>
            <li><a class="nav-link scrollto" href="logout">Logout</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
      </div>
    </header><!-- End Header -->

    <div class="container"> 
        <div class="row">
          <div class="section-title" style="margin-top: 90px;">
            <h2 style="text-align: center; margin-top:10px; font-weight: 500; color: blue; font-family: Georgia, 'Times New Roman', Times, serif;">
            User Profile</h2>
        </div>
       </div>
    </div>

    <div class="container">
      <table class="table table-hover table-bordered">
        <thead>
          <tr>
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
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Image</th>
            <th>Update</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>{{$show->id}}</td>
            <td>{{$show->name}}</td>
            <td>{{$show->email}}</td>
            <td>{{$show->password}}</td>
            <td> <img src="{{('upload/' . $show->image) }}" width="50px"/> </td>
            <td><a href="{{url('edit/'.$show->id)}}" class="btn btn-warning">Update</a></td>
          </tr>
        </tbody>
        </table>
    </div>

    </body>
    </html>