@extends('customComponent.header')

<body style="background: url({{ asset('Desktop-3.png') }});background-repeat:no-repeat;background-size:100% 100%;">



    <div class="container my-5 py-5">
        <div class="container p-5 m-5 bg-light bg-opacity-25 shadow boarder rounded-4 text-center">
            <div class="row justify-content-center align-items-center g-2">
                <div class="col-lg-6">
                    <a href="{{ route('customer-login') }}">
                        <div class="col shadow  p-5 m-5 btn btn-secondary">
                            Login As Customer
                        </div>
                    </a>
                    <a href="{{ route('login') }}">
                        <div class="col shadow  p-5 m-5 btn btn-secondary">
                           login As a Seller 
                        </div>
                    </a>
                </div>
                <div class="col-lg-6">
                    <a href="{{ route('customer') }}">
                        <div class="col shadow  p-5 m-5 btn btn-secondary">
                            Create Account
                        </div>
                    </a>
                    <a href="{{ route('login') }}">
                        <div class="col shadow  p-5 m-5 btn btn-secondary">
                            This is for Admin
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

</body>

@include('customComponent.footer')
