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
    <style>
      table,
      tr,
      td {
          padding: 5px;
          text-align: center;
      }
  </style>
</head>
<body>
  <?php
(session('id'))
  ?>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand">Crud Application</a>
          </div>
          <ul class="nav navbar-nav">
            <li style="margin-top: 13px">
              <form action="search" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="search" name="search" placeholder="Search here">
                <input type="submit" name="submit" value="Search">
              </form>
            </li>
            <li><a href="logout1">Logout</a></li>
          </ul>
        </div>
      </nav>

    <div class="container" style="margin-top: 30px;"> 
        <div class="row">
          <div class="col-lg-12 rounded bg-light rounded">
             <div class="text-right">
               <a href="add_user" class="btn btn-success">Add User</a>
             </div>
               <h4 style="text-align: center; margin-top:10px; font-weight: 800; color: blue; font-family: Georgia, 'Times New Roman', Times, serif;">
                   Trashed Data</h4>
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
            <th>Restore</th>

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
            <td><a href="{{url('forceDelete/'.$show->id)}}" class="btn btn-warning">Delete</a></td>
            <td><a href="{{url('restore/'.$show->id)}}" class="btn btn-danger">Restore</a></td>
          </tr>
          @endforeach
        </tbody>
        </table>
    </div>

    </body>
    </html>