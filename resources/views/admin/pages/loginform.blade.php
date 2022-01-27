<!DOCTYPE html>
<html>
    <head>
        @include('admin.includes.head')
        <style>
            .im{
            background-color:pink;
            justify-content: center;
            background-repeat: no-repeat;
            text-align: center;
            padding:5%;
            font-size:22px;
            color:white;
            height: 100vh;
          }  
            </style>
    </head>
    <body class="im">
        <div class="container mt-5">
           @if(Session::has('msg'))
    <div class="alert alert-danger">{{Session::get('msg')}}</div>
                @endif
    <form method="post" action="home" enctype="multipart/form-data">
        @csrf()
        <h2 class="mb-3">Login</h2>
        <div class="row">
  <div class="form-group col-5 m-auto">
   Email <input type="email" class="form-control" placeholder="Enter email" name="email">
   @if($errors->has('email'))
   <label class="text-danger">{{$errors->first('email')}}</label>
   @endif
 </div>
  </div>
  <div class="row">
  <div class="form-group col-5 m-auto">
   Password <input type="password" class="form-control" placeholder="Enter password" name="pass">
   @if($errors->has('pass'))
   <label class="text-danger">{{$errors->first('pass')}}</label>
   @endif
 </div>
  </div>
  <input type="submit" class="btn btn-success mt-3" value="Submit" name="sub">
 <a href="register" class="btn btn-warning mt-3">Register</a>
</form>
</div>
        @include('admin.includes.foot')
    </body>
</html>