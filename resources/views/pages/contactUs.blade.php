@extends('layout.app')

@section('content')
<!-- Contact Us Page Content -->
<style>
    :root {
        --primary-gradient: linear-gradient(90deg, #c5874d, #9b6976);
        --primary-dark: #7a4f3a;
        --primary-light: #d8a37a;
        --accent-color: #b87d62;
        --text-dark: #2d3748;
        --text-medium: #4a5568;
        --text-light: #718096;
        --border-color: #e2e8f0;
        --bg-light: #f8f5f2;
        --success-color: #38a169;
        --error-color: #e53e3e;
        --shadow-sm: 0 1px 2px 0 rgba(0,0,0,0.05);
        --shadow-md: 0 4px 6px -1px rgba(0,0,0,0.1), 0 2px 4px -1px rgba(0,0,0,0.06);
        --shadow-lg: 0 10px 15px -3px rgba(0,0,0,0.1), 0 4px 6px -2px rgba(0,0,0,0.05);
        --border-radius: 8px;
    }
    
    body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            line-height: 1.5;
            color: var(--text-dark);
            background-color: var(--bg-light);
            min-height: 100vh;
            padding: 2rem 0;
        }

        .contact-container {
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-lg);
            overflow: hidden;
            margin: 2rem auto;
            max-width: 800px;
            border: 1px solid var(--border-color);
            margin-top: 100px;
        }

        .contact-header {
            background: var(--primary-gradient);
            color: white;
            padding: 2.5rem 2rem;
            text-align: center;
            position: relative;
        }

        .contact-header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, 
                        rgba(255,255,255,0) 0%, 
                        rgba(255,255,255,0.4) 50%, 
                        rgba(255,255,255,0) 100%);
        }

        .contact-header h1 {
            font-size: 1.75rem;
            font-weight: 700;
            margin-bottom: 0.75rem;
            letter-spacing: -0.025em;
            color: #fff;
            text-shadow: 0 2px 8px rgba(0,0,0,0.25), 0 1px 2px rgba(0,0,0,0.1);
        }

        .contact-header p {
            font-size: 1rem;
            opacity: 0.95;
            max-width: 600px;
            margin: 0 auto;
            font-weight: 400;
        }

        .contact-form {
            padding: 2rem;
        }

        .section-title {
            color: var(--primary-dark);
            font-weight: 600;
            font-size: 1.125rem;
            margin-bottom: 1.25rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid var(--border-color);
        }

        .section-title i {
            color: var(--accent-color);
            font-size: 1rem;
        }

        .form-label {
            font-weight: 500;
            color: var(--text-medium);
            margin-bottom: 0.5rem;
            font-size: 0.875rem;
            display: block;
        }

        .form-label .required {
            color: var(--error-color);
            margin-left: 0.25rem;
        }

        .form-control, .form-select {
            border: 1px solid var(--border-color);
            border-radius: var(--border-radius);
            padding: 0.625rem 1rem;
            font-size: 0.875rem;
            transition: all 0.15s ease;
            background-color: white;
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--accent-color);
            box-shadow: 0 0 0 3px rgba(184, 125, 98, 0.15);
            outline: none;
        }

        .form-select {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='%23c5874d' stroke='%23c5874d' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 0.75rem center;
            background-size: 16px 12px;
        }

        .form-check {
            background: var(--bg-light);
            padding: 2.25rem;
            border-radius: var(--border-radius);
            border: 1px solid var(--border-color);
            margin: 1.5rem 0;
        }

        .form-check-input {
            width: 1.1em;
            height: 1.1em;
            margin-top: 0.15em;
            border-color: var(--border-color);
        }

        .form-check-input:checked {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
        }

        .form-check-label {
            font-size: 0.875rem;
            color: var(--text-medium);
            line-height: 1.5;
        }

        .privacy-link {
            color: var(--accent-color);
            text-decoration: none;
            font-weight: 500;
        }

        .privacy-link:hover {
            text-decoration: underline;
            color: var(--primary-dark);
        }

        .btn-submit {
            background: var(--primary-gradient);
            border: none;
            padding: 0.75rem 2rem;
            font-size: 0.9375rem;
            font-weight: 500;
            border-radius: var(--border-radius);
            color: white;
            transition: all 0.15s ease;
            box-shadow: var(--shadow-sm);
            letter-spacing: 0.025em;
        }

        .btn-submit:hover {
            transform: translateY(-1px);
            box-shadow: var(--shadow-md);
            opacity: 0.95;
        }

        .btn-submit:active {
            transform: translateY(0);
            box-shadow: var(--shadow-sm);
        }

        .is-invalid {
            border-color: var(--error-color) !important;
        }

        .invalid-feedback {
            font-size: 0.8125rem;
            color: var(--error-color);
            margin-top: 0.25rem;
        }

        .text-muted {
            color: var(--text-light) !important;
            font-size: 0.8125rem;
        }

        @media (max-width: 768px) {
            .contact-container {
                margin: 1rem;
                border-radius: calc(var(--border-radius) * 0.75);
            }
            
            .contact-header {
                padding: 2rem 1.5rem;
            }
            
            .contact-header h1 {
                font-size: 1.5rem;
            }
            
            .contact-form {
                padding: 1.5rem;
            }
        }

        .animate-fade-in {
            animation: fadeIn 0.3s ease-out forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(8px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
</style>
<div class="container">
    <div class="contact-container animate-fade-in " >
        <div class="contact-header">
            <h1><i class="fas fa-envelope-open-text mr-2"></i> &nbsp;Get in Touch with Us</h1>
            <p>Fill out the form below, and one of our specialists will reach out to assist you.</p>
        </div>
        <div class="contact-form ">
            <form id="contactForm" method="POST" action="{{ route('contact.send') }}">
                @csrf
                <div class="section-title">
                    <i class="fas fa-user"></i>
                    Your Details
                </div>
                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label for="firstName" class="form-label">
                            First Name <span class="required">*</span>
                        </label>
                        <input type="text" class="form-control" id="firstName" name="first_name" required>
                        <div class="invalid-feedback">Please provide your first name.</div>
                    </div>
                    <div class="col-md-6">
                        <label for="lastName" class="form-label">
                            Last Name <span class="required">*</span>
                        </label>
                        <input type="text" class="form-control" id="lastName" name="last_name" required>
                        <div class="invalid-feedback">Please provide your last name.</div>
                    </div>
                </div>
                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label for="businessEmail" class="form-label">
                            Business Email <span class="required">*</span>
                        </label>
                        <input type="email" class="form-control" id="businessEmail" name="email" required>
                        <div class="invalid-feedback">Please provide a valid email address.</div>
                    </div>
                    <div class="col-md-6">
                        <label for="phoneNumber" class="form-label">
                            Phone Number <span class="required">*</span>
                        </label>
                        <input type="tel" class="form-control" id="phoneNumber" name="phone" required>
                        <div class="invalid-feedback">Please provide your phone number.</div>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="companyName" class="form-label">
                        Company Name <span class="required">*</span>
                    </label>
                    <input type="text" class="form-control" id="companyName" name="company" required>
                    <div class="invalid-feedback">Please provide your company name.</div>
                </div>
                <div class="section-title">
                    <i class="fas fa-info-circle"></i>
                    Additional Information
                </div>
                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label for="numEmployees" class="form-label">
                            Number of Employees <span class="required">*</span>
                        </label>
                        <select class="form-select" id="numEmployees" name="num_employees" required>
                            <option value="">Select...</option>
                            <option value="1-10">1-10</option>
                            <option value="11-50">11-50</option>
                            <option value="51-200">51-200</option>
                            <option value="201-500">201-500</option>
                            <option value="501-1000">501-1000</option>
                            <option value="1000+">1000+</option>
                        </select>
                        <div class="invalid-feedback">Please select an option.</div>
                    </div>
                    <div class="col-md-6">
                        <label for="yourRole" class="form-label">
                            Your Role <span class="required">*</span>
                        </label>
                        <select class="form-select" id="yourRole" name="role" required>
                            <option value="">Select from options</option>
                            <option value="CEO">CEO</option>
                            <option value="CTO">CTO</option>
                            <option value="Manager">Manager</option>
                            <option value="Director">Director</option>
                            <option value="VP">VP</option>
                            <option value="Other">Other</option>
                        </select>
                        <div class="invalid-feedback">Please select your role.</div>
                    </div>
                </div>
                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <label for="industry" class="form-label">
                            Industry <span class="required">*</span>
                        </label>
                        <input type="text" class="form-control" id="industry" name="industry" required>
                        <div class="invalid-feedback">Please provide your industry.</div>
                    </div>
                    <div class="col-md-6">
                        <label for="countryRegion" class="form-label">
                            Country/Region <span class="required">*</span>
                        </label>
                        <select class="form-select" id="countryRegion" name="country" required>
                            <option value="">Select from options</option>
                            <option value="United States">United States</option>
                            <option value="Canada">Canada</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="Germany">Germany</option>
                            <option value="France">France</option>
                            <option value="Australia">Australia</option>
                            <option value="India">India</option>
                            <option value="Other">Other</option>
                        </select>
                        <div class="invalid-feedback">Please select a country/region.</div>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="howCanWeAssist" class="form-label">
                        How Can We Assist You? <span class="required">*</span>
                    </label>
                    <textarea class="form-control" id="howCanWeAssist" name="message" rows="4" placeholder="Specify your request" required></textarea>
                    <div class="invalid-feedback">Please provide details about how we can assist you.</div>
                </div>
                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" id="consentCheck" name="consent" value="1" required>
                    <label class="form-check-label" for="consentCheck">
                        <em>I consent to AI LifeBOT contacting me regarding products, services, and events.</em>
                    </label>
                    <div class="invalid-feedback" style="display: block;">You must agree before submitting.</div>
                </div>
                <p class="text-muted small mb-4">
                    By submitting this form, you agree to AI LifeBOT processing your data as outlined in our <a href="#" class="privacy-link">Privacy Policy</a>. You can opt out of communications at any time.
                </p>
                <div class="text-center">
                    <button type="submit" class="btn btn-submit">
                        <i class="fas fa-paper-plane mr-2"></i>
                        Submit Request
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@if(session('success'))
    <div class="alert alert-success mt-3">{{ session('success') }}</div>
@endif
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('contactForm');
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            if (!form.checkValidity()) {
                e.stopPropagation();
                Array.from(form.elements).forEach(element => {
                    if (element.checkValidity && !element.checkValidity()) {
                        element.classList.add('is-invalid');
                    }
                });
                return;
            }
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            const originalBg = submitBtn.style.background;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Submitting...';
            submitBtn.disabled = true;
            setTimeout(() => {
                submitBtn.innerHTML = '<i class="fas fa-check mr-2"></i> Submitted Successfully';
                submitBtn.style.background = 'var(--success-color)';
                setTimeout(() => {
                    form.reset();
                    submitBtn.innerHTML = originalText;
                    submitBtn.style.background = originalBg;
                    submitBtn.disabled = false;
                    form.classList.remove('was-validated');
                    Array.from(form.elements).forEach(element => {
                        element.classList.remove('is-invalid');
                    });
                    alert('Thank you! Your request has been submitted successfully. One of our specialists will contact you soon.');
                }, 1500);
            }, 1500);
            form.classList.add('was-validated');
        });
        Array.from(form.elements).forEach(element => {
            element.addEventListener('input', function() {
                if (this.checkValidity) {
                    this.classList.remove('is-invalid');
                }
            });
        });
    });
</script>
@endsection
