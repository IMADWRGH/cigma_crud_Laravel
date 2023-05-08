@extends('login.layout')
@section('title','Registration')
@section('content')
<div class="container">
   <form style="width:500px" class="ms-auto me-auto mt-4" action="{{route('registration.post')}}" method="post">
@csrf
    <div class="mb-3"> 
  <label for="name" class="form-label">Fullname </label>
  <input type="text" class="form-control" placeholder="Travis..." name="name">
</div>
<div class="mb-3"> 
  <label for="email" class="form-label">Email address </label>
  <input type="email" class="form-control" placeholder="name@example.com" name="email">
</div>
<div class="mb-3">     
  <label for="password" class="form-label">Password </label>
  <input type="password" class="form-control" placeholder=" Your password must be 8-20 characters long" name="password">
</div>
<button type="submit" class="btn btn-primary" >Submit</button>
</form>
</div>
@endsection
