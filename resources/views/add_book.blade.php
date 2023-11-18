<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Book Page</title>
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
    session('id');
    ?>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <div class="logo me-auto">
                <a href="profile"><img src="/images/logo.png" alt="logo"></a>
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto" href="admin_home">All Users</a></li>
                    <li><a class="nav-link scrollto active" href="add_book">Add Books</a></li>
                    <li><a class="nav-link scrollto" href="all_books">All Books</a></li>
                    <li><a class="nav-link scrollto" href="rented_books">Rented Books</a></li>
                    <li><a class="nav-link scrollto" href="logout1">Logout</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title" style="margin-top: 50px;">
                        <h2
                            style="text-align: center; margin-top:10px; font-weight: 500; color: blue; font-family: Georgia, 'Times New Roman', Times, serif;">
                            Add New Book</h2>
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
                <form action="{{ url('add_book_data') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="book_name">Book Name</label>
                        <input type="text" class="form-control" name="book_name" value="{{ old('book_name') }}">
                        @if ($errors->has('book_name'))
                            <span class="text-danger">{{ $errors->first('book_name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="Auther_name">Auther Name</label>
                        <input type="text" class="form-control" name="auther_name" value="{{ old('auther_name') }}">
                        @if ($errors->has('auther_name'))
                            <span class="text-danger">{{ $errors->first('auther_name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="Pages">Pages:</label>
                        <input type="text" class="form-control" name="pages" value="{{ old('pages') }}">
                        @if ($errors->has('pages'))
                            <span class="text-danger">{{ $errors->first('pages') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="image">Image:</label>
                        <input type="file" class="form-control" name="image" value="{{ old('image') }}">
                        @if ($errors->has('image'))
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-info m-3">Submit</button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>
