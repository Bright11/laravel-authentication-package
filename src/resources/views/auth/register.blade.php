@extends('brightauth::layouts.header')

@section('content')

<form action="{{ route("register") }}" class="brightweb_form" method="POST">
    @csrf
    @error('name')
    <label for="" class="lable_error">{{ $message }}</label>
    @else
    <label for="">Username</label>
    @enderror
    <input type="text" placeholder="Username" name="name">
    @error('email')
    <label for="" class="lable_error">{{ $message }}</label>
    @else
    <label for="">Email</label>
    @enderror
    <input type="email" placeholder="Email" name="email">
    @error('password')
    <label for="" class="lable_error">{{ $message }}</label>
    @else
    <label for="">Password</label>
    @enderror
    <input type="password" placeholder="Password" class="viewpassword" name="password">
    @error('password_confirmation')
    <label for="" class="lable_error">{{ $message }}</label>
    @else
    <label for="">confirmed Password</label>
    @enderror
    <input type="password" placeholder="Confirm Password" class="viewpassword" name="password_confirmation">
   <div class="showpassword">
    <input type="checkbox" onclick="myFunction()">Show Password
   </div>
   <button type="submit" class="bright_btn">Register</button>
   <p class="no_account_b">Already have an account? <a href="{{ route("login") }}">Login</a></p>
</form>
<script>
    function myFunction() {
      var x = document.querySelectorAll('.viewpassword');
      x.forEach(function(input) {
        if (input.type === "password") {
          input.type = "text";
        } else {
          input.type = "password";
        }
      });
    }
    </script>


@endsection
