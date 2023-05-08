@extends('login.layout')
@section('title','Login')
@section('content')
<div class="container ">
   <form style="width:500px" class="ms-auto me-auto mt-4" action="{{route('login.post')}}" method="post">
@csrf
    <div class="mb-3"> 
  <label for="email" class="form-label">Email address </label>
  <input type="email" class="form-control" placeholder="name@example.com" name="email">
</div>
<div class="mb-3">     
  <label for="password" class="form-label">Password </label>
  <input type="password" class="form-control" placeholder=" Your password must be 8-20 characters long" name="password">
</div>
<div class="mb-3 form-check"> 
 <input type="checkbox" class="form-check-input" placeholder=" Your password must be 8-20 characters long">
  <label for="exampleFormControlInput1" class="form-check-label">Check out </label>
</div>
<button type="submit" class="btn btn-primary" >Login</button>
</form>
</div>
@endsection
