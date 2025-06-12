<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Prada')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: sans-serif;
            text-transform: uppercase;
        }
        .hero-text {
            position: absolute;
            top: 5%;
            left: 5%;
            color: white;
            max-width: 600px;
        }
    </style>
</head>
<body class="bg-white text-black">

  <!-- Navbar -->
<header class="border-bottom py-3">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="fs-3 fw-bold">PRADA</div>
        <nav class="d-none d-md-block">
            <a href="{{ route('women') }}" class="text-decoration-none text-dark me-4 {{ request()->is('women') ? 'fw-bold' : '' }}">Women</a>
            <a href="{{ route('men') }}" class="text-decoration-none text-dark me-4 {{ request()->is('men') ? 'fw-bold' : '' }}">Men</a>
            <a href="{{ route('bags') }}" class="text-decoration-none text-dark me-4 {{ request()->is('bags') ? 'fw-bold' : '' }}">Bags</a>
        </nav>
    </div>
</header>


    <!-- Content -->
    @yield('content')

    <!-- Footer -->
    <footer class="border-top pt-5 pb-3 text-uppercase small bg-white">
        <div class="container">
            <div class="row row-cols-2 row-cols-md-4 g-4">
                <div>
                    <h5 class="fw-semibold">Customer Care</h5>
                    <ul class="list-unstyled mt-3">
                        <li><a href="#" class="text-decoration-none text-dark d-block">Contact Us</a></li>
                        <li><a href="#" class="text-decoration-none text-dark d-block">Shipping</a></li>
                        <li><a href="#" class="text-decoration-none text-dark d-block">Returns</a></li>
                        <li><a href="#" class="text-decoration-none text-dark d-block">FAQs</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="fw-semibold">Company</h5>
                    <ul class="list-unstyled mt-3">
                        <li><a href="#" class="text-decoration-none text-dark d-block">About Prada</a></li>
                        <li><a href="#" class="text-decoration-none text-dark d-block">Sustainability</a></li>
                        <li><a href="#" class="text-decoration-none text-dark d-block">Careers</a></li>
                        <li><a href="#" class="text-decoration-none text-dark d-block">Store Locator</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="fw-semibold">Legal</h5>
                    <ul class="list-unstyled mt-3">
                        <li><a href="#" class="text-decoration-none text-dark d-block">Privacy Policy</a></li>
                        <li><a href="#" class="text-decoration-none text-dark d-block">Terms & Conditions</a></li>
                        <li><a href="#" class="text-decoration-none text-dark d-block">Cookie Policy</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="fw-semibold">Follow Us</h5>
                    <ul class="list-unstyled mt-3">
                        <li><a href="#" class="text-decoration-none text-dark d-block">Instagram</a></li>
                        <li><a href="#" class="text-decoration-none text-dark d-block">Facebook</a></li>
                        <li><a href="#" class="text-decoration-none text-dark d-block">YouTube</a></li>
                        <li><a href="#" class="text-decoration-none text-dark d-block">Newsletter</a></li>
                    </ul>
                </div>
            </div>

            <div class="text-center text-muted pt-4 border-top mt-4">
                &copy; 2025 Prada Inspired. Maulana Please Improve Me.
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
