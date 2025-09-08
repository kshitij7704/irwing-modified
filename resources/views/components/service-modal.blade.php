@php
    $a = rand(1, 10);
    $b = rand(1, 10);
    $totalnn = $a + $b;
    session(['math_captcha_answer' => $a + $b]);
@endphp

<!-- Service Modal -->
<div class="modal fade" id="serviceModal" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="serviceModalLabel">AI LifeBOT Service Request</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" id="my-form" enctype="multipart/form-data" action="{{ route('leads.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input name="name" type="text" class="form-control" id="name" required>
                        <input name="totalnumber" type="hidden" class="form-control" id="name" value="{{$totalnn}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input name="email" type="email" class="form-control" id="email" required>
                    </div>
                   <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <div class="input-group">
                            <select class="form-select" id="country_code" name="country_code" required style="max-width: 110px;">
                                <option value="+91" selected>🇮🇳 +91 (IN)</option>
                                <option value="+1">🇺🇸 +1 (US)</option>
                                <option value="+44">🇬🇧 +44 (UK)</option>
                                <option value="+61">🇦🇺 +61 (AUS)</option>
                                <option value="+971">🇦🇪 +971 (UAE)</option>
                                <option value="+81">🇯🇵 +81 (JP)</option>
                                <option value="+49">🇩🇪 +49 (DE)</option>
                                <option value="+33">🇫🇷 +33 (FR)</option>
                                <option value="+86">🇨🇳 +86 (CN)</option>
                            </select>
                            <input name="phone" type="tel" class="form-control" id="phone" required placeholder="Enter number (no country code)">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="company" class="form-label">Company Name</label>
                        <input name="company" type="text" class="form-control" id="company">
                    </div>
                    <div class="mb-3">
                        <label for="service" class="form-label">Service Interested In</label>
                        <select name="service" class="form-select" id="service">
                            <option selected>Choose...</option>
                            <option value="aiAgents">AI Agents</option>
                            <option value="aiVoiceBot">AI Voice Bot</option>
                            <option value="aiChatBot">AI Chat Bot</option>
                            <option value="whatsappBot">WhatsApp BOT</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Additional Details</label>
                        <textarea name="message" class="form-control" id="message" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="captcha" class="form-label">What is {{ $a }} + {{ $b }}?</label>
                        <input name="captcha" type="text" class="form-control" id="captcha" required pattern="[0-9]+" placeholder="Enter answer">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Submit Request</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal End --> 

<script>
const phoneInput = document.getElementById('phone');
const countryCodeSelect = document.getElementById('country_code');

function setPhoneValidation() {
    const countryCode = countryCodeSelect.value;

    if (countryCode === '+91') {
        phoneInput.pattern = '[0-9]{10}';
        phoneInput.placeholder = 'Enter 10 digit number';
    } else {
        phoneInput.pattern = '[0-9]{6,15}';
        phoneInput.placeholder = 'Enter number (no country code)';
    }
}

// Update validation when country changes
countryCodeSelect.addEventListener('change', setPhoneValidation);

// Initial validation
setPhoneValidation();
</script>