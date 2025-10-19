<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department of Telecommunications</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .govt-header {
            background: #f8f9fa;
            border-bottom: 2px solid #ddd;
            padding: 8px 0;
        }

        .orange-navbar {
            background: #e67e22;
        }

        .orange-navbar .nav-link,
        .orange-navbar .navbar-brand {
            color: #fff !important;
        }

        .ticker {
            background: #f4c542;
            padding: 8px 15px;
            font-weight: bold;
        }

    </style>
</head>

<body>
    <div class="bg-light border-bottom py-1">
        <div class="container d-flex justify-content-between align-items-center">
            <!-- Left: Social Links -->
            <div class="d-flex align-items-center">
                <a href="https://facebook.com" target="_blank" class="me-2 text-dark"><i class="bi bi-facebook"></i></a>
                <a href="https://twitter.com" target="_blank" class="me-2 text-dark"><i class="bi bi-twitter"></i></a>
                <a href="https://linkedin.com" target="_blank" class="me-2 text-dark"><i class="bi bi-linkedin"></i></a>
                <a href="https://instagram.com" target="_blank" class="me-2 text-dark"><i
                        class="bi bi-instagram"></i></a>
            </div>

            <!-- Right: Language + Login -->
            <div class="d-flex align-items-center">
                <!-- Language Dropdown -->
                <div class="dropdown me-3">
                    <a class="dropdown-toggle text-dark text-decoration-none" href="#" role="button" id="langDropdown"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        🌐 Language
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="langDropdown">
                        <li><a class="dropdown-item" href="?lang=en">English</a></li>
                        <li><a class="dropdown-item" href="?lang=hi">हिंदी</a></li>
                        <li><a class="dropdown-item" href="?lang=fr">Français</a></li>
                    </ul>
                </div>

                <!-- Login / User -->
                @guest
                <a href="{{ route('login') }}" class="btn btn-sm btn-outline-primary">Login</a>
                @else
                <div class="dropdown">
                    <a class="dropdown-toggle text-dark text-decoration-none" href="#" role="button" id="userDropdown"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        👤 {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
                @endguest
            </div>
        </div>
    </div>
    {{-- Header --}}
    <div class="govt-header text-center">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <strong>भारत सरकार | GOVERNMENT OF INDIA</strong><br>
                    <small>संचार मंत्रालय | MINISTRY OF COMMUNICATIONS</small>
                    <small>Internation Relations</small>
                </div>
                <div>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/55/Emblem_of_India.svg"
                        alt="India Emblem" height="60">
                </div>
                <div>
                    <strong>दूरसंचार विभाग</strong><br>
                    <small>DEPARTMENT OF TELECOMMUNICATIONS</small>
                </div>
            </div>
        </div>
    </div>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg orange-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">DoT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Telecom Policies</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Policy 1</a></li>
                            <li><a class="dropdown-item" href="#">Policy 2</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Information</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Promotional Videos
                                </a></li>
                            <li><a class="dropdown-item" href="#">Brochures
                                </a></li>
                            <li><a class="dropdown-item" href="#">Press Releases
                                </a></li>
                            <li><a class="dropdown-item" href="#">Tweets
                                </a></li>
                            <li><a class="dropdown-item" href="#">IR Wing OMs
                                </a></li>
                            <li><a class="dropdown-item" href="#">Achievements

                                </a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">About</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Message from Hon’ble MoC
                                </a></li>
                            <li><a class="dropdown-item" href="#">Role of IR Wing
                                </a></li>
                            <li><a class="dropdown-item" href="#">Structure
                                </a></li>
                            <li><a class="dropdown-item" href="#">Contact Us
                                </a></li>
                        </ul>

                    </li>

                    <li class="nav-item"><a class="nav-link" href="#">DoT Portals</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Useful Links</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Media</a></li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Hero Carousel --}}
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://dot.gov.in/sites/default/files/Screenshot%202025-07-28%20120331.png"
                    class="d-block w-100" alt="Banner">
            </div>
            <div class="carousel-item">
                <img src="https://dot.gov.in/sites/default/files/SancharSathiAppBanner3.jpg" class="d-block w-100"
                    alt="Banner">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    {{-- What's New --}}
    <div class="ticker">
        Notice for inviting public comments for extended 30 days period...
    </div><!-- Footer -->
    <!-- Footer -->
    <footer class="bg-dark text-light pt-4">
        <div class="container">
            <div class="row align-items-center">

                <!-- Left: Emblem + Govt Text -->
                <div class="col-md-4 text-center text-md-start mb-3 mb-md-0">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/55/Emblem_of_India.svg"
                        alt="India Emblem" height="50" class="me-2">
                    <div class="d-inline-block align-middle">
                        <strong>भारत सरकार | GOVERNMENT OF INDIA</strong><br>
                        <small>संचार मंत्रालय | MINISTRY OF COMMUNICATIONS</small>
                    </div>
                </div>

                <!-- Center: Social Icons -->
                <div class="col-md-4 text-center mb-3 mb-md-0">
                    <a href="https://facebook.com" target="_blank" class="text-light me-3"><i
                            class="bi bi-facebook fs-5"></i></a>
                    <a href="https://twitter.com" target="_blank" class="text-light me-3"><i
                            class="bi bi-twitter fs-5"></i></a>
                    <a href="https://linkedin.com" target="_blank" class="text-light me-3"><i
                            class="bi bi-linkedin fs-5"></i></a>
                    <a href="https://instagram.com" target="_blank" class="text-light"><i
                            class="bi bi-instagram fs-5"></i></a>
                </div>

                <!-- Right: Rights Reserved -->
                <div class="col-md-4 text-center text-md-end">
                    <small>&copy; {{ date('Y') }} Department of Telecommunications. All Rights Reserved.</small>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Icons (if not already included) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">


    <!-- Bootstrap Icons CDN (if not already included) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
