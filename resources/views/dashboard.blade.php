@extends('layoutsBackend.app')

@section('content')
<!-- $tourReport -->

<div class="container-xxl flex-grow-1 container-p-y">
    {{-- Top Row of Summary Cards --}}
    <div class="row g-6 mb-6">
        
    </div>

    {{-- START: First Row of Charts and Map --}}
    <div class="row g-6 mb-6">
        <div class="col-lg-7 col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Month wise visits</h5>
                </div>
                <div class="card-body">
                    <div id="monthWiseVisitsChart"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-5 col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Types of meetings</h5>
                </div>
                <div class="card-body">
                    <div id="meetingsTreemapChart"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-6 mb-6">
        <div class="col-lg-8 col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Country and city wise visits</h5>
                </div>
                <div class="card-body">
                    <div id="visitsMap" style="height: 400px;"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">ITU sectors (only for ITU related visits)</h5>
                </div>
                <div class="card-body d-flex justify-content-center">
                    <div id="ituSectorsPieChart"></div>
                </div>
            </div>
        </div>
    </div>
    {{-- END: First Row of Charts and Map --}}


    {{-- START: Second Row of Officer Profile Charts --}}
    <div class="row g-6 mb-6">
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Levels of officers</h5>
                </div>
                <div class="card-body">
                    <div id="officerLevelsTreemap"></div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Age profile</h5>
                </div>
                <div class="card-body">
                    <div id="ageProfileBarChart"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-6 mb-6">
        <div class="col-md-4 col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Cadre of officers</h5>
                </div>
                <div class="card-body">
                    <div id="cadrePieChart"></div>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Gender</h5>
                </div>
                <div class="card-body">
                    <div id="genderBarChart"></div>
                </div>
            </div>
        </div>
    </div>
    {{-- END: Second Row of Officer Profile Charts --}}


    {{-- START: Officer Details Table --}}
    <div class="row g-6 mb-6">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Officer details</h5>
                </div>
                <div class="table-responsive text-nowrap" style="max-height: 400px; overflow-y: auto;">
                    <table class="table">
                        <thead class="sticky-top bg-white">
                            <tr>
                                <th>Name of the Officer</th>
                                <th>Purpose</th>
                                <th>Country</th>
                                <th>Meeting</th>
                                <th>Equivalent Level</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <tr>
                                <td><strong>Ajay Singhal</strong></td>
                                <td>ITU Meeting</td>
                                <td>Switzerland</td>
                                <td>ITU-R WP 3J, 3K, 3M</td>
                                <td>Director</td>
                            </tr>
                            <tr>
                                <td><strong>Alex Vikas</strong></td>
                                <td>Multilateral</td>
                                <td>Thailand</td>
                                <td>3rd Meeting of APT prepa...</td>
                                <td>Under Secretary</td>
                            </tr>
                            <tr>
                                <td><strong>Alex Vikas Adepu</strong></td>
                                <td>Multilateral</td>
                                <td>Switzerland</td>
                                <td>TDAG-32</td>
                                <td>Under Secretary</td>
                            </tr>
                            <tr>
                                <td><strong>Amit Kumar Chauhan</strong></td>
                                <td>Multilateral</td>
                                <td>Dominican Republic</td>
                                <td>Annual meeting of ITU Ac...</td>
                                <td>Director</td>
                            </tr>
                            <tr>
                                <td><strong>Amit Kumar Srivastava</strong></td>
                                <td>ITU Meeting</td>
                                <td>Switzerland</td>
                                <td>ITU-T SG13 meeting</td>
                                <td>Joint Secretary</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- END: Officer Details Table --}}


    {{-- Your Existing PHP Logic for Roles --}}
    <div class="row g-6 mt-6">
       {{-- ... (Your existing PHP role logic remains here) ... --}}
    </div>
</div>
@endsection

@push('scripts')
{{-- Include ApexCharts JS --}}
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

