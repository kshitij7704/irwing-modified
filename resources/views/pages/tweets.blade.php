@extends('frontend.partials.app')

@section('content')

<style>
    .social-grid-container {
        display: grid;
        grid-template-columns: repeat(3, 1fr); /* always 3 columns on desktop */
        gap: 20px;
        padding: 20px;
    }

    @media (max-width: 991px) {
        .social-grid-container {
            grid-template-columns: repeat(2, 1fr); /* 2 columns tablet */
        }
    }

    @media (max-width: 575px) {
        .social-grid-container {
            grid-template-columns: 1fr; /* 1 column phone */
        }
    }

    .social-card {
        width: 100%;
        height: 480px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        box-sizing: border-box;
        border: 1px solid #ddd;
        border-radius: 6px;
        padding: 20px;
        text-align: center;
        background: #fff;
    }

    .social-card iframe {
        width: 320px;
        height: 480px;
    }

    .btn-social {
        display: inline-block;
        padding: 10px 18px;
        margin-top: 10px;
        border-radius: 4px;
        font-weight: bold;
        text-decoration: none;
        color: #fff;
    }

    .btn-linkedin {
        background-color: #0073b1;
    }

    .btn-twitter {
        background-color: #1DA1F2;
    }

    .account-title {
        font-weight: bold;
        color: #1DA1F2;
        margin-bottom: 5px;
    }

    .account-desc {
        color: #555;
        margin-bottom: 10px;
    }

    .stats {
        color: #000;
        margin-bottom: 5px;
    }

</style>

<main class="main">
    <div class="page-header text-center" style="background-image: url('front/assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">Social Media</h1>
        </div>
    </div>

    <div class="social-grid-container">
        <!-- Instagram Embed -->
        <div class="social-card">
            <iframe src="https://www.instagram.com/department_of_telecom/embed" frameborder="0" scrolling="no"></iframe>
        </div>

        <!-- Facebook Page Plugin -->
        <div class="social-card">
            <iframe
                src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FDoTIndia&tabs=timeline&width=320&height=480&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true"
                style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true"
                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
        </div>

        <!-- YouTube Video Embed -->
        <div class="social-card">
            <iframe src="https://www.youtube.com/embed/oEvEcF0PZVc" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>

        <!-- LinkedIn Manual Card -->
        <div class="social-card">
            <div class="account-title">Department of Telecommunications (DOT)</div>
            <div class="stats">5,721 Followers</div>
            <div class="account-desc">
                Official LinkedIn Handle of Department of Telecommunications, Govt. of India.
            </div>
            <a href="https://www.linkedin.com/company/department-of-telecommunications-dot-" target="_blank"
               class="btn-social btn-linkedin">Follow Us on LinkedIn</a>
            <a href="http://www.dot.gov.in" target="_blank"
               class="btn-social btn-linkedin" style="background:#555;">View our Website</a>
        </div>

        <!-- Twitter Manual Card -->
        <div class="social-card">
            <div class="account-title">@DoT_India</div>
            <div class="stats"><strong>290,271</strong> Posts &nbsp; | &nbsp; <strong>202,496</strong> Followers &nbsp; | &nbsp; <strong>170</strong> Following</div>
            <div class="account-desc">
                DoT India – Official Twitter Handle of Department of Telecommunications, Govt. of India.
            </div>
            <a href="https://twitter.com/DoT_India" target="_blank"
               class="btn-social btn-twitter">Follow on Twitter</a>
            <a href="http://www.dot.gov.in" target="_blank"
               class="btn-social btn-twitter" style="background:#555;">Visit Website</a>
        </div>
    </div>
</main>

@endsection
