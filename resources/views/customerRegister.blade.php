@extends('customComponent.header')

@push('title')
    <title>Create Account</title>
@endpush


<body style="background: url({{ asset('screen2.png') }});background-repeat:no-repeat;background-size:100% 100%;">

    <div class="container  m-5">
        <div class="row justify-content-center align-items-center g-2  ">
            <div class="col-3"></div>
            <div class="col-6 p-5 m-5 bg-light bg-opacity-25 border rounded-4 shadow">

                <form action="{{ route('customer') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" name="name" id="name"
                            value="{{ old('name') }}">
                    </div>
                    <div class="md-4">
                        <label for="birthday" class="form-label">Date Of Birthday</label>
                        <input type="date" class="form-control" name="birthday" id="birthday"
                            value="{{ old('birthday') }}">
                    </div>


                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select class="form-select form-select-lg" name="gender" id="gender">
                            <option selected>Select one</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email"
                            value="{{ old('email') }}" aria-describedby="emailHelpId" placeholder="abc@mail.com">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Contact Number</label>
                        <input type="tel" class="form-control" name="phone" id="phone"
                            value="{{ old('phone') }}" aria-describedby="emailHelpId">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" id="address"
                            value="{{ old('address') }}" >
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <small id="emailHelpId" class="form-text text-muted">If you have already register,<a
                            href="{{ route('customer-login') }}">SignIn</a></small>
                </form>

            </div>
            <div class="col-3"></div>
        </div>
    </div>

    @include('customComponent.footer')
</body>
