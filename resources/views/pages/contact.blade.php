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

    /* ✅ Grid layout for equal height cards */
    .contact-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
        gap: 30px;
        align-items: stretch;
    }

    .card {
        background-color: #fff;
        padding: 25px;
        border-radius: 15px;
        border: 1px solid #dee2e6;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        display: flex;
        flex-direction: column;
        height: 100%; /* ✅ makes both cards equal height */
    }

    .card h3 {
        margin-bottom: 15px;
        color: #0d6efd;
    }

    .card p,
    .card a {
        color: #495057;
        margin-bottom: 10px;
        display: block;
    }

    /* Form specific */
    .contact-form form {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .contact-form input,
    .contact-form textarea {
        width: 100%;
        padding: 12px;
        margin-bottom: 15px;
        border-radius: 8px;
        border: 1px solid #ced4da;
    }

    .contact-form textarea {
        flex-grow: 1;
    }

    .contact-form button {
        background-color: #0d6efd;
        color: #fff;
        border: none;
        padding: 12px 25px;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.2s;
        margin-top: auto;
    }

    .contact-form button:hover {
        background-color: #0b5ed7;
    }

    /* Map inside card */
    .map-container {
        margin-top: auto;
        width: 100%;
        height: 250px;
        border-radius: 10px;
        overflow: hidden;
    }

    .map-container iframe {
        width: 100%;
        height: 100%;
        border: 0;
    }

    @media screen and (max-width: 768px) {
        .contact-container {
            grid-template-columns: 1fr; /* stack on mobile */
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
            <!-- Contact Form Card -->
            <div class="card contact-form">
                <h3>Send Us a Message</h3>
                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    
                    <input type="text" name="subject" placeholder="Subject" required>

                    <!-- Department (Select) -->
                    <div class="mb-3">
                        <label for="department" class="form-label">Department</label>
                        <select id="department" name="department" class="form-select" required>
                            <option value="" disabled selected>Select Department</option>
                            <option value="policy">Policy & Regulations</option>
                            <option value="projects">Projects & Initiatives</option>
                            <option value="support">Support & Queries</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <!-- Inquiry Type (Select) -->
                    <div class="mb-3">
                        <label for="inquiry_type" class="form-label">Type of Inquiry</label>
                        <select id="inquiry_type" name="inquiry_type" class="form-select" required>
                            <option value="" disabled selected>Select Inquiry Type</option>
                            <option value="general">General</option>
                            <option value="complaint">Complaint</option>
                            <option value="suggestion">Suggestion</option>
                            <option value="feedback">Feedback</option>
                        </select>
                    </div>

                    <textarea name="message" rows="6" placeholder="Your Message" required></textarea>
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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.2544331604627!2d77.21157747511707!3d28.622135575670406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce2b4db3bb6bf%3A0x87572ced82b8f342!2sSanchar%20Bhawan%20(Department%20of%20Telecommunications)!5e0!3m2!1sen!2sin!4v1758796693702!5m2!1sen!2sin" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
