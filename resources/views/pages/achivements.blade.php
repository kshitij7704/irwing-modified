@extends('frontend.partials.app')

@section('content')

<style>
    .table tr td, .table tr th {
        text-align: unset !important;
        padding-left: 10px;
    }
    .achievement-card {
        border: 1px solid #dee2e6;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.05);
        background-color: #fff;
    }
    .achievement-title {
        font-weight: 600;
        font-size: 1.1rem;
    }
    .achievement-date {
        font-size: 0.9rem;
        color: #6c757d;
    }
</style>

<main class="main">
    <div class="page-header text-center" style="background-image: url('front/assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">Achievements</h1>
        </div>
    </div>

    <nav aria-label="breadcrumb" class="breadcrumb-nav"></nav>

    <div class="page-content container">
        
        <p>Welcome to the Department of Telecommunications Achievements page. Here we highlight our key milestones, awards, and contributions towards improving telecommunication services across the country.</p>
        
        <div class="row">

            <!-- Sample Achievement Card -->
            <div class="col-md-6">
                <div class="achievement-card">
                    <div class="achievement-title">Successful Launch of 5G Pilot Project</div>
                    <div class="achievement-date">March 2025</div>
                    <p>The department successfully launched the 5G pilot project in select urban regions, aiming to improve broadband connectivity and enhance digital infrastructure.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="achievement-card">
                    <div class="achievement-title">Telecom Accessibility Awards</div>
                    <div class="achievement-date">January 2025</div>
                    <p>Recognized nationally for improving telecom accessibility in rural areas, including expansion of mobile networks and digital services.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="achievement-card">
                    <div class="achievement-title">Reduction in Call Drop Rates</div>
                    <div class="achievement-date">December 2024</div>
                    <p>Implemented advanced monitoring systems resulting in a 30% reduction in call drop rates across major telecom operators.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="achievement-card">
                    <div class="achievement-title">National Fiber Optic Expansion</div>
                    <div class="achievement-date">November 2024</div>
                    <p>Expanded fiber optic networks to over 1,000 villages, improving high-speed internet access in remote areas.</p>
                </div>
            </div>

        </div>

        <!-- Optional Table for Achievements -->
        <h3 class="mt-5">Recent Achievements Overview</h3>
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="achievementsTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Achievement</th>
                        <th>Date</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>5G Pilot Project</td>
                        <td>March 2025</td>
                        <td>Launched in select urban areas</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Telecom Accessibility Award</td>
                        <td>Jan 2025</td>
                        <td>Recognized for rural network expansion</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Fiber Optic Expansion</td>
                        <td>Nov 2024</td>
                        <td>1,000+ villages connected</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Call Drop Rate Reduction</td>
                        <td>Dec 2024</td>
                        <td>30% reduction achieved</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</main>

@endsection

@push('scripts')
<script>
$(document).ready(function() {
    $('#achievementsTable').DataTable({
        pageLength: 5,
        lengthMenu: [5, 10, 25, 50],
        searching: true,
        ordering: true,
    });
});
</script>
@endpush