{{-- Include Leaflet JS and CSS for the map --}}
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // 1. Month wise visits (Line and Bar Combo Chart)
        var monthWiseVisitsOptions = {
            series: [{
                name: 'Number of Officers',
                type: 'line',
                data: [9, 11, 22, 18, 8, 2] // Replace with your dynamic data
            }, {
                name: 'Number of Tours',
                type: 'bar',
                data: [5, 8, 10, 8, 3, 1] // Replace with your dynamic data
            }],
            chart: {
                height: 350,
                type: 'line',
                toolbar: { show: false }
            },
            stroke: {
                curve: 'smooth',
                width: [2, 0]
            },
            dataLabels: {
                enabled: false,
            },
            xaxis: {
                categories: ['January', 'February', 'March', 'April', 'May', 'June'] // Replace with your dynamic labels
            },
            yaxis: [{
                title: {
                    text: 'Number of Tours',
                },
            }, {
                opposite: true,
                title: {
                    text: 'Number of Officers'
                }
            }],
            legend: {
                show: false
            },
            colors: ['#007bff', '#ff9f43']
        };
        var monthWiseVisitsChart = new ApexCharts(document.querySelector("#monthWiseVisitsChart"), monthWiseVisitsOptions);
        monthWiseVisitsChart.render();


        // 2. Types of meetings (Treemap)
        var meetingsTreemapOptions = {
            series: [{
                data: [ // Replace with your dynamic data
                    { x: 'ITU Meeting', y: 15 },
                    { x: 'Multilateral', y: 8 },
                    { x: 'Technical Meeting', y: 6 },
                    { x: 'Bilateral', y: 3 },
                    { x: 'High level visit', y: 2 }
                ]
            }],
            chart: {
                height: 350,
                type: 'treemap',
                toolbar: { show: false }
            },
            plotOptions: {
                treemap: {
                    distributed: true,
                    enableShades: false
                }
            },
            legend: {
                show: false
            },
            title: {
                text: ''
            }
        };
        var meetingsTreemapChart = new ApexCharts(document.querySelector("#meetingsTreemapChart"), meetingsTreemapOptions);
        meetingsTreemapChart.render();


        // 3. Country and city wise visits (Map)
        var map = L.map('visitsMap').setView([20, 0], 2); // Centered view
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // --- Replace with your dynamic location data ---
        // Example: L.marker([latitude, longitude]).addTo(map).bindPopup('City, Country');
        L.marker([51.5, -0.09]).addTo(map).bindPopup('London, UK');
        L.marker([48.85, 2.35]).addTo(map).bindPopup('Paris, France');
        L.marker([41.9, 12.49]).addTo(map).bindPopup('Rome, Italy');
        L.marker([39.9, 116.4]).addTo(map).bindPopup('Beijing, China');
        L.marker([28.6, 77.2]).addTo(map).bindPopup('New Delhi, India');
        L.marker([-15.79, -47.88]).addTo(map).bindPopup('Brasília, Brazil');


        // 4. ITU Sectors (Pie Chart)
        var ituSectorsOptions = {
            series: [44, 35, 16, 5], // Replace with your dynamic data
            chart: {
                width: 380,
                type: 'pie',
            },
            labels: ['ITU-T', 'ITU-R', 'ITU-D', 'Other'], // Replace with your dynamic labels
            legend: {
                position: 'bottom'
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 200
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }]
        };

        var ituSectorsPieChart = new ApexCharts(document.querySelector("#ituSectorsPieChart"), ituSectorsOptions);
        ituSectorsPieChart.render();

        // --- START: JAVASCRIPT FOR NEW CHARTS ---

        // 5. Levels of officers (Treemap)
        var officerLevelsOptions = {
            series: [{
                data: [ // Replace with your dynamic data
                    { x: 'Joint Secretary', y: 21 },
                    { x: 'Director', y: 15 },
                    { x: 'Under Secretary', y: 8 },
                    { x: 'Section Officer', y: 7 },
                    { x: 'Deputy Secretary', y: 5 },
                    { x: 'Secretary', y: 4 },
                    { x: 'Minister', y: 3 },
                    { x: 'Additional Secretary', y: 2 }
                ]
            }],
            chart: {
                height: 350,
                type: 'treemap',
                toolbar: { show: false }
            },
            plotOptions: {
                treemap: {
                    distributed: true,
                    enableShades: false
                }
            },
            legend: { show: false }
        };
        var officerLevelsTreemap = new ApexCharts(document.querySelector("#officerLevelsTreemap"), officerLevelsOptions);
        officerLevelsTreemap.render();

        // 6. Age Profile (Bar Chart)
        var ageProfileOptions = {
            series: [{
                name: 'Number of Tours',
                data: [2, 6, 8, 7, 17, 12] // Replace with your dynamic data
            }],
            chart: {
                type: 'bar',
                height: 350,
                toolbar: { show: false }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                },
            },
            dataLabels: { enabled: false },
            xaxis: {
                title: { text: 'Age (bin)' },
                categories: ['25', '30', '35', '45', '50', '55'], // Replace with your dynamic labels
            },
            yaxis: {
                title: { text: 'Number of Tours' }
            },
            fill: { opacity: 1 },
        };
        var ageProfileBarChart = new ApexCharts(document.querySelector("#ageProfileBarChart"), ageProfileOptions);
        ageProfileBarChart.render();

        // 7. Cadre of officers (Pie Chart)
        var cadreOptions = {
            series: [55, 15, 12, 18], // Replace with your dynamic data
            chart: {
                type: 'pie',
                height: 325
            },
            labels: ['ITS', 'IRRS', 'Deputation', 'Minister'], // Replace with your dynamic labels
            legend: { position: 'bottom' }
        };
        var cadrePieChart = new ApexCharts(document.querySelector("#cadrePieChart"), cadreOptions);
        cadrePieChart.render();

        // 8. Gender (Horizontal Bar Chart)
        var genderOptions = {
            series: [{
                data: [50, 8] // Replace with your dynamic data
            }],
            chart: {
                type: 'bar',
                height: 280,
                toolbar: { show: false }
            },
            plotOptions: {
                bar: {
                    horizontal: true,
                    barHeight: '35%',
                    distributed: true,
                }
            },
            dataLabels: {
                enabled: true,
                formatter: function (val) {
                    return val;
                },
                offsetX: 5,
                style: {
                    fontSize: '14px',
                    colors: ["#304758"]
                }
            },
            xaxis: {
                categories: ['Male', 'Female'], // Replace with your dynamic labels
                labels: { show: false }
            },
            legend: { show: false },
            grid: {
                show: false
            }
        };
        var genderBarChart = new ApexCharts(document.querySelector("#genderBarChart"), genderOptions);
        genderBarChart.render();
        // --- END: JAVASCRIPT FOR NEW CHARTS ---

    });
</script>
@endpush