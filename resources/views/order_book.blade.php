<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container" style="margin-top: 40px;">
        <div class="row">
            <div class="col-lg-12">
                <h3
                    style="text-align: center; margin-top:10px; font-weight: 800; color: blue; font-family: Georgia, 'Times New Roman', Times, serif;">
                    Confirm Book Order On Rent</h3>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 40px;">
        <div class="row">
            <div class="col-lg-12" style="padding-left:30%; padding-right:30%;">
                <form action="{{ url('rented_book', $show_details->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{-- <input type="text" name="user_id" hidden> --}}
                    <div class="form-group">
                        <label for="user_Name">User Name</label>
                        <input type="text" class="form-control" name="name" placeholder="User Name">
                    </div>
                    <div class="form-group">
                        <label for="Book_Name">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Valid E-mail">
                    </div>
                    <div class="form-group">
                        <label for="username">Book ID</label>
                        <input type="" class="form-control" name="" value="{{ $show_details->id }}"
                            disabled>
                    </div>
                    <div class="form-group">
                        <label for="Book_Name">Book Name</label>
                        <input type="text" class="form-control" name="book_name"
                            value="{{ $show_details->book_name }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="email">Auther Name</label>
                        <input type="text" class="form-control" name="auther_name"
                            value="{{ $show_details->auther_name }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="pages">Pages</label>
                        <input type="text" class="form-control" name="pages" value="{{ $show_details->pages }}"
                            disabled>
                    </div>
                    <button type="submit" class="btn btn-info">Place Order</button>
                </form>
            </div>
        </div>
    </div>

    </div>
</body>

</html>
