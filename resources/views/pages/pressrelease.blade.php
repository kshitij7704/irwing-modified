@extends('frontend.partials.app')

@section('content')

<style>
    .page-header {
        padding: 50px 0;
        color: #fff;
        background-size: cover;
        background-position: center;
    }
    .page-title { font-weight: 700; }

    .filters-wrapper {
        background-color: #fff;
        border: 1px solid #e1e1e1;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        margin-bottom: 1.5rem;
    }
    .filters-wrapper label { font-weight: 600; margin-bottom: 4px; display: block; }
    .filters-wrapper .form-control, .filters-wrapper .btn { padding: 8px 12px; border-radius: 6px; }
    .filters-wrapper .btn { width: 100%; margin-top: 28px; }

    .release-count {
        font-weight: 600;
        margin-bottom: 1.5rem;
        background: #f1f5f9;
        padding: 10px 15px;
        border-radius: 6px;
    }
    .release-count span {
        background: #0d6efd;
        color: #fff;
        padding: 3px 8px;
        border-radius: 4px;
        margin-left: 5px;
    }

    .press-list { list-style: none; padding-left: 0; }
    .press-list li { padding: 12px 15px; border-bottom: 1px solid #e9ecef; transition: background 0.2s ease; }
    .press-list li:hover { background: #f8f9fa; }
    .press-link { font-weight: 500; color: #0d6efd; text-decoration: none; }
    .press-link:hover { text-decoration: underline; }
    .press-date { color: #6c757d; display: block; margin-top: 3px; }
</style>

<main class="main">
    <div class="page-header text-center" style="background-image: url('{{ asset('front/assets/images/page-header-bg.jpg') }}')">
        <div class="container">
            <h1 class="page-title">Press Releases</h1>
        </div>
    </div>

    <div class="page-content container" style="padding-top: 12px;">

        {{-- Filters --}}
        <div class="filters-wrapper">
            <div class="row">
                <div class="col-md-4">
                    <label for="titleSearch">Search by Title</label>
                    <input type="text" id="titleSearch" class="form-control" placeholder="Type title...">
                </div>
                <div class="col-md-4">
                    <label for="dateFilter">Date</label>
                    <input type="date" id="dateFilter" class="form-control">
                </div>
                <div class="col-md-4">
                    <button id="clearFilters" class="btn btn-outline-secondary">Clear Filters</button>
                </div>
            </div>
        </div>

        {{-- Total count --}}
        <div class="release-count">
            Total Press Releases: <span id="releaseCount">{{ count($pressReleases) }}</span>
        </div>

        {{-- Press list --}}
        <ul class="press-list" id="pressList">
            @forelse($pressReleases as $press)
                @php
                    // Handle both object and array formats
                    if(is_object($press)){
                        $title = $press->title;
                        $date = $press->date;
                        $url = $press->Url ?? url('press-release/'.$press->id);
                    } elseif(is_array($press)){
                        $title = $press['title'] ?? '';
                        $date = $press['date'] ?? '';
                        $url = $press['Url'] ?? url('press-release/'.$press['id'] ?? '');
                    } else {
                        continue;
                    }
                @endphp
                <li class="press-item" data-title="{{ strtolower($title) }}" data-date="{{ $date }}">
                    <a href="{{ $url }}" class="press-link" target="_blank">{{ $title }}</a>
                    <span class="press-date">{{ \Carbon\Carbon::parse($date)->format('F d, Y') }}</span>
                </li>
            @empty
                <li>No press releases found.</li>
            @endforelse
        </ul>

        <a href="https://www.pib.gov.in/Allrel.aspx?reg=3&lang=1" class="btn btn-primary">View All</a>
    </div>
</main>

<script>
const titleInput = document.getElementById('titleSearch');
const dateInput = document.getElementById('dateFilter');
const clearBtn = document.getElementById('clearFilters');
const releaseCountEl = document.getElementById('releaseCount');

titleInput.addEventListener('input', filterPress);
dateInput.addEventListener('change', filterPress);
clearBtn.addEventListener('click', () => {
    titleInput.value = '';
    dateInput.value = '';
    filterPress();
});

function filterPress() {
    const query = titleInput.value.toLowerCase().trim();
    const selectedDate = dateInput.value;

    let totalVisible = 0;

    document.querySelectorAll('.press-item').forEach(item => {
        const itemTitle = item.dataset.title || '';
        const itemDate = item.dataset.date || '';

        const matchesTitle = query === '' || itemTitle.includes(query);
        const matchesDate = selectedDate === '' || itemDate === selectedDate;

        if (matchesTitle && matchesDate) {
            item.style.display = '';
            totalVisible++;
        } else {
            item.style.display = 'none';
        }
    });

    releaseCountEl.textContent = totalVisible;
}

// initial count
filterPress();
</script>

@endsection
