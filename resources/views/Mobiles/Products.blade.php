@extends('customComponent.header')

@push('title')
    <title>ElectronicShop</title>
@endpush



<nav class="nav justify-content-center flex-row text-center bg-primary shadow p-1">
    <div class="col-4"></div>
    <div class="col-4 ">
        <span class="mx-4 "><a href="{{url('/')}}" class="btn btn-primary">Home</span>
        <span class="mx-4 "><a href="" class="btn btn-primary">Mobile</a></span>
        <span class="mx-4 "><a href="" class="btn btn-primary">Profile</a></span>
        <span class="mx-4 "><a href="" class="btn btn-primary">Aboutadsfds</a></span>
    </div>
    <div class="col-4 text-end px-5">
        <span>{{ session('role') }} : </span>
        <span>{{ session('loger') }} </span>
        <span> <a href="{{ route('logout') }}">
                <img src="{{ asset('img/logout_mark.png') }}" width="10%" alt="logout"></a></span>
    </div>

</nav>


{{-- <body style="background: url({{ asset('tv1.png') }});">

    <div style="background: url({{ asset('navbar.png') }});background-repeat:no-repeat;background-size:100% 100%;">

        @include('customComponent.nav-bar')

    </div>

    <h1>Mobile</h1>
    <span>{{ session('loger') }}</span>
    <a href="{{ route('logout') }}" class="badge bg-primary">Log-Out</a>
    <a href="{{ url('/') }}" class="badge bg-primary">Welcome</a> --}}
{{-- </body> --}}

@include('customComponent.footer')
