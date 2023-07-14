<nav class="nav justify-content-center flex-row text-center bg-primary shadow p-1 fixed-top">
    <div class="col-4"></div>
    <div class="col-4 ">
        <span class="mx-4 "><a href="{{ url('/') }}" class="btn btn-primary">Home</a></span>
        <span class="mx-4 "><a href="{{route('mobile')}}" class="btn btn-primary">Mobile</a></span>
        <?php
        if (session('role') == 'admin') {
            echo '<span class="mx-4 "><a href="/adminboard" class="btn btn-primary">Dashboard</a></span>';
        } else {
            echo '<span class="mx-4 "><a href="#" class="btn btn-primary">Cart</a></span>';
            echo '<span class="mx-4 "><a href="#" class="btn btn-primary">About</a></span>';
        }
        ?>
    </div>
    <div class="col-4 text-end px-5">
        <span>{{ session('role') }} : </span>
        <span>{{ session('loger') }} </span>
        <span> <a href="{{ route('logout') }}">
                <img src="{{ asset('img/logout_mark.png') }}" width="10%" alt="logout"></a></span>
    </div>

</nav>
