@extends('brightauth::layouts.header')

@section('content')


   <form action="{{ route("login") }}" class="brightweb_form" method="POST">
       @csrf

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

       <div class="showpassword">
           <input type="checkbox" onclick="myFunction()">Show Password
          </div>
      <button type="submit" class="bright_btn">Login</button>
     <p class="no_account_b">Don't have an account!  <a href="{{ route("register") }}">Register</a></p>
     {{-- <p class="no_account_b">Forgogt password!  <a href="{{ route("register") }}">Reset password</a></p> --}}


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
