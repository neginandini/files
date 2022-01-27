@extends('admin.master')
@section('content')
    <form method="post">
        @csrf()
        <h2>Change password</h2>
        <div class="row">
  <div class="form-group col-5">
  Old Password <input type="text" class="form-control" name="old">
 </div>
  </div>
  <div class="row">
  <div class="form-group col-5">
  New Password <input type="password" class="form-control" name="newp">
 </div>
  </div>
  <div class="row">
  <div class="form-group col-5">
  Confirm Password <input type="password" class="form-control" name="conp">
 </div>
  </div>
  <input type="submit" class="btn btn-warning" value="Change" name="sub">
</form>
@stop