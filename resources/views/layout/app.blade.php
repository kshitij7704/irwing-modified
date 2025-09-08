<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>The Best Chatbot Services, Equiped with AI, IOT & Machine Learning: AILifeBOT</title>
    <!-- Favicons -->
    <link href="{{ asset('assets/img/fav.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    @if(!empty($seo))
        {{-- Meta --}}

        <meta name="title" content="{{$seo->meta_title}}"/>
        <meta name="description" content="{{$seo->meta_description}}"/>
        @if(!empty($seo->meta_keywords))
            <meta name="keywords" content="{{ $seo->meta_keywords }}">
        @endif
        @if(!empty($seo->canonical_url))
            <link rel="canonical" href="{{ $seo->canonical_url }}">
        @else
            <link rel="canonical" href="{{ url()->current() }}">
        @endif

        {{-- Open Graph --}}
        <meta property="og:title" content="{{ $seo->og_title ?? $seo->og_title ?? '' }}" />
        <meta property="og:description" content="{{ $seo->og_description ?? $seo->og_description ?? '' }}" />
        @if(!empty($seo->og_image))
            <meta property="og:image" content="{{ asset('storage/' . $seo->og_image) }}" />
        @endif

        {{-- Twitter --}}
        <meta name="twitter:title" content="{{ $seo->twitter_title ?? $seo->twitter_title ?? '' }}">
        <meta name="twitter:description" content="{{ $seo->twitter_description ?? $seo->twitter_description ?? '' }}">
        {!! $seo->meta_data !!}
        @if(!empty($seo->twitter_image))
            <meta name="twitter:image" content="{{ asset('storage/' . $seo->twitter_image) }}">
        @endif

        {{-- JSON-LD Schema --}}
        @if(!empty($seo->json_ld))
            <script type="application/ld+json">
                {!! $seo->json_ld !!}
            </script>
        @endif
    @elseif(isset($blog))
        <meta name="title" content="{{$blog->meta_title}}"/>
        <meta name="description" content="{{$blog->meta_description}}"/>
        <meta name="keywords" content="{{ $blog->meta_keywords }}">
        {!! $blog->meta_data !!}
            <script type="application/ld+json">
                {!! $blog->json_ld !!}
            </script>

    @else
        {{-- Default SEO fallback --}}
        <meta name="description" content="">
        <meta name="keywords" content="Chatbot in Delhi NCR, Best Chatbots in Delhi NCR, Chatbot Company in Noida, Chatbot Services in Noida, Chatbot in Delhi NCR, Customer Chatbot in Noida, Chatbot in Delhi, Customer Chatbot in Delhi, Customer Chatbot in Delhi NCR, Customer Chatbot in Mumbai, NLP Chatbot in Noida, NLP Chatbot in Delhi, NLP Chatbot in Delhi NCR, AI Chatbot Best Chat BOT in Noida, AI Chatbot Best Chat BOT in Delhi, AI Chatbot Best Chat BOT in Delhi NCR, Buy Chat BOT in Noida, Buy Chat BOT in Delhi, Buy Chat BOT in Delhi NCR, IT Helpdesk Chatbot in Noida, IT Helpdesk Chatbot in Delhi, IT Helpdesk Chatbot in Delhi NCR, IT Helpdesk BOT in Noida, IT Helpdesk BOT in Delhi, IT Helpdesk BOT in Delhi NCR, Customer Support BOT in Noida, Customer Support BOT in Delhi, Customer Support BOT in Delhi NCR, Customer Service BOT in Noida, Customer Service BOT in Delhi, Customer Service BOT in Delhi NCR, Robotic Process Automation Chatbot Company in Noida, Robotic Process Automation Chatbot Company in Delhi NCR, Lead Generation Chatbot Company in Noida, Lead Generation Chatbot Company in Delhi, Lead Generation Chatbot Company in Delhi NCR, Best Voice Based Chatbot Company in Delhi NCR, Best Voice Based Chatbot Company in Mumbai, Best Voice Based Chatbot Company in Noida, Best Voicebot Provider in Mumbai, Best Voice Bot Service Provider in Mumbai, Chatbot Company in Delhi NCR, Chatbot Company in Noida, Chatbot Company in Mumbai, Chatbot Company in Noida, Voice Based Chatbot Company in Noida, Voice Bot Provider in Mumbai, Voice Bot Service Provider in Delhi, Voice Bot Service Provider in Mumbai, Voice Bot Service Provider in Noida, Best Voice Based Chatbot Company in Delhi, Best Voice Based Chatbot Company in Delhi NCR, Best Voice Bot Providers in Delhi NCR, Best Voice Bot Providers in Delhi, Best Voice Bot Providers in Mumbai, Best Voice Bot Service Provider in Delhi, Best Voice Bot Service Provider in Delhi NCR, Best Voice Bot Service Provider in Noida, Best Voice Chat Bot Provider in Delhi, Best Voice Chat Bot Provider in Delhi NCR, Voice Bot Providers in Delhi, Voice Bot Providers in Noida, Voice Chat Bot Provider in Delhi, Chatbot Development Company in Noida, Artificial Intelligence Chatbot Companies in Delhi, Best Voice Bot Providers in Noida, Whatsapp Chat Bot Provider in Noida, Chatbot for hospital in Delhi NCR, ChatBOT for Schools in Noida, ChatBOT for Law firm Delhi NCR, ChatBOT for Manufacturing company in Noida, ChatBOT for customer service in Noida, ChatBOT for operations in Delhi NCR, ChatBOT for IVF Clinics in Noida, ChatBOT for Govt in Noida, ChatBOT for Healthcare in Delhi NCR, Whatsapp for Business API in Noida, Whatsapp FAQ API in Delhi, Whatsapp Documents API in Delhi NCR, Whatsapp Cloud API in Noida, Whatsapp Business API Documentation in Delhi, Official Whatsapp API in Noida, Whatsapp API for Android in Delhi NCR, Whatsapp with API in Delhi, Whatsapp API Python in Delhi NCR, Cloud API Whatsapp in Delhi, Send Whatsapp API in Delhi NCR, PHP Whatsapp API in Noida, Voice Bot in Delhi NCR, Amazon Voice Bot in Delhi, Voice Bot online in Delhi NCR, Voice Bots and Chatbots in Delhi, Bot Voice Reader in Noida, AI powered voice bot in banking in Delhi, Customer care voice bot in Delhi NCR, Voice Based Bots in Delhi, Voice Bot Customer Service in Noida, Voice Bot For English in Noida, Voice AI chatbot in Delhi NCR, Chatbot for banks in Noida, Chatbot for real estate in Delhi NCR, Chatbot for finance in Delhi NCR, Chatbots for education Delhi NCR">
    @endif



    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    
    <script src="{{ asset('assets/js/main.v2.js') }}" defer></script>
</head>

<body class="index-page">
    @include('components.header')
    @yield('content')
    @include('components.footer')
    @include('components.service-modal')
    @if(!empty($seo) && !empty($seo->json_ld))
        <script type="application/ld+json">
            {!! $seo->json_ld !!}
        </script>
    @endif
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}" defer></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/lead-form.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('my-form');
        if (form) {
            // Only combine country code and phone before submit
            form.addEventListener('submit', function(e) {
                const code = form.querySelector('[name=country_code]').value;
                const number = form.querySelector('[name=phone]').value;
                form.querySelector('[name=phone]').value = code + number;
            }, { once: true });
        }
    });
    </script>
</body>

</html>
