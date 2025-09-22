@extends('frontend.partials.app')

@section('content')

<style>
    .tweet-container {
        max-width: 900px;
        margin: 20px auto;
    }

    .tweet-card {
        display: flex;
        padding: 15px;
        border: 1px solid #e1e8ed;
        border-radius: 15px;
        margin-bottom: 20px;
        background-color: #fff;
        transition: box-shadow 0.2s;
    }

    .tweet-card:hover {
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .tweet-avatar {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        margin-right: 15px;
        flex-shrink: 0;
        background-color: #1da1f2;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: bold;
        font-size: 1.2rem;
    }

    .tweet-content {
        flex: 1;
    }

    .tweet-author {
        font-weight: 700;
        color: #1da1f2;
        margin-right: 5px;
    }

    .tweet-handle {
        color: #657786;
        margin-right: 5px;
    }

    .tweet-date {
        color: #657786;
        font-size: 0.85rem;
    }

    .tweet-text {
        margin: 5px 0 10px 0;
        font-size: 1rem;
    }

    .tweet-footer a {
        color: #1da1f2;
        text-decoration: none;
        font-weight: 600;
    }

    @media screen and (max-width: 576px) {
        .tweet-card {
            flex-direction: column;
            align-items: flex-start;
        }
        .tweet-avatar {
            margin-bottom: 10px;
        }
    }
</style>

<main class="main">
    <div class="page-header text-center" style="background-image: url('front/assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">Tweets</h1>
        </div>
    </div>

    <div class="page-content tweet-container">

        <!-- Sample Tweet -->
        <div class="tweet-card">
            <div class="tweet-avatar">DOT</div>
            <div class="tweet-content">
                <div>
                    <span class="tweet-author">Department of Telecom</span>
                    <span class="tweet-handle">@DoT_India</span>
                    <span class="tweet-date">· Sep 10, 2025</span>
                </div>
                <div class="tweet-text">
                    We are excited to announce the successful launch of the 5G pilot project in major urban areas. #5G #DigitalIndia
                </div>
                <div class="tweet-footer">
                    <a href="https://twitter.com/DoT_India/status/1234567890" target="_blank">View on Twitter</a>
                </div>
            </div>
        </div>

        <div class="tweet-card">
            <div class="tweet-avatar">DOT</div>
            <div class="tweet-content">
                <div>
                    <span class="tweet-author">Department of Telecom</span>
                    <span class="tweet-handle">@DoT_India</span>
                    <span class="tweet-date">· Sep 05, 2025</span>
                </div>
                <div class="tweet-text">
                    Our Rural Connectivity Program has reached over 1,000 villages, providing high-speed internet access to citizens nationwide. #ConnectivityForAll
                </div>
                <div class="tweet-footer">
                    <a href="https://twitter.com/DoT_India/status/1234567891" target="_blank">View on Twitter</a>
                </div>
            </div>
        </div>

        <div class="tweet-card">
            <div class="tweet-avatar">DOT</div>
            <div class="tweet-content">
                <div>
                    <span class="tweet-author">Department of Telecom</span>
                    <span class="tweet-handle">@DoT_India</span>
                    <span class="tweet-date">· Aug 30, 2025</span>
                </div>
                <div class="tweet-text">
                    The department is recognized nationally for improving telecom accessibility in rural areas. #TelecomAwards
                </div>
                <div class="tweet-footer">
                    <a href="https://twitter.com/DoT_India/status/1234567892" target="_blank">View on Twitter</a>
                </div>
            </div>
        </div>

    </div>
</main>

@endsection
