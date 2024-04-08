@extends('layouts.app')

@section('content')
<div class="container">
    <style>
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 210px;
            background-color: darkslategrey;
            padding-top: 0px;
            overflow-x: hidden;
            transition: all 0.3s;
        }

        .sidebar a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: white;
            font-size: 18px;
        }
        .sidebar  img {
            width: 80px;
            height: 50px;
            margin-right: 10px;
            vertical-align: middle;
        }
        .sidebar .dropdown {
            display: none;
            position: relative;
            background-color: darkslategrey;
            padding-left: 20px;
        }
        .sidebar .dropdown li a {
            display: block;
            padding: 5px;
            font-size: 16px;
        }
        .sidebar a:hover +.dropdown,
        .dropdown:hover {
            display: block;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 0;
            }
        }
        h3 {text-align: center;}
        .links {text-align: center;}
        
    </style>
    <div class="sidebar"> 
        <hr>
        <div class="links">

        <img class="center" src="images/capture.jpeg" alt="Logo"> 
        <br><hr>
        <h3>User</h3>
        <hr>
        <a href="/redirects">Dashboard</a>
        <a  href="#">Applications</a>
            <ul class="dropdown">
                <li><a href="#">Change of land use</a></li>
                <li><a href="{{ route('landRights') }}">Transfer of land rights</a></li>
                <li><a href="#">Title deed</a></li>
            </ul>
        <a href="#">Notifications</a>
        <a href="#">Payments</a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
