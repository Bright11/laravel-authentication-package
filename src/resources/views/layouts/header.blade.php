<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    {{-- <link rel="stylesheet" href="{{ asset('bauthcss/auth.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset("vendor/brightwebauth/authcss/auth.css") }}"/>

</head>
<body>


@yield('content')

<style>
    :root{
        --bg-color:{{ config('brightwebauthconfig.bg-color', '#f0f2f5') }};
        --form-bg-color:{{ config('brightwebauthconfig.form-bg-color', '#222222') }};
        --form-input-bg-color:{{ config('brightwebauthconfig.form-input-bg-color', '#333333') }};
        --form-input-color:{{ config('brightwebauthconfig.form-input-color', 'white') }};
    }
    

</style>
</body>
</html>
