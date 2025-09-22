<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>International Relations - Department of Telecommunications</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .govt-header {
            background: #f8f9fa;
            border-bottom: 2px solid #ddd;
            /* padding: 10px 0; */
        }
      @media (min-width: 768px) {
          .col-md-3 {
              flex: 0 0 auto;
              width: 13% !important;
          }
      }
        .brics-box {
            border: 2px solid #000;
            padding: 5px 10px;
            text-align: center;
            font-weight: bold;
        }

        .orange-navbar {
            background: #e67e22;
        }

        .orange-navbar .nav-link {
            color: #fff !important;
        }

        .minister-photo {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
            background: #f9f9f9;
        }

        footer {
            background: #222;
            color: #fff;
            padding: 15px 0;
            text-align: center;
            margin-top: 40px;
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
    <!-- Header -->
    <div class="govt-header">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="text-start">
                <strong>भारत सरकार</strong><br>
                Government of India<br>
            </div>
            <div class="text-center"><br>
                <strong>संचार मंत्रालय </strong><br> Ministry of Communications
            </div>
            <div class="text-end">
                <strong>दूरसंचार विभाग</strong><br>
                Department of Telecommunications
            </div>
        </div>
    </div>
    <div class="govt-header">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="text-start">
                <div class="d-flex align-items-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/55/Emblem_of_India.svg"
                        alt="India Emblem" height="60" class="me-2">
                    <div>
                        <strong class="mt-2">अंतर्राष्ट्रीय संबंध</strong><br>International Relations
                    </div>
                </div>
            </div>
            <div class="text-end">
                <div class="brics-box mt-2">BRICS<br>India<br>2026</div>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg orange-navbar">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">About</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Message from Hon’ble MoC</a></li>
                            <li><a class="dropdown-item" href="#">Role of IR Wing</a></li>
                            <li><a class="dropdown-item" href="#">Structure</a></li>
                            <li><a class="dropdown-item" href="#">Contact Us</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Information</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Promotional Videos</a></li>
                            <li><a class="dropdown-item" href="#">Brochures</a></li>
                            <li><a class="dropdown-item" href="#">Press Releases</a></li>
                            <li><a class="dropdown-item" href="#">Tweets</a></li>
                            <li><a class="dropdown-item" href="#">IR Wing OMs</a></li>
                            <li><a class="dropdown-item" href="#">Achievements</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Banner -->
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

    <!-- Messages -->
    <div class="container my-4">
        <div class="row mb-4">
            <div class="col-md-3 minister-photo">
                <img src="https://dot.gov.in/sites/default/files/styles/150_150/public/Mr%20Scindia3.jpg?itok=bRZ_YU_p" class="d-block w-100" alt="Banner" height="150" width="150">
            </div>
            <div class="col-md-9">
                <h5>Message from the Hon'ble Minister of Communications</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Donec vel nisl vel nulla
                    scelerisque accumsan.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 minister-photo">
                <img src="https://dot.gov.in/sites/default/files/styles/150_150/public/MoSC.jpg?itok=qanK5Se6" class="d-block w-100" alt="Banner" height="150" width="150">
            </div>
            <div class="col-md-9">
                <h5>Message from the Hon'ble Minister of State for Communications</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Donec vel nisl vel nulla
                    scelerisque accumsan.</p>
            </div>
        </div>
    </div>

    <!-- Latest Updates -->
    <div class="container my-5">
        <h4>Latest Updates</h4>
        <ul>
            <li>Update 1 goes here</li>
            <li>Update 2 goes here</li>
            <li>Update 3 goes here</li>
        </ul>
    </div>

    <!-- Footer -->
    <footer>
        <p>© 2025 Department of Telecommunications. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
