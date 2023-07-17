@extends('customComponent.header')

@push('title')
    <title>ElectronicShop</title>
@endpush



@include('customComponent.nav-bar')




<div class="container">
    <div class="row justify-content-center align-items-center g-2">
        @foreach ($product as $item)
            <div class="card-group">
                <div class="card">

                    @if ($item->file)
                        <img class="" src="{{ asset('img/'.$item->file) }}" width="30%"
                            alt="{{ asset($item->product_name) }}">
                    @else
                        <img class="" src="{{ asset('img/thumlin.png') }}" width="30%"
                            alt="{{ asset($item->product_name) }}">
                    @endif

                    <div class="card-body">
                        <div class="row">
                            <h3 class="card-title">{{ $item->product_name }}</h3>
                            <div class="col-lg-6"></div>
                            <div class="col-lg-6 text-end">
                                <a name="" id="" class="btn btn-warning mx-5" href=""
                                    role="button">
                                    ADD TO CART</a>
                                <a name="" id="" class="btn btn-warning mx-5" href="{{route('payment')}}"
                                    role="button">
                                    BUY NOW</a>
                            </div>
                        </div>
                        <h4 class="card-title"><span class="text-info"> Price :- </span> Rs . <s>
                                {{ $item->price }}
                                /-</s></h4>
                        <h4 class="card-title"><span class="text-info"> Specail Offers :-
                            </span>Rs. {{ $item->special_offers }} /-</h4>
                        <p class="card-title"><span class="text-info"> Brand :- </span> {{ $item->brand }}</p>
                        <p class="card-title"><span class="text-info"> Category :- </span>{{ $item->category }}</p>
                        <p class="card-title"><span class="text-info"> Availability :- </span>
                            <?php
                            if ($item->availability == 'In Stock') {
                                echo '<span class="bg-success shadow p-1 text-light rounded">In Stock</span>';
                            } else {
                                echo '<span class="bg-warning shadow p-1 text-light rounded">Out of Stock</span>';
                            }
                            ?>
                        </p>
                        <p class="card-title"><span class="text-info"> Rating :- </span> {{ $item->ratings }}</p>
                        <p class="card-title"><span class="text-info"> Warranty :- </span> {{ $item->warranty }}</p>
                        <p class="card-title"><span class="text-info"> Accessories :- </span>
                            {{ $item->accessories }}
                        </p>

                        <p class="card-text"><span class="text-info"> Description :- </span>{{ $item->description }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>






@include('customComponent.footer')
