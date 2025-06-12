@extends('layouts.app')

@section('title', 'Bags - Prada Galleria')

@section('content')
@php
    $bags = [
        [
            'name' => 'Prada Galleria Saffiano leather bag',
            'price' => '$4,600',
            'slug' => 'prada-galleria-saffiano-leather-bag',
            'image' => 'https://www.prada.com/content/dam/pradanux/e-commerce/2025/05/Rotation_May_Issue/Essentials/Cross_category/galleria.jpg',
        ],
        [
            'name' => 'Medium Prada Galleria leather bag',
            'price' => '$5,100',
            'slug' => 'medium-prada-galleria-bag',
            'image' => 'https://www.prada.com/content/dam/pradanux/e-commerce/2025/04/May_Issue/Woman/Essentials/Cross_category/summer_bags_3.jpg',
        ],
        [
            'name' => 'Mini Prada Galleria leather bag',
            'price' => '$3,950',
            'slug' => 'mini-prada-galleria-bag',
            'image' => 'https://www.prada.com/content/dam/pradanux/e-commerce/2025/05/Rotation_May_Issue/Essentials/Cross_category/bonnie.jpg',
        ],
    ];
@endphp

<div class="container py-5">
    <h1 class="text-uppercase mb-4">Bags - Prada Galleria</h1>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($bags as $bag)
            <div class="col">
                <a href="{{ route('product', ['slug' => $bag['slug']]) }}" class="text-decoration-none text-dark">
                    <div class="card border-0">
                        <img src="{{ $bag['image'] }}" class="card-img-top" alt="{{ $bag['name'] }}">
                        <div class="card-body px-0">
                            <p class="mb-1 small">{{ $bag['name'] }}</p>
                            <p class="fw-light small text-muted">{{ $bag['price'] }}</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
