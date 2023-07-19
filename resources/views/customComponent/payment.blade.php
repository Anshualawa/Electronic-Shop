@extends('customComponent.header')

@push('title')
    <title>Payment Method</title>
@endpush



<div class="container">
    <div class="row justify-content-center align-items-center g-2 p-2 m-2 bg-light">
        <div class="col">
            <div class="container">
                <div class="row justify-content-center align-items-center g-2">
                    <div class="col-6">
                        <img src="{{ asset('img/Product/' . $product->file) }}" alt="{{ $product->file }}">

                        {{-- {!! QrCode::size(300)->generate('7222942093') !!} --}}

                    </div>
                    <div class="col-6">

                        <table class="table table-border">
                            <tr>
                                <th>Product Name</th>
                                <td>{{ $product->product_name }}</td>
                            </tr>
                            <tr>
                                <th>Brand</th>
                                <td>{{ $product->brand }}</td>
                            </tr>
                            <tr>
                                <th>Warranty</th>
                                <td>{{ $product->warranty }}</td>
                            </tr>
                            <tr>
                                <th>
                                    In The Box</th>
                                <td>{{ $product->accessories }}</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>{{ $product->description }}</td>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <td>{{ 'Rs. ' . $product->price . ' /-' }}</td>
                            </tr>
                            <tr>
                                <th>Discount</th>
                                <td>{{ round(($product->special_offers * 100) / $product->price) . '% OFF' }}</td>
                            </tr>
                            <tr>
                                <th>Special Offer</th>
                                <td>{{ 'Rs. ' . $product->special_offers . ' /-' }}</td>
                            </tr>
                        </table>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>










@include('customComponent.backBtn')
@include('customComponent.footer')
