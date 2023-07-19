@extends('customComponent.header')
@push('title')
    <title>Add Product</title>
@endpush

<div class="container m-5 p-5 text-center">



    <form method="POST" action="{{ route('prod_upload') }}" enctype="multipart/form-data">
        @csrf
        <!-- Laravel CSRF token -->
        <label for="sellername">Seller Name</label>
        <input type="text" id="sellername" name="sellername" value="{{ session('loger') }}" disabled><br><br>

        <label for="email">Seller Email</label>
        <input type="text" id="email" value="{{ session('email') }}" disabled><br><br>

        <label for="product_name">Product Name:</label>
        <input type="text" id="product_name" name="product_name" required><br><br>

        <label for="brand">Brand:</label>
        <input type="text" id="brand" name="brand" required><br><br>

        <label for="category">Category:</label>

        <select  name="category" id="category">
            <option selected>Select one</option>
            <option value="laptop">Laptop</option>
            <option value="Smart Phone">Smart Phone</option>
            <option value="TVs">TV Application</option>
            <option value="accessories">Accessories</option>
        </select>


        <br><br>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01" required><br><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea><br><br>

        <label for="availability">Availability:</label>
        <select id="availability" name="availability" required>
            <option value="In Stock">In Stock</option>
            <option value="Out of Stock">Out of Stock</option>
        </select><br><br>

        <label for="ratings">Ratings:</label>
        <input type="number" id="ratings" name="ratings" step="0.1" required><br><br>

        <label for="special_offers">Special Offers:</label>
        <input type="number" id="special_offers" name="special_offers"><br><br>

        <label for="warranty">Warranty:</label>
        <input type="text" id="warranty" name="warranty" required><br><br>

        <label for="accessories">Accessories:</label>
        <input type="text" id="accessories" name="accessories"><br><br>

        <input type="file" name="image" id="image" aria-describedby="fileHelpId">

        <input type="submit" value="Add Product">
    </form>

</div>


@include('customComponent.backBtn')

@include('customComponent.footer')
