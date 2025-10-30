@extends('frontend.partials.app')

@section('content')

<style>
    /* ====== General Layout ====== */
    .contact-section {
        max-width: 1100px;
        margin: 60px auto;
        padding: 30px 20px;
    }

    .contact-header {
        text-align: center;
        margin-bottom: 50px;
    }

    .contact-header h1 {
        font-weight: 700;
        color: #0d6efd;
        margin-bottom: 10px;
    }

    .contact-header p {
        color: #495057;
        font-size: 3.1rem;
    }

    /* ====== Card Grid ====== */
    .contact-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
        gap: 35px;
        align-items: stretch;
    }

    .card {
        background-color: #fff;
        border-radius: 15px;
        border: 1px solid #e0e0e0;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        padding: 30px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .card:hover {
        transform: translateY(-4px);
        box-shadow: 0 6px 25px rgba(0, 0, 0, 0.1);
    }

    .card h3 {
        margin-bottom: 20px;
        color: #0d6efd;
        font-weight: 600;
    }

    /* ====== Form Styling ====== */
    .contact-form form {
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .contact-form input,
    .contact-form textarea,
    .contact-form select {
        width: 100%;
        padding: 12px 15px;
        margin-bottom: 15px;
        border-radius: 8px;
        border: 1px solid #ced4da;
        font-size: 1.95rem;
        color: #495057;
        transition: all 0.2s;
    }

    .contact-form input:focus,
    .contact-form textarea:focus,
    .contact-form select:focus {
        border-color: #0d6efd;
        outline: none;
        box-shadow: 0 0 0 0.15rem rgba(13, 110, 253, 0.25);
    }

    .contact-form textarea {
        resize: none;
        min-height: 150px;
    }

    .contact-form button {
        background-color: #0d6efd;
        color: #fff;
        border: none;
        padding: 12px 25px;
        border-radius: 8px;
        font-size: 2rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.2s;
        align-self: flex-start;
    }

    .contact-form button:hover {
        background-color: #0b5ed7;
    }

    /* ====== Contact Info ====== */
    .contact-info p {
        color: #495057;
        margin-bottom: 12px;
        line-height: 1.6;
    }

    .contact-info p strong {
        color: #0d6efd;
        font-weight: 600;
    }

    .map-container {
        margin-top: 20px;
        width: 100%;
        height: 260px;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
    }

    .map-container iframe {
        width: 100%;
        height: 100%;
        border: none;
    }

    /* ====== Responsive ====== */
    @media screen and (max-width: 768px) {
        .contact-container {
            grid-template-columns: 1fr;
        }

        .card {
            padding: 20px;
        }

        .contact-form button {
            width: 100%;
        }
    }
</style>

<main class="main">
    <div class="page-header text-center" style="background-image: url('{{ asset('front/assets/images/page-header-bg.jpg') }}')">
        <div class="container">
            <h1 class="page-title">Contact Us</h1>
        </div>
    </div>

    <div class="page-content contact-section">
        <!-- <div class="contact-header">
            <h1>Get in Touch</h1>
            <p>We’d love to hear from you! Please fill out the form below or use the contact details provided.</p>
        </div> -->

        <div class="contact-container">
            <!-- Contact Form Card -->
            <div class="card contact-form">
                <h3>Send Us a Message</h3>
                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <input type="text" name="subject" placeholder="Subject" required>

                    <label for="inquiry_type" class="form-label" style="font-weight: 600;">Type of Inquiry</label>
                    <select id="inquiry_type" name="inquiry_type" required>
                        <option value="" disabled selected>Select Inquiry Type</option>
                        <option value="general">General</option>
                        <option value="complaint">Complaint</option>
                        <option value="feedback">Feedback</option>
                    </select>

                    <textarea name="message" placeholder="Your Message" required></textarea>
                    <button type="submit">Submit</button>
                </form>
            </div>

            <!-- Contact Info Card -->
            <div class="card contact-info">
                <h3>Contact Information</h3>
                <p><strong>Address:</strong> {{ $settings->address }}</p>
                <p><strong>Phone:</strong> {{ $settings->contact_phone }}</p>
                <p><strong>Email:</strong> {{ $settings->contact_email }}</p>
                <p><strong>Working Hours:</strong> Mon - Fri, 9:30 AM - 6:00 PM</p>

                <div class="map-container">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.2544331604627!2d77.21157747511707!3d28.622135575670406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce2b4db3bb6bf%3A0x87572ced82b8f342!2sSanchar%20Bhawan%20(Department%20of%20Telecommunications)!5e0!3m2!1sen!2sin!4v1758796693702!5m2!1sen!2sin" 
                        allowfullscreen 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
