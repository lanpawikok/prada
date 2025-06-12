@extends('layouts.app')

@section('title', 'Women - Ready to Wear')

@section('content')
@php
    use Illuminate\Support\Str;

    $products = [
        [
            'name' => 'Light Re-Nylon midi-dress',
            'price' => '$3,050',
            'color' => 'Blue',
            'slug' => 'light-re-nylon-midi-dress',
            'image' => 'https://www.prada.com/content/dam/pradabkg_products/2/230/230736/1WQ9F0AA7/230736_1WQ9_F0AA7_S_OOO_SLF.jpg/_jcr_content/renditions/cq5dam.web.hebebed.2000.2000.jpg'
        ],
        [
            'name' => 'Cotton canvas dress',
            'price' => '$2,350',
            'color' => 'White',
            'slug' => 'cotton-canvas-dress',
            'image' => 'https://www.prada.com/content/dam/pradabkg_products/P/P3P/P3P75R/16NTF0009/P3P75R_16NT_F0009_S_OOO_SLF.jpg/_jcr_content/renditions/cq5dam.web.hebebed.2000.2000.jpg'
        ],
        [
            'name' => 'Silk broadcloth midi-dress',
            'price' => '$5,100',
            'color' => 'Beige',
            'slug' => 'silk-broadcloth-midi-dress',
            'image' => 'https://www.prada.com/content/dam/pradabkg_products/P/P3P/P3P91/17C7F0304/P3P91_17C7_F0304_S_OOO_SLF.jpg/_jcr_content/renditions/cq5dam.web.hebebed.2000.2000.jpg'
        ],
        [
            'name' => 'Printed georgette dress',
            'price' => '$5,900',
            'color' => 'Floral',
            'slug' => 'printed-georgette-dress',
            'image' => 'https://www.prada.com/content/dam/pradabkg_products/P/P3Q/P3Q04/17MKF0075/P3Q04_17MK_F0075_S_OOO_SLF.jpg/_jcr_content/renditions/cq5dam.web.hebebed.2000.2000.jpg'
        ],
    ];
@endphp

<div class="container py-5">
    <h1 class="text-uppercase mb-4">Ready To Wear</h1>

    <!-- Filters -->
    <div class="d-flex flex-wrap gap-3 mb-4">
        <button class="btn btn-outline-dark btn-sm rounded-0">New Arrivals</button>
        <button class="btn btn-outline-dark btn-sm rounded-0">Dresses</button>
        <button class="btn btn-outline-dark btn-sm rounded-0">Coats</button>
        <button class="btn btn-outline-dark btn-sm rounded-0">Jackets</button>
        <button class="btn btn-outline-dark btn-sm rounded-0">Sweaters</button>
        <button class="btn btn-outline-dark btn-sm rounded-0">T-Shirts</button>
    </div>

    <!-- Product Grid -->
    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4">
        @foreach ($products as $product)
            <div class="col">
                <a href="{{ route('product', ['slug' => $product['slug']]) }}" class="text-decoration-none text-dark">
                    <div class="card border-0">
                        <img src="{{ $product['image'] }}" class="card-img-top" alt="{{ $product['name'] }}">
                        <div class="card-body px-0">
                            <p class="mb-1 small">{{ $product['name'] }}</p>
                            <p class="fw-light small text-muted">{{ $product['price'] }}</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
