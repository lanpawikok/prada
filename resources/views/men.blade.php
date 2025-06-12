    @extends('layouts.app')

    @section('title', 'Men - Ready to Wear')

    @section('content')
    @php
        $products = [
            [
                'name' => 'Cotton jacket',
                'price' => '$3,600',
                'slug' => 're-nylon-hooded-blouson',
                'image' => 'https://www.prada.com/content/dam/pradabkg_products/S/SGC/SGC875/17NVF0008/SGC875_17NV_F0008_S_OOO_SLF.jpg/_jcr_content/renditions/cq5dam.web.hebebed.2000.2000.jpg'
            ],
            [
                'name' => 'Re-Nylon bomber jacket',
                'price' => '$2,350',
                'slug' => 're-nylon-bomber-jacket',
                'image' => 'https://www.prada.com/content/dam/pradabkg_products/S/SGC/SGC629/1480F0192/SGC629_1480_F0192_S_OOO_SLF.jpg/_jcr_content/renditions/cq5dam.web.hebebed.1680.1680.jpg'
            ],
            [
                'name' => 'Re-Nylon coat',
                'price' => '$2,650',
                'slug' => 'technical-gabardine-trench-coat',
                'image' => 'https://www.prada.com/content/dam/pradabkg_products/S/SGC/SGC745/1WQ8F0002/SGC745_1WQ8_F0002_S_OOO_SLF.jpg/_jcr_content/renditions/cq5dam.web.hebebed.1680.1680.jpg'
            ],
            [
                'name' => 'Single-breasted cotton coat',
                'price' => '$4,900',
                'slug' => 're-nylon-puffer-jacket',
                'image' => 'https://www.prada.com/content/dam/pradabkg_products/U/UC5/UC525D/16L5F0002/UC525D_16L5_F0002_S_OOO_SLF.jpg/_jcr_content/renditions/cq5dam.web.hebebed.2000.2000.jpg'
            ],
        ];
    @endphp

    <div class="container py-5">
        <h1 class="text-uppercase mb-4">Ready To Wear</h1>

        <!-- Filters -->
        <div class="d-flex flex-wrap gap-3 mb-4">
            <button class="btn btn-outline-dark btn-sm rounded-0">New Arrivals</button>
            <button class="btn btn-outline-dark btn-sm rounded-0">Outerwear</button>
            <button class="btn btn-outline-dark btn-sm rounded-0">Blazers</button>
            <button class="btn btn-outline-dark btn-sm rounded-0">Pants</button>
            <button class="btn btn-outline-dark btn-sm rounded-0">Shirts</button>
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
