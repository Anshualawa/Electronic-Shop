@extends('customComponent.header')

@push('title')
    <title>ElectronicShop</title>
@endpush

<body style="background: url({{ asset('tv1.png') }});">

    <div style="background: url({{ asset('navbar.png') }});background-repeat:no-repeat;background-size:100% 100%;">

        @include('customComponent.nav-bar')

    </div>

    <h1>Mobile</h1>

    <a href="{{ route('logout') }}" class="badge bg-primary">Log-Out</a>
    <a href="{{ url('/') }}" class="badge bg-primary">Welcome</a>

    @include('customComponent.footer')
</body>
