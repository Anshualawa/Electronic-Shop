@extends('customComponent.header')

@push('title')
    <title> All Product </title>
@endpush

@include('customComponent.nav-bar')



<div class="p-2 my-5">
    <div class="row ">
        <div class="col-6  P-1">
            <h2>Product Detail</h2>
        </div>
        <div class="col-6 d-inline-block ">
            <a href=""><button class="btn btn-primary  m-2 float-end">Add</button></a>
            <a href=""><button class="btn btn-danger  m-2 float-end">Trash</button></a>
        </div>
    </div>
    <div class="shadow border table-responsive rounded">
        <table class="table table-bordered  table-hover table-secondary table-responsive">
            <thead>
                <tr>
                    <th scope="col">S.N.</th>
                    <th scope="col">Shop ID</th>
                    <th scope="col">Product ID</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Category</th>
                    <th scope="col">Price</th>
                    <th scope="col">Special Offer</th>
                    <th scope="col">Availability</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Warranty</th>
                    <th scope="col">Accessories</th>
                    <th scope="col">Photos</th>
                    {{-- <th scope="col">Description</th> --}}
                    {{-- <th class="text-center" scope="col" colspan="2">Action</th> --}}
                </tr>
            </thead>
            <tbody><?php $i = 0; ?>
                @foreach ($product as $item)
                    <tr>
                        <td>{{ $i + 1 }}</td><?php $i += 1; ?>
                        <td>202114{{ $item->seller_id }}</td>
                        <td scope="row">202315{{ $item->product_id }}</td>
                        <td>{{ $item->product_name }}</td>
                        <td>{{ $item->brand }}</td>
                        <td>{{ $item->category }}</td>
                        <td>{{ '₹' . $item->price }} </td>
                        <td>{{ '₹' . $item->special_offers }}</td>
                        <td>{{ $item->availability }}</td>
                        <td>{{ $item->ratings }}</td>
                        <td>{{ $item->warranty }}</td>
                        <td>{{ $item->accessories }}</td>
                        <td><span><img src="{{ asset('img/'.$item->file) }}" width="60%" alt="{{ $item->file }}" /></span></td>
                        {{-- <td>{{ $item->description }}</td> --}}


                        {{-- <td>
                            @if ($item->status == '1')
                                <span class="badge text-success"> Active </span>
                            @else
                                <span class="badge text-danger">Inactive</span>
                            @endif

                        </td>
                        <td><a href="{{ route('customer.edit', ['id' => $item->customer_id]) }}"><button
                                    class="btn btn-success">Edit</button></a></td>
                        <td><a href="{{ route('customer.delete', ['id' => $item->customer_id]) }}"><button
                                    class="btn btn-warning">Trash</button></a></td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

</div>



@include('customComponent.footer')
