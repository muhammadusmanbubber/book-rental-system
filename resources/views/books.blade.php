<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Books Page</title>
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
(session('id'))
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
            <li><a class="nav-link scrollto" href="admin_home">Home</a></li>
            <li><a class="nav-link scrollto" href="add_book">Add Books</a></li>
            <li><a class="nav-link scrollto active" href="books">All Books</a></li>
            <li><a class="nav-link scrollto" href="#">Rented Books</a></li>
            <li><a class="nav-link scrollto" href="#">Recycle Bin</a></li>
            <li><a class="nav-link scrollto" href="logout1">Logout</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
      </div>
    </header><!-- End Header -->

    <div class="container" style="margin-top: 30px;"> 
        <div class="row">
          <div class="col-lg-12 rounded bg-light rounded">
             <div class="text-right">
               <a href="add_user">
                <button class="btn btn-success">Add User</button>
               </a>
               <a href="{{url('trash_data')}}">
                 <button class="btn btn-danger">Recycle Bin</button>
               </a>
             </div>
             {{-- <div class="text-right" style="margin-top: 10px">
            </div> --}}
               <h4 style="text-align: center; margin-top:10px; font-weight: 800; color: blue; font-family: Georgia, 'Times New Roman', Times, serif;">
                   Admin User Profile</h4>
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
            <th>Update</th>
            <th>Delete</th>

          </tr>
        </thead>
        <tbody>
        @foreach($shows as $show)
          <tr>
            <td>{{$show->id}}</td>
            <td>{{$show->name}}</td>
            <td>{{$show->email}}</td>
            <td>{{$show->password}}</td>
            <td> <img src="{{('upload/' . $show->image) }}" class="rounded" width="50px" /> </td>
            <td><a href="{{url('updateProfile/'.$show->id)}}" class="btn btn-warning">Update</a></td>
            <td><a href="{{url('delete/'.$show->id)}}" class="btn btn-danger">Trash</a></td>
          </tr>
          @endforeach
        </tbody>
        </table>
    </div>

    </body>
    </html>