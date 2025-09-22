@extends('frontend.partials.app')
@section('content')
<style>
    @media screen and (min-width: 1200px) {

        .intro-slider-container,
        .intro-slide {
            height: 296px !important;
        }
    }

</style>

<main class="main">
    <div class="intro-slider-container">
        <div class="owl-carousel owl-simple owl-light owl-nav-inside" data-toggle="owl"
            data-owl-options='{"nav": false}'>
            <div class="intro-slide"
                style="background-image: url('{{ asset('images/sliders/WhatsApp Image 2025-09-13 at 17.48.32 (1).jpeg') }}');">
                <div class="container intro-content">

                </div><!-- End .container intro-content -->
            </div><!-- End .intro-slide -->

            <div class="intro-slide"
                style="background-image: url('{{ asset('images/sliders/WhatsApp Image 2025-09-13 at 17.48.32 (1).jpeg') }}');">
                <div class="container intro-content">

                </div><!-- End .container intro-content -->
            </div><!-- End .intro-slide -->

            <div class="intro-slide"
                style="background-image: url('{{ asset('images/sliders/WhatsApp Image 2025-09-13 at 17.48.32 (1).jpeg') }}');">
                <div class="container intro-content">

                </div><!-- End .container intro-content -->
            </div><!-- End .intro-slide -->
        </div><!-- End .owl-carousel owl-simple -->

        <span class="slider-loader text-white"></span><!-- End .slider-loader -->
    </div><!-- End .intro-slider-container -->

    <div class="mb-3 mb-lg-5"></div><!-- End .mb-3 mb-lg-5 -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Minister Messages Left Column -->
            <div class="col-md-7 minister-messages">
                <div class="minister-row">
                    <div class="minister-photo">
                        <img src="https://dot.gov.in/sites/default/files/styles/150_150/public/Mr%20Scindia3.jpg?itok=bRZ_YU_p" alt="Minister of Communication">
                    </div>
                    <div class="minister-text">
                        <h5>Message from the Hon'ble Minister of Communications</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Donec vel nisl vel nulla scelerisque accumsan.</p>
                    </div>
                </div>

                <div class="minister-row">
                    <div class="minister-photo">
                        <img src="https://dot.gov.in/sites/default/files/styles/150_150/public/MoSC.jpg?itok=qanK5Se6" alt="Minister of State for Communications">
                    </div>
                    <div class="minister-text">
                        <h5>Message from the Hon'ble Minister of State for Communications</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Donec vel nisl vel nulla scelerisque accumsan.</p>
                    </div>
                </div>
            </div>

            <!-- Latest Updates Right Column -->
            <div class="col-md-5">
                <div class="latest-updates">
                    <h4>Latest Updates</h4>
                    <div class="updates-wrapper">
                        <div class="update-item">Update 1: Telecom policy revised for faster 5G rollout.</div>
                        <div class="update-item">Update 2: New broadband connectivity initiative launched in rural areas.</div>
                        <div class="update-item">Update 3: Mobile call drop rate reduced nationwide.</div>
                        <div class="update-item">Update 4: Department to organize awareness campaigns on digital literacy.</div>
                        <div class="update-item">Update 5: Fiber optic expansion completed in 200 villages.</div>
                        <!-- Repeat same updates to make smooth scroll -->
                        <div class="update-item">Update 1: Telecom policy revised for faster 5G rollout.</div>
                        <div class="update-item">Update 2: New broadband connectivity initiative launched in rural areas.</div>
                        <div class="update-item">Update 3: Mobile call drop rate reduced nationwide.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-3"></div><!-- End .mb-6 -->
</main>

@endsection
