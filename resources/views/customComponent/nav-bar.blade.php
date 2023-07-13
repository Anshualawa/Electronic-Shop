<nav class="nav justify-content-center flex-row text-center bg-primary shadow p-1">
    <div class="col-4"></div>
    <div class="col-4 ">
        <span class="mx-4 "><a href="{{ url('/') }}" class="btn btn-primary">Home</span>
        <span class="mx-4 "><a href="" class="btn btn-primary">Mobile</a></span>
        <span class="mx-4 "><a href="" class="btn btn-primary">Profile</a></span>
        <span class="mx-4 "><a href="" class="btn btn-primary">About</a></span>
    </div>
    <div class="col-4 text-end px-5">
        <span>{{ session('role') }} : </span>
        <span>{{ session('loger') }} </span>
        <span> <a href="{{ route('logout') }}">
                <img src="{{ asset('img/logout_mark.png') }}" width="10%" alt="logout"></a></span>
    </div>

</nav>