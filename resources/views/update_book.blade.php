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
                    Update Book Data</h3>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 40px;">
        <div class="row">
            <div class="col-lg-12">

                <form action="{{url('update_book_data',$update->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="Book_Name">Book Name</label>
                        <input type="text" class="form-control" name="book_name" value="{{ $update->book_name }}">
                        @if ($errors->has('book_name'))
                            <span class="text-danger">{{ $errors->first('book_name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="email">Auther Name</label>
                        <input type="text" class="form-control" name="auther_name" value="{{ $update->auther_name }}">
                        @if ($errors->has('auther_name'))
                            <span class="text-danger">{{ $errors->first('auther_name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="pages">Pages</label>
                        <input type="text" class="form-control" name="pages" value="{{ $update->pages }}">
                        @if ($errors->has('pages'))
                            <span class="text-danger">{{ $errors->first('pages') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="image">Image:</label>
                        <input type="file" class="form-control" name="image" value="{{ $update->image }}" required>
                        @if ($errors->has('image'))
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-info">Update</button>
                </form>
            </div>
        </div>
    </div>

    </div>
</body>

</html>
