<div class="row justify-content-center align-items-center text-center g-2 my-5 p-5">
    <span>
        @if (session('loger'))
            <a class="btn btn-primary" href="{{ route('mobile') }}">Go Back to Home Page</a>
        @else
            <a class="btn btn-primary" href="{{ url('/') }}">Go Back to Home Page</a>
        @endif
    </span>
</div>
