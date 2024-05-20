@extends('brightauth::layouts.header')

@section('content')
<style>
    .admin_top_bnav{

    }
    .admin_b_ul{
        display: flex;
        border-radius: 0px 70px 30px -20px;
        background-color: white;
        padding: 8px 8px;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 50px;
    }
    .admin_b_ul li{
        list-style: none;
        background-color: transparent;
    }
    .admin_b_ul li a{
        text-decoration: none;
        color: black;
    }
</style>

    <ul class="admin_b_ul">
        <div class="b_admin_company">
            <li><a href="{{ route('dashboard') }}">Dashborad</a></li>
        </div>
        <div class="b_admin_ul">
            @if (Auth::check())
            <li><a href="{{ route('logout') }}">Logout</a></li>

            @endif
        </div>

    </ul>

<div class="admin_b_container">
    @if(Auth::user())
    <h2>Hi "{{ auth()->user()->name }}", Welcome to the Dashboard</h2>
@else
    <p>User not authenticated.</p>

@endif
</div>
@endsection
