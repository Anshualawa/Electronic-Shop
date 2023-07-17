@extends('customComponent.header')

@push('title')
    <title>Payment Method</title>
@endpush



<div class="container">
    <div class="row justify-content-center align-items-center g-2 p-5 m-5 bg-light">
        <div class="col">
            <div class="container">
                <div class="row justify-content-center align-items-center g-2">
                    <div class="col-6">

                        {!! QrCode::size(300)->generate('7222942093') !!}

                    </div>
                    <div class="col-6">
                        <td>Product : </td>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>










@include('customComponent.footer')
