
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
            height: 100vh;
          }
        </style>
    </head>
    <body class="im">
        <div class="container mt-5">
           @if(Session::has('msg'))
    <div class="alert alert-danger">{{Session::get('msg')}}</div>
                @endif
    <form method="post" action="registered" enctype="multipart/form-data">
        @csrf()
        <h2>Registeration Form</h2>
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
   Password <input type="text" class="form-control" placeholder="Enter password" name="pass">
   @if($errors->has('pass'))
   <label class="text-danger">{{$errors->first('pass')}}</label>
   @endif
 </div>
  </div>
  <div class="row">
  <div class="form-group col-5 m-auto">
  Confirm password <input type="text" class="form-control" placeholder="confirm password" name="cpass">
  @if($errors->has('cpass'))
   <label class="text-danger">{{$errors->first('cpass')}}</label>
   @endif
 </div>
  </div>
  <div class="row">
  <div class="form-group col-5 m-auto">
  Name <input type="text" class="form-control" name="ename" placeholder="Enter Name">
  @if($errors->has('ename'))
   <label class="text-danger">{{$errors->first('ename')}}</label>
   @endif
 </div>
  </div>
  <div class="row">
  <div class="form-group col-5 m-auto">
 Age<input type="number" class="form-control" name="age" placeholder="Enter Age">
 @if($errors->has('age'))
   <label class="text-danger">{{$errors->first('age')}}</label>
   @endif
 </div>
  </div>
  <div class="row">
  <div class="form-group col-5 m-auto">
  City<input type="text" class="form-control" name="city" placeholder="Enter city">
  @if($errors->has('city'))
   <label class="text-danger">{{$errors->first('city')}}</label>
   @endif
 </div>
  </div>
  <div class="row">
  <div class="form-group col-5 m-auto">
 Image <input type="file" class="form-control" name="image">
 @if($errors->has('image'))
   <label class="text-danger">{{$errors->first('image')}}</label>
   @endif
 </div>
  </div>
  <input type="submit" class="btn btn-success mt-2" value="Submit" name="sub">
 <a href="loginform" class="btn btn-warning mt-2" >Login</a>
</form>
</div>
        @include('admin.includes.foot')
    </body>
</html>