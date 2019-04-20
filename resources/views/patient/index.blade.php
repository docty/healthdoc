@extends('layouts.app')

@section('content')

<div class="login-clean">
    <form method="post">
        <h2 class="sr-only">Login Form</h2>
        <div class="illustration"><i class="icon ion-ios-medical-outline" style="color: rgb(115,201,119);"></i></div>
        <div class="form-group"><input type="email" name="name" placeholder="Enter Full Name" class="form-control" /></div>
        <div class="form-group"><input type="email" name="dob" placeholder="Date of Birth" class="form-control" /></div>
        <div class="form-group"><select value="Gender" class="form-control"><option value selected>Gender</option><option value="male">Male</option><option value="female">Female</option></select></div>
        <div class="form-group"><input type="email" name="nhis" placeholder="NHIS" class="form-control" /></div>
        <div class="form-group"><input type="password" name="password" placeholder="Password" class="form-control" /></div>
        <div class="form-group"><input type="file" /></div>
        <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background-color: rgb(83,105,73);">Register</button></div><a href="#" class="forgot">Forgot your email or password?</a></form>
</div>



@endsection
