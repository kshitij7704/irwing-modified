<header class="header header-2 header-intro-clearance">
    <style>
        @media screen and (min-width: 768px) {
            .desktop-logo {
                width: 24% !important;
            }
        }

        .activate {
            color: #64c474 !important;
        }

        .header-2 .sticky-header {
            background-color: #e67e22;
        }

        .menu li>a {
            color: black;

        }

    </style>
    <div class="header-top">
        <div class="container">
            <div class="header-left">
                <div class="d-flex align-items-center">
                    <a href="https://facebook.com" target="_blank" class="me-2 text-dark"><i
                            class="bi bi-facebook"></i></a>
                    <a href="https://twitter.com" target="_blank" class="me-2 text-dark"><i
                            class="bi bi-twitter"></i></a>
                    <a href="https://linkedin.com" target="_blank" class="me-2 text-dark"><i
                            class="bi bi-linkedin"></i></a>
                    <a href="https://instagram.com" target="_blank" class="me-2 text-dark"><i
                            class="bi bi-instagram"></i></a>
                </div>
            </div><!-- End .header-left -->

            <div class="header-right">

                <ul class="top-menu">
                    <li>
                        <a href="#">Links</a>
                        <ul>
                            <li>
                                <div class="header-dropdown">
                                    <a href="#">English</a>
                                    <div class="header-menu">
                                        <ul>
                                            <li><a href="#">English</a></li>
                                            <li><a href="#">French</a></li>
                                            <li><a href="#">Spanish</a></li>
                                        </ul>
                                    </div><!-- End .header-menu -->
                                </div>
                            </li>
                            <li>
                                @guest
                                <a href="{{ route('login') }}" class="btn btn-sm btn-outline-primary">Login</a>
                                @else
                                <div class="dropdown">
                                    <a class="dropdown-toggle text-dark text-decoration-none" href="#" role="button"
                                        id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
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
                                @endguest</li>
                        </ul>
                    </li>
                </ul><!-- End .top-menu -->
            </div><!-- End .header-right -->

        </div><!-- End .container -->
    </div><!-- End .header-top -->

    <div class="header-middle">
        <div class="container">
            <div class="header-left">
                <button class="mobile-menu-toggler">
                    <span class="sr-only">Toggle mobile menu</span>
                    <i class="icon-bars"></i>
                </button>
                <a href="{{url('/')}}" class="logo">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/55/Emblem_of_India.svg"
                        alt="India Emblem" height="60" class="me-2" class="desktop-logo" style="width: 10%;">
                    <!-- <img src="{{asset('images/WhatsApp Image 2025-07-22 at 19.56.01.jpeg')}}" alt="Molla Logo"
                        width="105" height="25" class="desktop-logo"> -->
                </a>
            </div>
            <div class="header-center">
                <div
                    class="header-search header-search-extended header-search-visible header-search-no-radius d-none d-lg-block ">
                    <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                    <h3>IR Wing Portal</h3>
                    <h5 style="font-size: 1.8rem !important;">Department of Telecommunications, Ministry of
                        Communications</h5>
                </div>
            </div>
            <div class="header-right text-end">
                <a href="{{ url('/') }}" class="logo" style="    padding-left: 219px;
">
                    <img src="{{('images/WhatsApp Image 2025-09-13 at 17.48.33.jpeg')}}" alt="India Emblem" height="60"
                        style="width: 10%;">
                </a>
            </div>

        </div>
    </div>
    <div class="header-bottom sticky-header">
        <div class="container" style="position: static;">

            <div class="header-center">
                <nav class="main-nav">
                    <ul class="menu sf-arrows">
                        <li class="megamenu-container {{ request()->is('/') ? 'active' : '' }}">
                            <a href="{{ url('/') }}" style="font-size: 20px !important;">Home</a>
                        </li>
                        <li>
                            <a href="#" class="sf-with-ul" style="font-size: 20px !important;">About</a>
                            <ul>
                                <li>
                                    <a href="{{ url('message') }}">Message from Hon’ble MoC</a>
                                </li>
                                <li>
                                    <a href="{{ url('role-ir') }}">Role of IR Wing</a>
                                </li>
                                <li><a href="{{url('structure')}}">Structure</a></li>
                                <li><a href="{{url('contact-us')}}">Contact Us</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="sf-with-ul" style="font-size: 20px !important;">Information</a>
                            <ul>
                                <li>
                                    <a href="{{url('promotional-videos')}}">Promotional Videos</a>
                                </li>
                                <li>
                                    <a href="{{url('brouches')}}">Brochures</a>
                                </li>
                                <li>
                                    <a href="{{url('pressrelease')}}">Press Releases</a>
                                </li>
                                <li>
                                    <a href="{{url('social-media')}}">Social Media</a>
                                </li>
                                <li>
                                    <a href="{{url('orms')}}">IR Wing OMs</a>
                                </li>
                                <li>
                                    <a href="{{url('achivements')}}">Achievements</a>
                                </li>
                                <li>
                                    <a href="{{url('internation-forums')}}">International Forums</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>

            </div>

        </div>
    </div>
</header>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const input = document.getElementById('product-search');
        const resultList = document.getElementById('search-results');

        input.addEventListener('input', function () {
            const query = input.value;

            if (query.length < 3) {
                resultList.style.display = 'none';
                resultList.innerHTML = '';
                return;
            }

            fetch(`/search-suggestions?q=${query}`)
                .then(response => response.json())
                .then(data => {
                    resultList.innerHTML = '';
                    if (data.length > 0) {
                        data.forEach(product => {
                            const li = document.createElement('li');
                            li.classList.add('list-group-item', 'list-group-item-action');
                            li.textContent = product.name;
                            li.style.cursor = 'pointer';
                            li.onclick = () => {
                                window.location.href =
                                    `/shop-product-detail/${product.id}`;
                            };
                            resultList.appendChild(li);
                        });
                        resultList.style.display = 'block';
                    } else {
                        resultList.style.display = 'none';
                    }
                });
        });

        document.addEventListener('click', function (e) {
            if (!input.contains(e.target) && !resultList.contains(e.target)) {
                resultList.style.display = 'none';
            }
        });
    });

</script>
