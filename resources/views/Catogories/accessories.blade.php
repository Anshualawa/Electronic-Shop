@extends('customComponent.header')

@push('title')
    <title>All Electronic Accessories</title>
@endpush



@include('customComponent.nav-bar')




<div class="container p-5">
    @foreach ($product as $item)
        @if (strrchr($item->category, 'accessories'))
            <div class="row justify-content-center align-items-center g-2 my-5 p-2 bg-light shadow  rounded-4">



                <div class="col-5 ">
                    @if ($item->file)
                        <img class="" src="{{ asset('img/Product/' . $item->file) }}" width="80%"
                            alt="{{ asset($item->product_name) }}">
                    @else
                        <img class="" src="{{ asset('img/thumlin.png') }}" width="80%"
                            alt="{{ asset($item->product_name) }}">
                    @endif
                </div>




                <div class="col-7 p-2  ">
                    <table class="table table-">
                        <tr>
                            <h2>{{ $item->product_name }}</h2>
                        </tr>

                        <tr>
                            <th>Brand</th>
                            <td>{{ $item->brand }}</td>
                        </tr>
                        <tr>
                            <th>Special Offer </th>
                            <td>
                                <h5 class="text-primary">Rs. {{ $item->special_offers }} /-</h5>
                            </td>
                        </tr>
                        <tr>
                            <th>Price </th>
                            <td>Rs. <s>{{ $item->price }}</s>/-</td>
                        </tr>
                        <tr>
                            <th>Availability</th>
                            <td>
                                @if ($item->availability == 'In Stock')
                                    <span class="bg-success shadow p-1 text-light rounded">In Stock</span>
                                @else
                                    <span class="bg-warning shadow p-1 text-danger rounded">Out of Stock</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Rating</th>
                            <td> {{ $item->ratings }}<i class="bi bi-star-fill"></i></td>
                        </tr>

                        <tr>
                            <th>Warranty</th>
                            <td>{{ $item->warranty }}</td>
                        </tr>
                        <tr>
                            <th>Accessories</th>
                            <td>{{ $item->accessories }}</td>
                        </tr>
                    </table>
                    <div class="row ">
                        <ul>
                            <li>Bank Offer10% off on Axis Bank Credit Card and EMI Transactions, up to ₹1000, on orders
                                of
                                ₹5,000 and above <a href="">T&C</a>.</li>
                            <li>Special PriceGet extra ₹18000 off (price inclusive of cashback/coupon) <a
                                    href="">T&C</a>.</li>
                        </ul>


                        <div class="  text-center">
                            <a name="" id="" class="btn btn-info mx-5" href="" role="button">
                                ADD TO CART</a>

                            <a name="" id="" class="btn btn-info mx-5"
                                href="{{ route('payment', ['id' => $item->product_id]) }}" role="button">BUY
                                NOW</a>
                        </div>
                    </div>
                </div>


            </div>
        @endif
    @endforeach
</div>






@include('customComponent.footer')
