@extends('customComponent.header')

@push('title')
    <title>SignIn</title>
@endpush



<div class="container">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col">
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
    </div>
</div>

@include('customComponent.footer')
