@extends('layoutsBackend.app')

@section('content')
<!-- $tourReport -->

<div class="container-xxl flex-grow-1 container-p-y">
        <div class="row g-6 mb-4">
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">Dashboard</h4>
                    <div>
                        <label for="officerFilter" class="me-2">Filter by Officer:</label>
                        <select id="officerFilter" class="form-select d-inline-block" style="width: 240px;">
                            <option value="">All officers</option>
                            @if(isset($officers))
                                @foreach($officers as $officer)
                                    <option value="{{ $officer }}">{{ $officer }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
            </div>
        </div>
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
        // Expose server data to JS
        var tourReport = @json($tourReport ?? []);

        // Helper: filter records by officer name (empty = all)
        function filterByOfficer(name) {
            if (!name) return tourReport;
            var norm = (name || '').toString().trim().toLowerCase();
            return tourReport.filter(function(r) {
                var candidate = (r.name || '');
                // support nested user name if present
                if ((!candidate || candidate.toString().trim() === '') && r.user && r.user.name) candidate = r.user.name;
                return (candidate || '').toString().trim().toLowerCase() === norm;
            });
        }

        // Helper: rebuild officer details table from records
        function renderOfficerTable(records) {
            var tbody = document.querySelector('table.table tbody');
            if (!tbody) return;
            tbody.innerHTML = '';
            records.forEach(function(r) {
                var tr = document.createElement('tr');
                var nameTd = document.createElement('td');
                nameTd.innerHTML = '<strong>' + (r.name || '-') + '</strong>';
                var purposeTd = document.createElement('td');
                purposeTd.textContent = r.purpose || r.meeting_name || '-';
                var countryTd = document.createElement('td');
                countryTd.textContent = r.country || '-';
                var meetingTd = document.createElement('td');
                meetingTd.textContent = r.meeting_name || '-';
                var levelTd = document.createElement('td');
                levelTd.textContent = r.equivalent_rank || r.level || r.designation || '-';
                tr.appendChild(nameTd);
                tr.appendChild(purposeTd);
                tr.appendChild(countryTd);
                tr.appendChild(meetingTd);
                tr.appendChild(levelTd);
                tbody.appendChild(tr);
            });
        }

        // Initial render of table
        renderOfficerTable(tourReport);

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

        // Map marker management
        var _geocodeCache = {}; // in-page cache for geocoding results
        var _markers = [];

        function clearMarkers() {
            _markers.forEach(function(m) { map.removeLayer(m); });
            _markers = [];
        }

        function addMarker(lat, lon, popupHtml) {
            try {
                var mk = L.marker([lat, lon]).addTo(map).bindPopup(popupHtml);
                // show popup on hover
                mk.on('mouseover', function() { this.openPopup(); });
                mk.on('mouseout', function() { this.closePopup(); });
                _markers.push(mk);
                return mk;
            } catch (e) {
                console.warn('Invalid marker coords', lat, lon, e);
                return null;
            }
        }

        // Build a rich HTML popup from a record and optional geocode result
        function buildPopupHtml(r, loc) {
            var lines = [];
            lines.push('<div>');
            lines.push('<strong>' + (r.name || '-') + '</strong>');
            if (r.designation) lines.push('<div><em>' + r.designation + '</em></div>');
            if (r.purpose) lines.push('<div>Purpose: ' + r.purpose + '</div>');
            if (r.meeting_name) lines.push('<div>Meeting: ' + r.meeting_name + '</div>');
            if (r.country || r.city) lines.push('<div>Location: ' + (r.city||'-') + ', ' + (r.country||'-') + '</div>');
            if (r.equivalent_rank || r.level) lines.push('<div>Level: ' + (r.equivalent_rank||r.level||'-') + '</div>');
            if (r.from_date || r.to_date) lines.push('<div>Dates: ' + (r.from_date || '-') + ' — ' + (r.to_date || '-') + '</div>');
            if (r.cadre) lines.push('<div>Cadre: ' + r.cadre + '</div>');
            if (r.sector) lines.push('<div>Sector: ' + r.sector + '</div>');
            if (r.gender) lines.push('<div>Gender: ' + r.gender + '</div>');
            if (loc && loc.display_name) lines.push('<div style="font-size:0.85em;color:#666;">' + loc.display_name + '</div>');
            lines.push('</div>');
            return lines.join('');
        }

        // Use lat/lon fields if present on the record; otherwise geocode 'city, country'
        function geocodeLocation(query) {
            if (!query) return Promise.resolve(null);
            if (_geocodeCache[query]) return Promise.resolve(_geocodeCache[query]);
            // Use Nominatim (OpenStreetMap) for lightweight geocoding
            var url = 'https://nominatim.openstreetmap.org/search?format=json&limit=1&q=' + encodeURIComponent(query);
            return fetch(url, { headers: { 'Accept-Language': 'en' } })
                .then(function(res){ return res.json(); })
                .then(function(data){
                    if (data && data.length) {
                        var item = { lat: parseFloat(data[0].lat), lon: parseFloat(data[0].lon), display_name: data[0].display_name };
                        _geocodeCache[query] = item;
                        return item;
                    }
                    _geocodeCache[query] = null;
                    return null;
                }).catch(function(err){
                    console.warn('Geocode error', err);
                    _geocodeCache[query] = null;
                    return null;
                });
        }

        // Refresh markers for given records (array)
        function refreshMapMarkers(records) {
            clearMarkers();
            if (!records || !records.length) return;
            // For each record, try to place a marker
            var promises = records.map(function(r) {
                return new Promise(function(resolve) {
                    // If record already has latitude/longitude fields (support multiple key names)
                    var latVal = r.latitude || r.lat || r.lat_val || r.latitude_val || r.latitude;
                    var lonVal = r.longitude || r.lon || r.lng || r.lng_val || r.longitude_val;
                    if (latVal && lonVal) {
                        var popup = buildPopupHtml(r, null);
                        addMarker(latVal, lonVal, popup);
                        return resolve();
                    }

                    // Try to geocode using city + country
                    var q = '';
                    if (r.city) q += r.city + ', ';
                    if (r.country) q += r.country;
                    if (!q) return resolve();
                    geocodeLocation(q).then(function(loc){
                        if (loc) {
                            var popup = buildPopupHtml(r, loc);
                            addMarker(loc.lat, loc.lon, popup);
                        }
                        // tiny delay to respect remote service rate limits
                        setTimeout(resolve, 120);
                    });
                });
            });
            // After all promises resolved, optionally fit bounds
            Promise.all(promises).then(function(){
                if (_markers.length) {
                    try {
                        var group = new L.featureGroup(_markers);
                        map.fitBounds(group.getBounds().pad(0.2));
                    } catch (e) { /* ignore fitBounds errors */ }
                }
            });
        }


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
                // 5-year ranges labels
                categories: ['20-24','25-29','30-34','35-39','40-44','45-49','50-54','55-59','60-64','65-69'],
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

        // Utility: aggregate helpers
        function countBy(arr, keyFn) {
            return arr.reduce(function(acc, item) {
                var key = keyFn(item) || 'Unknown';
                acc[key] = (acc[key] || 0) + 1;
                return acc;
            }, {});
        }

        function updateCharts(records) {
            // Month wise visits (assume from_date year-month)
            var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
            var monthCounts = {};
            records.forEach(function(r) {
                var d = r.from_date || r.date_of_birth || null;
                if (d) {
                    var m = new Date(d).getMonth();
                    var label = months[m];
                    monthCounts[label] = (monthCounts[label] || 0) + 1;
                }
            });
            var monthCategories = Object.keys(monthCounts).length ? Object.keys(monthCounts) : ['Jan','Feb','Mar','Apr','May','Jun'];
            var monthSeriesOfficers = monthCategories.map(function(k){ return monthCounts[k] || 0 });
            var monthSeriesTours = monthCategories.map(function(k){ return Math.max(1, Math.round((monthCounts[k]||0)/1)) });
            monthWiseVisitsChart.updateOptions({ xaxis: { categories: monthCategories } });
            monthWiseVisitsChart.updateSeries([{ name: 'Number of Officers', type: 'line', data: monthSeriesOfficers }, { name: 'Number of Tours', type: 'bar', data: monthSeriesTours }]);

            // Meetings treemap
            var meetings = countBy(records, function(r){ return r.purpose || r.meeting_name || 'Other' });
            var meetingsData = Object.keys(meetings).map(function(k){ return { x: k, y: meetings[k] }; });
            meetingsTreemapChart.updateSeries([{ data: meetingsData }]);

            // ITU sectors pie
            var sectors = countBy(records, function(r){ return r.sector || 'Other' });
            var sectorLabels = Object.keys(sectors);
            var sectorSeries = sectorLabels.map(function(k){ return sectors[k] });
            ituSectorsPieChart.updateOptions({ labels: sectorLabels.length ? sectorLabels : ['ITU-T','ITU-R','ITU-D','Other'] });
            ituSectorsPieChart.updateSeries(sectorSeries.length ? sectorSeries : [44,35,16,5]);

            // Officer levels treemap
            var levels = countBy(records, function(r){ return r.level || r.equivalent_rank || r.designation || 'Unknown' });
            var levelsData = Object.keys(levels).map(function(k){ return { x: k, y: levels[k] }; });
            officerLevelsTreemap.updateSeries([{ data: levelsData }]);

            // Age profile: 5-year buckets (20-24, 25-29, ...)
            var bucketStarts = [20,25,30,35,40,45,50,55,60,65];
            var ageLabels = bucketStarts.map(function(s){ return s + '-' + (s+4); });
            var ages = {};
            bucketStarts.forEach(function(s){ ages[s] = 0; });
            records.forEach(function(r){
                if (r.date_of_birth) {
                    var age = (new Date()).getFullYear() - (new Date(r.date_of_birth)).getFullYear();
                    if (isNaN(age) || age < 0) return;
                    var start = Math.floor(age/5)*5;
                    if (start < 20) start = 20;
                    if (start > 65) start = 65;
                    if (ages[start] === undefined) ages[start] = 0;
                    ages[start] = (ages[start]||0) + 1;
                }
            });
            var ageSeries = bucketStarts.map(function(s){ return ages[s] || 0; });
            ageProfileBarChart.updateOptions({ xaxis: { categories: ageLabels } });
            ageProfileBarChart.updateSeries([{ name: 'Number of Tours', data: ageSeries }]);

            // Cadre pie
            var cadre = countBy(records, function(r){ return r.cadre || 'Other' });
            var cadreLabels = Object.keys(cadre);
            var cadreSeries = cadreLabels.map(function(k){ return cadre[k] });
            cadrePieChart.updateOptions({ labels: cadreLabels.length ? cadreLabels : ['ITS','IRRS','Deputation','Minister'] });
            cadrePieChart.updateSeries(cadreSeries.length ? cadreSeries : [55,15,12,18]);

            // Gender bar
            var genders = countBy(records, function(r){ return r.gender || 'Unknown' });
            var genderLabels = ['Male','Female'];
            var genderSeriesData = genderLabels.map(function(k){ return genders[k] || 0 });
            genderBarChart.updateOptions({ xaxis: { categories: genderLabels } });
            genderBarChart.updateSeries([{ data: genderSeriesData }]);
        }

        // wire filter select change
        var officerFilter = document.getElementById('officerFilter');
        if (officerFilter) {
            officerFilter.addEventListener('change', function(e){
                var val = (e.target.value || '').toString().trim();
                var filtered = filterByOfficer(val);
                renderOfficerTable(filtered);
                updateCharts(filtered);
                refreshMapMarkers(filtered);
            });
        }

    // initial chart update with all records and markers
    updateCharts(tourReport);
    refreshMapMarkers(tourReport);
        // --- END: JAVASCRIPT FOR NEW CHARTS ---

    });
</script>
@endpush