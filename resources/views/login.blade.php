@extends('customComponent.header')

@push('title')
    <title>SignIn</title>
@endpush

<body style="background: url({{ asset('screen1.png') }});background-repeat:no-repeat;background-size:100% 100%;">


    <div class="container p-5 m-5">
        <div class="row justify-content-center align-items-center g-2 p-5 m-5">
            <div class="col-3"></div>
            <div class="col-6 p-5 m-5 bg-light bg-opacity-25 border rounded-4 shadow">
                <form action="" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email"
                            aria-describedby="emailHelpId" placeholder="abc@mail.com">
                        <small id="emailHelpId" class="form-text text-muted">Help text</small>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <small id="emailHelpId" class="form-text text-muted">If you don't have account,<a
                            href="{{ route('register') }}">SignUp</a></small>
                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>

    @include('customComponent.footer')
</body>
