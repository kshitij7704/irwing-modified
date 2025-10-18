    <!-- Indian Flag Gradient Bar -->
    <div style="width: 100%; height: 8px; background: linear-gradient(to right, #FF9933 0%, #FF9933 33%, #FFFFFF 33%, #FFFFFF 66%, #138808 66%, #138808 100%); position: fixed; top: 0; left: 0; right: 0; z-index: 9999; box-shadow: 0 2px 4px rgba(0,0,0,0.1); display: block;"></div>

    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container mobile-menu-light">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close d-flex justify-content-between align-items-center w-100">@auth
                <span style="padding-left: 30px;">!Hi {{Auth::user()->name}}</span>
                @else
                <span style="padding-left: 30px;">Login for more details</span>
                @endauth
                <i class="icon-close"></i>
            </span>
            <form action="#" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="mobile-search" id="mobile-search"
                    placeholder="Search product ..." required>
                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
            </form>

            <ul class="nav nav-pills-mobile nav-border-anim" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="mobile-menu-link" data-toggle="tab" href="#mobile-menu-tab"
                        role="tab" aria-controls="mobile-menu-tab" aria-selected="true">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="mobile-cats-link" data-toggle="tab" href="#mobile-cats-tab" role="tab"
                        aria-controls="mobile-cats-tab" aria-selected="false">Categories</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="mobile-menu-tab" role="tabpanel"
                    aria-labelledby="mobile-menu-link">
                    <nav class="mobile-nav">
                        <ul class="mobile-menu">
                            <li class="active">
                                <a href="{{url('/')}}">Home</a>

                            </li>
                            <li>
                                <a href="{{url('shop')}}">Shop</a>
                            </li>
                            <li>
                                <a href="#">Pages</a>
                                <ul>
                                    <li>
                                        <a href="{{url('about')}}">About</a>
                                    </li>
                                    <li>
                                        <a href="{{url('contact_us')}}">Contact</a>
                                    </li>
                                    <li><a href="{{url('login')}}">Login</a></li>
                                    <li><a href="{{url('faq')}}">FAQs</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{url('blogs')}}">Blog</a>

                            </li>
                            <li>
                                <a href="{{url('blogs')}}">Orders</a>
                            </li>
                            <li>
                                <a href="{{url('blogs')}}">Addresses</a>
                            </li>
                            <li>
                                <a href="{{url('blogs')}}">Wallet</a>
                            </li>
                            <li>@auth
                                <form method="POST" action="{{ route('logout') }}" id="logout-form">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger d-flex align-items-center"
                                        style="width: 100%;">
                                        <small class="align-middle">Log Out</small>
                                        <i class="icon-base ti tabler-logout ms-2 icon-14px"></i>
                                    </button>
                                </form>
                                @else

                                    <ul class="nav nav-pills-mobile nav-border-anim">
                                        <li class="nav-item">
                                            <a class="nav-link " id="mobile-menu-link"  href="#"
                                                role="tab" >login</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="mobile-cats-link"  href="#"
                                                >Register</a>
                                        </li>
                                    </ul>

                                @endauth



                            </li>
                        </ul>
                    </nav><!-- End .mobile-nav -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane fade" id="mobile-cats-tab" role="tabpanel" aria-labelledby="mobile-cats-link">
                    <nav class="mobile-cats-nav">
                        <ul class="mobile-cats-menu">
                            <li class="mobile-cats-lead"><a href="{{url('category/tshirts')}}">Tshirts</a></li>


                        </ul><!-- End .mobile-cats-menu -->
                    </nav><!-- End .mobile-cats-nav -->
                </div><!-- .End .tab-pane -->
            </div><!-- End .tab-content -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->
