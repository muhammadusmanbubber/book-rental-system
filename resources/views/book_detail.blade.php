<?php
session()->get('id');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Detail Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <div class="col-lg-12 rounded bg-light rounded"><h3
                    style="text-align: center; margin-top:10px; font-weight: 800; color: blue; font-family: Georgia, 'Times New Roman', Times, serif;">
                    Bood Details</h3>
            </div>
        </div>
    </div>
                        {{-- ===Detail Container==== --}}

    <div class="container">
        <div class="row">
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
            <div class="card">
                <div class="col-lg-4">
                    <img src="{{ asset('books/' . $show_details->image) }}" class="card-img-top" alt="Book-image"
                        width="300px">
                </div>
                <div class="col-lg-4" style="margin: auto; width:50%; padding:30px">
                    <div class="card-body">
                        <h2 class="card-title text-info" style="font-weight: 600">{{ $show_details->book_name }}</h2>
                        <span class="text-success" style="font-weight: 600">Book Auther</span>
                        <h5 class="card-title">{{ $show_details->auther_name }}</h5>
                        <span class="text-success" style="font-weight: 600">Book Pages</span>
                        <h5 class="card-title">{{ $show_details->pages }}</h5>
                        <span class="text-blue" style="font-weight: 600">Book Descriptioin</span>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Architecto veritatis possimus distinctio a error odio saepe adipisci vitae?
                            Assumenda velit inventore fuga odit nam eveniet aliquam voluptas sequi,
                            eligendi sint?</p>
                        <a href="{{ route('rentals.book', $show_details->id) }}" class="btn btn-info">Rent Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
