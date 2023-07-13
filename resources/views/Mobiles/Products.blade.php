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
                    <img class="" src="holder.js/100x180/" alt="{{ $item->product_name }}">
                    <div class="card-body">
                        <h3 class="card-title">{{ $item->product_name }}</h3>
                        <h4 class="card-title">{{ $item->price }}</h4>
                        <h4 class="card-title">{{ $item->special_offers }}</h4>
                        <p class="card-title">{{ $item->brand }}</p>
                        <p class="card-title">{{ $item->category }}</p>
                        <p class="card-title">{{ $item->availability }}</p>
                        <p class="card-title">{{ $item->ratings }}</p>
                        <p class="card-title">{{ $item->warranty }}</p>
                        <p class="card-title">{{ $item->accessories }}</p>

                        <p class="card-text">{{ $item->description }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>






@include('customComponent.footer')
