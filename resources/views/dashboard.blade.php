@extends('layoutsBackend.app')

@section('content')

                            @php
                            $activeRole = session('active_role') ?? auth()->user()->getRoleNames()->first();
                           
                            @endphp
                            @if($activeRole== 'admin')
<div class="container-xxl flex-grow-1 container-p-y">

    {{-- Header --}}
    <div class="row g-6 mb-4">
        <div class="col-12 d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Dashboard</h4>
            <div class="d-flex gap-2 align-items-center">
                <label class="mb-0 me-2">Filter by Officer:</label>
                <select id="officerFilter" class="form-select d-inline-block" style="width: 240px;">
                    <option value="">All officers</option>
                    @if(isset($officers))
                        @foreach($officers as $officer)
                            @if(!empty($officer))
                                <option value="{{ $officer }}">{{ $officer }}</option>
                            @endif
                        @endforeach
                    @endif
                </select>
            </div>
        </div>
    </div>

    {{-- FILTER ROW --}}
    <div class="row mb-4">
        <div class="col-md-2 mb-2">
            <select id="filterMonth" class="form-select filter-select">
                <option value="">All Months</option>
            </select>
        </div>
        <div class="col-md-2 mb-2">
            <select id="filterMeeting" class="form-select filter-select">
                <option value="">All Purposes</option>
            </select>
        </div>
        <div class="col-md-2 mb-2">
            <select id="filterCountry" class="form-select filter-select">
                <option value="">All Countries</option>
            </select>
        </div>
        <div class="col-md-2 mb-2">
            <select id="filterCadre" class="form-select filter-select">
                <option value="">All Cadres</option>
            </select>
        </div>
        <div class="col-md-2 mb-2">
            <select id="filterGender" class="form-select filter-select">
                <option value="">All Genders</option>
            </select>
        </div>
        <div class="col-md-2 mb-2">
            <button id="clearFilters" class="btn btn-outline-secondary w-100">Clear</button>
        </div>
    </div>

    {{-- Charts --}}
    <div class="row g-6 mb-6">
        <div class="col-lg-7 col-12">
            <div class="card">
                <div class="card-header"><h5 class="card-title mb-0">Month wise visits</h5></div>
                <div class="card-body"><div id="monthWiseVisitsChart"></div></div>
            </div>
        </div>

        <div class="col-lg-5 col-12">
            <div class="card">
                <div class="card-header"><h5 class="card-title mb-0">Types of meetings</h5></div>
                <div class="card-body"><div id="meetingsTreemapChart"></div></div>
            </div>
        </div>
    </div>

    <div class="row g-6 mb-6">
        <div class="col-lg-8 col-12">
            <div class="card">
                <div class="card-header"><h5 class="card-title mb-0">Country and city wise visits (map)</h5></div>
                <div class="card-body"><div id="visitsMap" style="height: 420px;"></div></div>
            </div>
        </div>

        <div class="col-lg-4 col-12">
            <div class="card">
                <div class="card-header"><h5 class="card-title mb-0">ITU sectors (only for ITU related visits)</h5></div>
                <div class="card-body d-flex justify-content-center"><div id="ituSectorsPieChart"></div></div>
            </div>
        </div>
    </div>

    {{-- Officer Profile Charts --}}
    <div class="row g-6 mb-6">
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-header"><h5 class="card-title mb-0">Levels of officers</h5></div>
                <div class="card-body"><div id="officerLevelsTreemap"></div></div>
            </div>
        </div>

        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-header"><h5 class="card-title mb-0">Age profile</h5></div>
                <div class="card-body"><div id="ageProfileBarChart"></div></div>
            </div>
        </div>
    </div>

    <div class="row g-6 mb-6">
        <div class="col-md-4 col-12">
            <div class="card">
                <div class="card-header"><h5 class="card-title mb-0">Cadre of officers</h5></div>
                <div class="card-body"><div id="cadrePieChart"></div></div>
            </div>
        </div>

        <div class="col-md-8 col-12">
            <div class="card">
                <div class="card-header"><h5 class="card-title mb-0">Gender</h5></div>
                <div class="card-body"><div id="genderBarChart"></div></div>
            </div>
        </div>
    </div>

    {{-- Officer Details Table --}}
    <div class="row g-6 mb-6">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><h5 class="card-title">Officer details</h5></div>
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
                        <tbody class="table-border-bottom-0"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endif
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" crossorigin=""></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // ---------- Raw data ----------
    let rawData = @json($tourReport ?? []);
    if (!Array.isArray(rawData)) rawData = [];
    let filteredData = rawData.slice();

    // ---------- Utilities ----------
    const monthNames = ['January','February','March','April','May','June','July','August','September','October','November','December'];
    function normalizeString(v){ return v ? String(v).trim() : ''; }
    function monthFromDate(dstr){ if(!dstr) return null; const d=new Date(dstr); return isNaN(d.getTime()) ? null : monthNames[d.getMonth()]; }
    function countBy(records, keyFn){
        const m = {};
        records.forEach(r => {
            const k = normalizeString(keyFn(r));
            if(!k) return;
            m[k] = (m[k]||0) + 1;
        });
        return m;
    }
    function mapToTreemapData(obj){ return Object.keys(obj).map(k=>({ x: k, y: obj[k] })); }

    // ---------- DOM elements ----------
    const filterMonthEl = document.getElementById('filterMonth');
    const filterMeetingEl = document.getElementById('filterMeeting'); // purpose
    const filterCountryEl = document.getElementById('filterCountry');
    const filterCadreEl = document.getElementById('filterCadre');
    const filterGenderEl = document.getElementById('filterGender');
    const officerFilterEl = document.getElementById('officerFilter');
    const clearFiltersBtn = document.getElementById('clearFilters');

    // Selected filters from chart clicks (these are additional to selects)
    let selectedLevelFilter = null;   // from Levels treemap
    let selectedSectorFilter = null;  // from ITU pie
    let activeAgeBucket = null;       // from Age chart

    // ---------- Populate selects with distinct values ----------
    function populateSelects(){
        const months = new Set();
        const purposes = new Set();
        const countries = new Set();
        const cadres = new Set();
        const genders = new Set();

        rawData.forEach(r=>{
            const m = monthFromDate(r.from_date || r.created_at);
            if(m) months.add(m);
            if(r.purpose) purposes.add(r.purpose);
            if(r.country) countries.add(r.country);
            if(r.cadre) cadres.add(r.cadre);
            if(r.gender) genders.add(r.gender);
        });

        // months sorted by monthNames index
        Array.from(months).sort((a,b)=>monthNames.indexOf(a)-monthNames.indexOf(b)).forEach(m=> filterMonthEl.appendChild(new Option(m, m)));
        Array.from(purposes).sort().forEach(p=> filterMeetingEl.appendChild(new Option(p, p)));
        Array.from(countries).sort().forEach(c=> filterCountryEl.appendChild(new Option(c, c)));
        Array.from(cadres).sort().forEach(ca=> filterCadreEl.appendChild(new Option(ca, ca)));
        Array.from(genders).sort().forEach(g=> filterGenderEl.appendChild(new Option(g, g)));
    }
    populateSelects();

    // ---------- ApexCharts instances ----------
    const monthChart = new ApexCharts(document.querySelector("#monthWiseVisitsChart"), {
        chart: {
            type: 'bar', height: 340,
            events: {
                dataPointSelection: function(event, chartContext, config){
                    const idx = config.dataPointIndex;
                    if(idx !== undefined){
                        const label = chartContext.w.config.xaxis.categories[idx] || chartContext.w.globals.labels[idx];
                        if(label){
                            // set select and apply
                            filterMonthEl.value = label;
                            selectedLevelFilter = null; selectedSectorFilter = null; activeAgeBucket = null;
                            applyFilters();
                        }
                    }
                }
            }
        },
        series: [{ name: 'Tours', data: [] }],
        xaxis: { categories: [] }
    });
    monthChart.render();

    const meetingsTreemap = new ApexCharts(document.querySelector("#meetingsTreemapChart"), {
        chart: {
            type: 'treemap', height: 340,
            events: {
                dataPointSelection: function(event, chartContext, config){
                    // treemap stores data in series[0].data
                    const idx = config.dataPointIndex;
                    if(idx !== undefined){
                        const dataPoint = chartContext.w.config.series[0].data[idx];
                        const label = dataPoint?.x ?? chartContext.w.globals.labels[idx];
                        if(label){
                            filterMeetingEl.value = label;
                            // clear other chart-click filters to behave like "set this filter"
                            selectedLevelFilter = null; selectedSectorFilter = null; activeAgeBucket = null;
                            applyFilters();
                        }
                    }
                }
            }
        },
        series: [{ data: [] }],
        plotOptions: { treemap: { distributed: true, enableShades: false } }
    });
    meetingsTreemap.render();

    const ituPie = new ApexCharts(document.querySelector("#ituSectorsPieChart"), {
        chart: {
            type: 'pie', height: 340,
            events: {
                dataPointSelection: function(event, chartContext, config){
                    const idx = config.dataPointIndex;
                    if(idx !== undefined){
                        const label = chartContext.w.config.labels[idx];
                        if(label){
                            // set selected sector filter (not a select)
                            selectedSectorFilter = label;
                            // clear select-level stuff to avoid confusion
                            filterMeetingEl.value = '';
                            filterMonthEl.value = '';
                            selectedLevelFilter = null;
                            activeAgeBucket = null;
                            applyFilters();
                        }
                    }
                }
            }
        },
        labels: [],
        series: []
    });
    ituPie.render();

    const levelsTreemap = new ApexCharts(document.querySelector("#officerLevelsTreemap"), {
        chart: {
            type: 'treemap', height: 340,
            events: {
                dataPointSelection: function(event, chartContext, config){
                    const idx = config.dataPointIndex;
                    if(idx !== undefined){
                        const label = chartContext.w.config.series[0].data[idx]?.x || chartContext.w.globals.labels[idx];
                        if(label){
                            selectedLevelFilter = label;
                            // clear other chart-clicks if desired
                            selectedSectorFilter = null;
                            activeAgeBucket = null;
                            applyFilters();
                        }
                    }
                }
            }
        },
        series: [{ data: [] }],
        plotOptions: { treemap: { distributed: true, enableShades: false } }
    });
    levelsTreemap.render();

    const ageBar = new ApexCharts(document.querySelector("#ageProfileBarChart"), {
        chart: {
            type: 'bar', height: 340,
            events: {
                dataPointSelection: function(event, chartContext, config){
                    const idx = config.dataPointIndex;
                    if(idx !== undefined){
                        const bucket = chartContext.w.config.xaxis.categories[idx];
                        if(bucket){
                            activeAgeBucket = bucket;
                            // clear other click filters
                            selectedLevelFilter = null; selectedSectorFilter = null;
                            applyFilters();
                        }
                    }
                }
            }
        },
        series: [{ name: 'Count', data: [] }],
        xaxis: { categories: [] }
    });
    ageBar.render();

    const cadrePie = new ApexCharts(document.querySelector("#cadrePieChart"), {
        chart: {
            type: 'pie', height: 320,
            events: {
                dataPointSelection: function(event, chartContext, config){
                    const idx = config.dataPointIndex;
                    if(idx !== undefined){
                        const label = chartContext.w.config.labels[idx];
                        if(label){
                            filterCadreEl.value = label;
                            selectedLevelFilter = null; selectedSectorFilter = null; activeAgeBucket = null;
                            applyFilters();
                        }
                    }
                }
            }
        },
        labels: [], series: []
    });
    cadrePie.render();

    const genderBar = new ApexCharts(document.querySelector("#genderBarChart"), {
        chart: {
            type: 'bar', height: 300,
            events: {
                dataPointSelection: function(event, chartContext, config){
                    const idx = config.dataPointIndex;
                    if(idx !== undefined){
                        const g = chartContext.w.config.xaxis.categories[idx];
                        if(g){
                            filterGenderEl.value = g;
                            selectedLevelFilter = null; selectedSectorFilter = null; activeAgeBucket = null;
                            applyFilters();
                        }
                    }
                }
            }
        },
        series: [{ data: [] }],
        xaxis: { categories: [] }
    });
    genderBar.render();

    // ---------- Map (Leaflet) ----------
    const map = L.map('visitsMap').setView([20,0],2);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',{ attribution: '&copy; OpenStreetMap contributors' }).addTo(map);
    let _markers = [], _geocodeCache = {};
    function clearMarkers(){ _markers.forEach(m=>map.removeLayer(m)); _markers = []; }
    function addMarker(lat, lon, popupHtml, record){
        try{
            const mk = L.marker([lat,lon]).addTo(map).bindPopup(popupHtml);
            mk.on('mouseover', ()=> mk.openPopup());
            mk.on('mouseout', ()=> mk.closePopup());
            mk.on('click', ()=> {
                // clicking marker filters by country
                if(record && record.country){
                    filterCountryEl.value = record.country;
                    selectedLevelFilter = null; selectedSectorFilter = null; activeAgeBucket = null;
                    applyFilters();
                }
            });
            _markers.push(mk);
            return mk;
        }catch(e){ return null; }
    }
    function buildPopupHtml(r, loc){
        const lines = [];
        lines.push(`<div>`);
        lines.push(`<strong>${r.name || (r.user && r.user.name) || r.staff_number || '-'}</strong>`);
        if(r.designation) lines.push(`<div><em>${r.designation}</em></div>`);
        if(r.purpose) lines.push(`<div>Purpose: ${r.purpose}</div>`);
        if(r.meeting_name) lines.push(`<div>Meeting: ${r.meeting_name}</div>`);
        if(r.city || r.country) lines.push(`<div>Location: ${(r.city||'-')}, ${(r.country||'-')}</div>`);
        if(r.from_date || r.to_date) lines.push(`<div>Dates: ${(r.from_date||'-')} — ${(r.to_date||'-')}</div>`);
        if(r.cadre) lines.push(`<div>Cadre: ${r.cadre}</div>`);
        if(r.sector) lines.push(`<div>Sector: ${r.sector}</div>`);
        if(r.gender) lines.push(`<div>Gender: ${r.gender}</div>`);
        if(loc && loc.display_name) lines.push(`<div style="font-size:0.85em;color:#666;">${loc.display_name}</div>`);
        lines.push(`</div>`);
        return lines.join('');
    }
    function geocodeLocation(q){
        if(!q) return Promise.resolve(null);
        if(_geocodeCache[q]) return Promise.resolve(_geocodeCache[q]);
        return fetch('https://nominatim.openstreetmap.org/search?format=json&limit=1&q=' + encodeURIComponent(q))
            .then(r => r.json()).then(data => {
                if(data && data.length){
                    _geocodeCache[q] = { lat: parseFloat(data[0].lat), lon: parseFloat(data[0].lon), display_name: data[0].display_name };
                    return _geocodeCache[q];
                }
                _geocodeCache[q] = null; return null;
            }).catch(()=> { _geocodeCache[q] = null; return null; });
    }
    function refreshMap(records){
        clearMarkers();
        if(!records || !records.length) return;
        const promises = records.map(r => new Promise(resolve => {
            const lat = r.latitude || r.lat || r.lat_val || r.latitude_val;
            const lon = r.longitude || r.lon || r.lng || r.lng_val || r.longitude_val;
            if(lat && lon){
                addMarker(lat, lon, buildPopupHtml(r, null), r);
                return resolve();
            }
            let q = '';
            if(r.city) q += r.city + ', ';
            if(r.country) q += r.country;
            if(!q) return resolve();
            geocodeLocation(q).then(loc => { if(loc) addMarker(loc.lat, loc.lon, buildPopupHtml(r, loc), r); setTimeout(resolve, 80); })
                .catch(()=> setTimeout(resolve,80));
        }));
        Promise.all(promises).then(()=> {
            if(_markers.length){
                try { map.fitBounds(L.featureGroup(_markers).getBounds().pad(0.25)); } catch(e){}
            }
        });
    }

    // ---------- Data -> update all charts & table ----------
    function updateAll(records){
        // 1) Month chart: unique officers (or tours) per month
        const monthMap = {};
        records.forEach(r => {
            const m = monthFromDate(r.from_date || r.created_at) || 'Unknown';
            const officerId = r.user_id || r.staff_number || r.name || JSON.stringify(r);
            if(!monthMap[m]) monthMap[m] = new Set();
            monthMap[m].add(officerId);
        });
        const monthKeys = Object.keys(monthMap).sort((a,b)=> monthNames.indexOf(a) - monthNames.indexOf(b));
        monthChart.updateOptions({ xaxis: { categories: monthKeys } });
        monthChart.updateSeries([{ data: monthKeys.map(k => monthMap[k].size) }]);

        // 2) Meetings treemap (purpose)
        const meetingCounts = countBy(records, r => r.purpose || '');
        meetingsTreemap.updateOptions({ series: [{ data: mapToTreemapData(meetingCounts) }] });

        // 3) ITU sectors (only for records with sector)
        const ituCounts = countBy(records.filter(r => r.sector), r => r.sector || '');
        ituPie.updateOptions({ labels: Object.keys(ituCounts) });
        ituPie.updateSeries(Object.values(ituCounts));

        // 4) Levels treemap
        const levelCounts = countBy(records, r => r.level || r.equivalent_rank || '');
        levelsTreemap.updateOptions({ series: [{ data: mapToTreemapData(levelCounts) }] });

        // 5) Age buckets
        const buckets = ['≤30','31-40','41-50','51-60','>60'];
        const ageCounts = { '≤30':0,'31-40':0,'41-50':0,'51-60':0,'>60':0 };
        const thisYear = new Date().getFullYear();
        records.forEach(r => {
            if(r.date_of_birth){
                const by = (new Date(r.date_of_birth)).getFullYear();
                if(!isNaN(by)){
                    const age = thisYear - by;
                    if(age <= 30) ageCounts['≤30']++;
                    else if(age <=40) ageCounts['31-40']++;
                    else if(age <=50) ageCounts['41-50']++;
                    else if(age <=60) ageCounts['51-60']++;
                    else ageCounts['>60']++;
                }
            }
        });
        ageBar.updateOptions({ xaxis: { categories: buckets } });
        ageBar.updateSeries([{ data: buckets.map(b => ageCounts[b]) }]);

        // 6) Cadre pie
        const cadreCounts = countBy(records, r => r.cadre || '');
        cadrePie.updateOptions({ labels: Object.keys(cadreCounts) });
        cadrePie.updateSeries(Object.values(cadreCounts));

        // 7) Gender bar
        const genderCounts = countBy(records, r => r.gender || '');
        const genderCats = Object.keys(genderCounts);
        genderBar.updateOptions({ xaxis: { categories: genderCats } });
        genderBar.updateSeries([{ data: genderCats.map(k => genderCounts[k]) }]);

        // 8) Table
        const tbody = document.querySelector('tbody.table-border-bottom-0');
        tbody.innerHTML = '';
        records.forEach(r => {
            const name = (r.name && r.name.trim()) || (r.user && r.user.name && r.user.name.trim()) || r.staff_number || 'Unknown';
            const tr = document.createElement('tr');
            tr.innerHTML = `<td>${name}</td>
                            <td>${r.purpose || '-'}</td>
                            <td>${r.country || '-'}</td>
                            <td>${r.meeting_name || '-'}</td>
                            <td>${(r.level || r.equivalent_rank) || '-'}</td>`;
            tbody.appendChild(tr);
        });

        // 9) Map
        refreshMap(records);
    }

    // ---------- Main filter logic ----------
    function applyFilters(){
        const selMonth = normalizeString(filterMonthEl.value);
        const selPurpose = normalizeString(filterMeetingEl.value);
        const selCountry = normalizeString(filterCountryEl.value);
        const selCadre = normalizeString(filterCadreEl.value);
        const selGender = normalizeString(filterGenderEl.value);
        const selOfficer = normalizeString(officerFilterEl.value);
        const lvl = selectedLevelFilter ? normalizeString(selectedLevelFilter) : null;
        const sector = selectedSectorFilter ? normalizeString(selectedSectorFilter) : null;
        const ageBucket = activeAgeBucket || null;

        filteredData = rawData.filter(r => {
            // month
            if(selMonth){
                const m = monthFromDate(r.from_date || r.created_at) || '';
                if(m !== selMonth) return false;
            }
            // purpose / meeting
            if(selPurpose){
                if(normalizeString(r.purpose || '') !== selPurpose) return false;
            }
            // country
            if(selCountry){
                if(normalizeString(r.country || '') !== selCountry) return false;
            }
            // cadre
            if(selCadre){
                if(normalizeString(r.cadre || '') !== selCadre) return false;
            }
            // gender
            if(selGender){
                if(normalizeString(r.gender || '') !== selGender) return false;
            }
            // officer name
            if(selOfficer){
                const name = normalizeString(r.name || (r.user && r.user.name) || '');
                if(name !== selOfficer) return false;
            }
            // level (from levels treemap click)
            if(lvl){
                const lv = normalizeString(r.level || r.equivalent_rank || '');
                if(lv !== lvl) return false;
            }
            // sector (from ITU slice click)
            if(sector){
                const s = normalizeString(r.sector || '');
                if(s !== sector) return false;
            }
            // age bucket (from age bar click)
            if(ageBucket){
                if(!r.date_of_birth) return false;
                const by = (new Date(r.date_of_birth)).getFullYear();
                if(isNaN(by)) return false;
                const age = (new Date()).getFullYear() - by;
                if(ageBucket === '≤30' && age > 30) return false;
                if(ageBucket === '31-40' && (age < 31 || age > 40)) return false;
                if(ageBucket === '41-50' && (age < 41 || age > 50)) return false;
                if(ageBucket === '51-60' && (age < 51 || age > 60)) return false;
                if(ageBucket === '>60' && age <= 60) return false;
            }
            return true;
        });

        updateAll(filteredData);
    }

    // ---------- Hook up selects ----------
    [filterMonthEl, filterMeetingEl, filterCountryEl, filterCadreEl, filterGenderEl, officerFilterEl].forEach(el => {
        el.addEventListener('change', () => {
            // optional UX: when user uses selects, clear chart-click filters
            selectedLevelFilter = null;
            selectedSectorFilter = null;
            activeAgeBucket = null;
            applyFilters();
        });
    });

    // Clear button
    clearFiltersBtn.addEventListener('click', () => {
        filterMonthEl.value = '';
        filterMeetingEl.value = '';
        filterCountryEl.value = '';
        filterCadreEl.value = '';
        filterGenderEl.value = '';
        officerFilterEl.value = '';
        selectedLevelFilter = null;
        selectedSectorFilter = null;
        activeAgeBucket = null;
        applyFilters();
    });

    // ---------- Initial render ----------
    applyFilters(); // this will call updateAll for full data
});
</script>
@endpush
