@extends('customComponent.header')

@push('title')
    <title>SignUp</title>
@endpush



<div class="container">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-select form-select-lg" name="role" id="role">
                        <option selected>Select one</option>
                        <option value="customer">Customer</option>
                        <option value="saler">Seller</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" name="name" id="name"
                        value="{{ old('name') }}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}"
                        aria-describedby="emailHelpId" placeholder="abc@mail.com">
                    <small id="emailHelpId" class="form-text text-muted">Help text</small>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <small id="emailHelpId" class="form-text text-muted">If you have already register,<a
                        href="{{ route('login') }}">SignIn</a></small>
            </form>
        </div>
    </div>
</div>

@include('customComponent.footer')
