@extends('layouts.app')

@section('title', $product['name'])

@section('content')
<div class="container py-5">
    <div class="row g-5">

        <!-- Image Gallery -->
        <div class="col-md-6">
            <div class="mb-3">
                <img id="mainImage" src="{{ $product['images'][0] }}" alt="{{ $product['name'] }}" class="img-fluid">
            </div>
            <div class="d-flex gap-2">
                @foreach ($product['images'] as $image)
                    <img src="{{ $image }}" class="img-thumbnail" style="width: 80px; cursor: pointer;" onclick="document.getElementById('mainImage').src='{{ $image }}'">
                @endforeach
            </div>
        </div>

        <!-- Details -->
        <div class="col-md-6">
            <h2 class="h4">{{ $product['name'] }}</h2>
            <p class="h5 mt-2">{{ $product['price'] }}</p>
            <p><strong>Color:</strong> {{ $product['color'] }}</p>

            <div class="mt-3">
                <label for="size">Select size</label>
                <select id="size" class="form-select w-50 mt-2">
                    <option selected disabled>Select size</option>
                    <option>XS</option><option>S</option><option>M</option><option>L</option><option>XL</option>
                </select>
                <div class="mt-2"><a href="#" class="small text-decoration-underline">Find your size</a></div>
            </div>

            <button class="btn btn-dark w-100 mt-4 py-2">ADD TO SHOPPING BAG</button>

            <div class="mt-4">
                <a href="#" class="d-block text-decoration-underline small mb-2">Find in store</a>
                <a href="#" class="d-block text-decoration-underline small mb-2">Product details</a>
                <a href="#" class="d-block text-decoration-underline small">Free shipping and returns</a>
            </div>
        </div>
    </div>
</div>
@endsection
