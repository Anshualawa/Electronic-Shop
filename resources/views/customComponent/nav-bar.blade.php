<nav class="nav justify-content-center flex-row text-center bg-primary shadow p-1 fixed-top">
    <div class="col-2"></div>
    <div class="col-8 ">
        <span class="mx-4 "><a href="{{ route('home') }}" class="btn btn-primary">Home</a></span>
        <span class="mx-4 "><a href="{{ route('mobile') }}" class="btn btn-primary">Mobile</a></span>
        <span class="mx-4 "><a href="{{ route('laptop') }}" class="btn btn-primary">Laptop</a></span>
        <span class="mx-4 "><a href="{{ route('tvs') }}" class="btn btn-primary">TV's</a></span>
        <span class="mx-4 "><a href="{{ route('accessories') }}" class="btn btn-primary">Accessories</a></span>


        @switch(session('role'))
            @case('admin')
                <span class="mx-4 "><a href="/adminboard" class="btn btn-primary">Dashboard</a></span>
                {{-- <span class="mx-4 "><a href="/upload-product" class="btn btn-primary">Add Product</a></span>; --}}
            @break

            @case('seller')
                <span class="mx-4 "><a href="/upload-product" class="btn btn-primary">Add Product</a></span>
                <span class="mx-4 "><a href="{{ route('productDetail', ['id' => session('id')]) }}"
                        class="btn btn-primary">Product Details</a></span>
            @break

            @default
                <span class="mx-4 "><a href="#" class="btn btn-primary">Cart<span class=" badge  bg-danger"> {{session('cart')}}</span></a></span>
                <span class="mx-4 "><a href="#" class="btn btn-primary">About</a></span>
        @endswitch



    </div>
    <div class="col-2 text-end px-3">
        <span>{{ session('role') }} : </span>
        <span>{{ session('loger') }} </span>
        <span> <a href="{{ route('logout') }}">
                <img src="{{ asset('img/logout_mark.png') }}" width="20%" alt="logout"></a></span>
    </div>

</nav>
