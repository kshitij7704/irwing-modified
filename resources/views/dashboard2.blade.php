@extends('layoutsBackend.app')

@section('content')

@php
    $activeRole = session('active_role') ?? auth()->user()->getRoleNames()->first();
@endphp

@if($activeRole == 'admin')
<div class="container-xxl flex-grow-1 container-p-y">

    {{-- Header --}}
    <div class="row g-6 mb-4">
        <div class="col-12 d-flex align-items-center justify-content-between flex-wrap">
            <h4 class="mb-0">Contributions Dashboard</h4>

            <div class="d-flex gap-2 align-items-center flex-wrap">
                <label class="mb-0 me-2">Month</label>
                <select id="filterMonth" class="form-select d-inline-block" style="width: 160px;">
                    <option value="">All</option>
                </select>

                <label class="mb-0 me-2">Study Group</label>
                <select id="filterStudyGroup" class="form-select d-inline-block" style="width: 180px;">
                    <option value="">All</option>
                </select>

                <label class="mb-0 me-2">Type</label>
                <select id="filterType" class="form-select d-inline-block" style="width: 160px;">
                    <option value="">All</option>
                    <option value="ITU-T">ITU-T</option>
                    <option value="ITU-R">ITU-R</option>
                    <option value="ITU_D">ITU-D</option>
                    <option value="ITU_D">ITU_D</option>
                </select>

                <label class="mb-0 me-2">Priority</label>
                <select id="filterPriority" class="form-select d-inline-block" style="width: 120px;">
                    <option value="">All</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>

                <label class="mb-0 me-2">Officer</label>
                <select id="filterOfficer" class="form-select d-inline-block" style="width: 220px;">
                    <option value="">All</option>
                </select>

                <button id="clearFilters" class="btn btn-outline-secondary">Clear</button>
            </div>
        </div>
    </div>

    {{-- Charts Row --}}
    <div class="row g-6 mb-6">
        <div class="col-lg-6 col-12">
            <div class="card">
                <div class="card-header"><h5 class="card-title mb-0">Month-wise contributions</h5></div>
                <div class="card-body"><div id="monthWiseContribChart"></div></div>
            </div>
        </div>

        <div class="col-lg-6 col-12">
            <div class="card">
                <div class="card-header"><h5 class="card-title mb-0">Contribution types</h5></div>
                <div class="card-body"><div id="typePieChart"></div></div>
            </div>
        </div>
    </div>

    {{-- Priority bar --}}
    <div class="row g-6 mb-6">
        <div class="col-md-8 col-12">
            <div class="card">
                <div class="card-header"><h5 class="card-title mb-0">Priority counts</h5></div>
                <div class="card-body"><div id="priorityBarChart"></div></div>
            </div>
        </div>
    </div>

    {{-- Contributions Table --}}
    <div class="row g-6 mb-6">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><h5 class="card-title">Contributions</h5></div>
                <div class="table-responsive text-nowrap" style="max-height: 520px; overflow-y: auto;">
                    <table class="table">
                        <thead class="sticky-top bg-white">
                            <tr>
                                <th>Study Group</th>
                                <th>Question</th>
                                <th>Work Item</th>
                                <th>Contribution Type</th>
                                <th>Brief</th>
                                <th>Date</th>
                                <th>Officers</th>
                                <th>Type</th>
                                <th>Priority</th>
                                <th>Status</th>
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    // ---------- Raw data ----------
    let rawData = @json($ITUContribution ?? []);
    if (!Array.isArray(rawData)) rawData = [];
    // normalize each record slightly so field names are predictable
    rawData = rawData.map(r => ({
        id: r.id ?? null,
        study_group: r.study_group ?? '',
        question: r.question ?? '',
        work_item: r.work_item ?? '',
        contribution_type: r.contribution_type ?? '',
        contribution_brief: r.contribution_brief ?? '',
        date_of_contribution: r.date_of_contribution ?? r.created_at ?? '',
        officers: r.officers ?? '',
        type: r.type ?? '',
        priority: (r.priority === null || r.priority === undefined) ? '' : String(r.priority).toLowerCase(),
        status: r.status ?? ''
    }));

    let filteredData = rawData.slice();

    // ---------- Utilities ----------
    const monthNames = ['January','February','March','April','May','June','July','August','September','October','November','December'];
    function normalizeString(v){ return (v === null || v === undefined) ? '' : String(v).trim(); }
    function monthFromDate(dstr){
        if(!dstr) return null;
        // try ISO-like, or yyyy-mm-dd, or other parseable formats
        const d = new Date(dstr);
        if(isNaN(d.getTime())){
            // try to parse yyyy-mm or yyyy-mm-dd manually
            const m = dstr.match(/(\d{4})[-\/](\d{1,2})/);
            if(m){
                const monthIndex = parseInt(m[2],10) - 1;
                if(monthIndex >=0 && monthIndex < 12) return monthNames[monthIndex];
            }
            return null;
        }
        return monthNames[d.getMonth()];
    }
    function countBy(records, keyFn){
        const m = {};
        records.forEach(r => {
            const k = normalizeString(keyFn(r));
            if(!k) return;
            m[k] = (m[k]||0) + 1;
        });
        return m;
    }
    function ensureSelect(sel, values){
        // remove existing non-empty options (keep first option)
        const firstOpt = sel.options[0];
        sel.innerHTML = '';
        sel.appendChild(firstOpt);
        const unique = Array.from(new Set(values.filter(v=>v && v !== ''))).sort();
        unique.forEach(v => sel.appendChild(new Option(v, v)));
    }

    // ---------- DOM elements ----------
    const filterMonthEl = document.getElementById('filterMonth');
    const filterStudyGroupEl = document.getElementById('filterStudyGroup');
    const filterTypeEl = document.getElementById('filterType');
    const filterPriorityEl = document.getElementById('filterPriority');
    const filterOfficerEl = document.getElementById('filterOfficer');
    const clearFiltersBtn = document.getElementById('clearFilters');

    // ---------- Populate selects with distinct values ----------
    function populateSelects(){
        const months = new Set();
        const studyGroups = new Set();
        const officers = new Set();
        const types = new Set();
        const priorities = new Set();

        rawData.forEach(r=>{
            const m = monthFromDate(r.date_of_contribution);
            if(m) months.add(m);
            if(r.study_group) studyGroups.add(r.study_group);
            if(r.officers){
                // officers field may contain newlines or numbered list: split by newline/semicolon/comma and add individually
                const parts = String(r.officers).split(/\n|;|,/).map(s=>s.trim()).filter(Boolean);
                parts.forEach(p => officers.add(p));
            }
            if(r.type) types.add(r.type);
            if(r.priority) priorities.add(r.priority);
        });

        // fill selects
        // month: sorted by monthNames
        const monthList = Array.from(months).sort((a,b)=> monthNames.indexOf(a) - monthNames.indexOf(b));
        // study groups
        const studyGroupList = Array.from(studyGroups).sort();
        const officerList = Array.from(officers).sort();
        const typeList = Array.from(types).sort();
        const priorityList = Array.from(priorities).sort();

        // inject options
        // helper to populate preserving first "All" option
        function setOptions(selectEl, list){
            selectEl.innerHTML = '';
            selectEl.appendChild(new Option('All', ''));
            list.forEach(v => selectEl.appendChild(new Option(v, v)));
        }
        setOptions(filterMonthEl, monthList);
        setOptions(filterStudyGroupEl, studyGroupList);
        // filterTypeEl already has some options from blade; let's merge
        // we will ensure default "All" exists then append any types not present
        (function fillType(){
            const existing = Array.from(filterTypeEl.options).map(o=>o.value);
            const toAdd = typeList.filter(t => !existing.includes(t));
            toAdd.forEach(t => filterTypeEl.appendChild(new Option(t, t)));
        })();
        setOptions(filterPriorityEl, priorityList.length ? priorityList : ['yes','no']);
        setOptions(filterOfficerEl, officerList);
    }
    populateSelects();

    // ---------- ApexCharts instances ----------
    const monthChart = new ApexCharts(document.querySelector("#monthWiseContribChart"), {
        chart: { type: 'bar', height: 340 },
        series: [{ name: 'Contributions', data: [] }],
        xaxis: { categories: [] },
        tooltip: { y: { formatter: function(val){ return val + " contributions"; } } }
    });
    monthChart.render();

    const typePie = new ApexCharts(document.querySelector("#typePieChart"), {
        chart: { type: 'pie', height: 340 },
        series: [],
        labels: [],
        legend: { position: 'bottom' }
    });
    typePie.render();

    const priorityBar = new ApexCharts(document.querySelector("#priorityBarChart"), {
        chart: { type: 'bar', height: 300 },
        series: [{ name: 'Count', data: [] }],
        xaxis: { categories: [] }
    });
    priorityBar.render();

    // ---------- Data -> update all charts & table ----------
    function updateAll(records){
        // Month chart
        const monthMap = {};
        records.forEach(r => {
            const m = monthFromDate(r.date_of_contribution) || 'Unknown';
            monthMap[m] = (monthMap[m] || 0) + 1;
        });
        const monthKeys = Object.keys(monthMap).sort((a,b)=> {
            const ia = monthNames.indexOf(a), ib = monthNames.indexOf(b);
            if(ia === -1 && ib === -1) return a.localeCompare(b);
            if(ia === -1) return 1;
            if(ib === -1) return -1;
            return ia - ib;
        });
        monthChart.updateOptions({ xaxis: { categories: monthKeys } });
        monthChart.updateSeries([{ data: monthKeys.map(k => monthMap[k]) }]);

        // Type pie
        const typeCounts = countBy(records, r => r.type || 'Unknown');
        const typeLabels = Object.keys(typeCounts);
        const typeValues = typeLabels.map(l => typeCounts[l]);
        typePie.updateOptions({ labels: typeLabels });
        typePie.updateSeries(typeValues);

        // Priority bar
        const priorityCounts = countBy(records, r => (r.priority || 'no').toLowerCase() );
        const prCats = Object.keys(priorityCounts);
        priorityBar.updateOptions({ xaxis: { categories: prCats } });
        priorityBar.updateSeries([{ data: prCats.map(c => priorityCounts[c]) }]);

        // Table
        const tbody = document.querySelector('tbody.table-border-bottom-0');
        tbody.innerHTML = '';
        records.forEach(r => {
            const tr = document.createElement('tr');
            const brief = (r.contribution_brief && r.contribution_brief.length > 180) ? (r.contribution_brief.substring(0,180) + '...') : r.contribution_brief;
            tr.innerHTML = `<td>${escapeHtml(r.study_group)}</td>
                            <td>${escapeHtml(r.question)}</td>
                            <td>${escapeHtml(r.work_item)}</td>
                            <td>${escapeHtml(r.contribution_type)}</td>
                            <td title="${escapeAttribute(r.contribution_brief)}">${escapeHtml(brief || '-')}</td>
                            <td>${escapeHtml(r.date_of_contribution ? formatDate(r.date_of_contribution) : '')}</td>
                            <td>${escapeHtml(r.officers)}</td>
                            <td>${escapeHtml(r.type)}</td>
                            <td>${escapeHtml(r.priority)}</td>
                            <td>${escapeHtml(r.status)}</td>`;
            tbody.appendChild(tr);
        });
    }

    // ---------- Helpers ----------
    function formatDate(dstr){
        if(!dstr) return '';
        const d = new Date(dstr);
        if(isNaN(d.getTime())){
            // try more friendly fallback: show original string
            return dstr;
        }
        return d.toLocaleDateString();
    }
    function escapeHtml(s){
        if(s === null || s === undefined) return '';
        return String(s)
            .replace(/&/g, '&amp;')
            .replace(/</g, '&lt;')
            .replace(/>/g, '&gt;');
    }
    function escapeAttribute(s){
        if(s === null || s === undefined) return '';
        return String(s).replace(/"/g, '&quot;').replace(/'/g, '&#39;');
    }

    // ---------- Main filter logic ----------
    function applyFilters(){
        const selMonth = normalizeString(filterMonthEl.value);
        const selStudyGroup = normalizeString(filterStudyGroupEl.value);
        const selType = normalizeString(filterTypeEl.value);
        const selPriority = normalizeString(filterPriorityEl.value);
        const selOfficer = normalizeString(filterOfficerEl.value);

        filteredData = rawData.filter(r => {
            if(selMonth){
                const m = monthFromDate(r.date_of_contribution) || '';
                if(m !== selMonth) return false;
            }
            if(selStudyGroup){
                if(normalizeString(r.study_group) !== selStudyGroup) return false;
            }
            if(selType){
                if(normalizeString(r.type) !== selType) return false;
            }
            if(selPriority){
                if(normalizeString(r.priority) !== selPriority) return false;
            }
            if(selOfficer){
                // officer filtering: check if any of the comma/newline-separated parts match exactly
                const parts = String(r.officers || '').split(/\n|;|,/).map(p=>p.trim()).filter(Boolean);
                const found = parts.some(p => normalizeString(p) === selOfficer);
                if(!found) return false;
            }
            return true;
        });

        updateAll(filteredData);
    }

    // ---------- Hook up selects ----------
    [filterMonthEl, filterStudyGroupEl, filterTypeEl, filterPriorityEl, filterOfficerEl].forEach(el => {
        el.addEventListener('change', () => applyFilters());
    });

    clearFiltersBtn.addEventListener('click', () => {
        filterMonthEl.value = '';
        filterStudyGroupEl.value = '';
        filterTypeEl.value = '';
        filterPriorityEl.value = '';
        filterOfficerEl.value = '';
        applyFilters();
    });

    // ---------- Click interactions from charts ----------
    // Month chart: click to set month filter
    monthChart.updateOptions({
        chart: {
            events: {
                dataPointSelection: function(event, chartContext, config){
                    const idx = config.dataPointIndex;
                    if(idx !== undefined){
                        const label = chartContext.w.config.xaxis.categories[idx];
                        if(label){
                            filterMonthEl.value = label;
                            applyFilters();
                        }
                    }
                }
            }
        }
    });

    // typePie: clicking slice will set type filter
    typePie.updateOptions({
        chart: {
            events: {
                dataPointSelection: function(event, chartContext, config){
                    const idx = config.dataPointIndex;
                    if(idx !== undefined){
                        const label = chartContext.w.config.labels[idx];
                        if(label){
                            filterTypeEl.value = label;
                            applyFilters();
                        }
                    }
                }
            }
        }
    });

    // priorityBar: clicking bar sets priority filter
    priorityBar.updateOptions({
        chart: {
            events: {
                dataPointSelection: function(event, chartContext, config){
                    const idx = config.dataPointIndex;
                    if(idx !== undefined){
                        const label = chartContext.w.config.xaxis.categories[idx];
                        if(label){
                            filterPriorityEl.value = label;
                            applyFilters();
                        }
                    }
                }
            }
        }
    });

    // ---------- Initial render ----------
    applyFilters(); // will render all charts & table

});
</script>
@endpush
