@extends('frontend.partials.app')

@section('content')

<style>
    .contact-section {
        max-width: 1000px;
        margin: 40px auto;
        padding: 20px;
    }

    .contact-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .contact-header h1 {
        font-weight: 700;
        color: #0d6efd;
    }

    .contact-container {
        display: flex;
        flex-wrap: wrap;
        gap: 30px;
    }

    .contact-form, .contact-info {
        flex: 1 1 400px;
        background-color: #f8f9fa;
        padding: 25px;
        border-radius: 15px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    }

    .contact-form input, 
    .contact-form textarea {
        width: 100%;
        padding: 12px;
        margin-bottom: 15px;
        border-radius: 8px;
        border: 1px solid #ced4da;
        font-size: 1rem;
    }

    .contact-form button {
        background-color: #0d6efd;
        color: #fff;
        border: none;
        padding: 12px 25px;
        border-radius: 8px;
        font-size: 1rem;
        cursor: pointer;
        transition: all 0.2s;
    }

    .contact-form button:hover {
        background-color: #0b5ed7;
    }

    .contact-info h3 {
        margin-bottom: 15px;
        color: #0d6efd;
    }

    .contact-info p, .contact-info a {
        font-size: 1rem;
        color: #495057;
        margin-bottom: 10px;
        display: block;
    }

    .map-placeholder {
        margin-top: 20px;
        width: 100%;
        height: 200px;
        background-color: #dee2e6;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #6c757d;
        font-weight: 600;
    }

    @media screen and (max-width: 768px) {
        .contact-container {
            flex-direction: column;
        }
    }
</style>

<main class="main">
    <div class="page-header text-center" style="background-image: url('front/assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">Contact Us</h1>
        </div>
    </div>

    <div class="page-content contact-section">
        <div class="contact-header">
            <p>We’d love to hear from you! Please fill out the form below or use the contact details provided.</p>
        </div>

        <div class="contact-container">
            <!-- Contact Form -->
            <div class="contact-form">
                <h3>Send Us a Message</h3>
                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <input type="text" name="subject" placeholder="Subject" required>
                    <textarea name="message" rows="6" placeholder="Your Message" required></textarea>
                    <button type="submit">Submit</button>
                </form>
            </div>

            <!-- Contact Details -->
            <div class="contact-info">
                <h3>Contact Information</h3>
                <p><strong>Address:</strong> Department of Telecommunications, Sanchar Bhawan, New Delhi, India</p>
                <p><strong>Phone:</strong> +91-11-2323 2323</p>
                <p><strong>Email:</strong> info@dot.gov.in</p>
                <p><strong>Working Hours:</strong> Mon - Fri, 9:30 AM - 6:00 PM</p>

                <!-- Map Placeholder -->
                <div class="map-placeholder">
                    Google Map Here
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
