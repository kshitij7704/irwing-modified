@extends('frontend.partials.app')

@section('content')

<style>
    /* Page header */
    .page-header {
        padding: 50px 0;
        color: #fff;
        background-size: cover;
        background-position: center;
    }
    .page-title {
        font-weight: 700;
    }

    /* Filters */
    .filters-wrapper {
        background-color: #ffffff;
        border: 1px solid #e1e1e1;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        margin-bottom: 1.5rem;
    }
    .filters-wrapper label {
        font-weight: 600;
        margin-bottom: 4px;
        display: block;
    }
    .filters-wrapper .form-control,
    .filters-wrapper .btn {
        padding: 8px 12px;
        border-radius: 6px;
    }
    .filters-wrapper .btn {
        width: 100%;
        margin-top: 28px;
    }

    /* Count badge */
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

    /* Ministry blocks */
    .ministry-block {
        margin-bottom: 2rem;
    }
    .ministry-title {
        font-weight: 700;
        margin-bottom: 0.75rem;
        color: #0d6efd;
        border-left: 4px solid #0d6efd;
        padding-left: 10px;
    }
    .press-list {
        list-style: none;
        padding-left: 0;
    }
    .press-list li {
        padding: 12px 15px;
        border-bottom: 1px solid #e9ecef;
        transition: background 0.2s ease;
    }
    .press-list li:hover {
        background: #f8f9fa;
    }
    .press-link {
        font-weight: 500;
        color: #0d6efd;
        text-decoration: none;
    }
    .press-link:hover {
        text-decoration: underline;
    }
    .press-date {
        color: #6c757d;
        display: block;
        margin-top: 3px;
    }
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
                    <label for="ministrySearch">Search </label>
                    <input type="text" id="ministrySearch" class="form-control" placeholder="Type name...">
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
            Total Press Releases: <span id="releaseCount">{{ $pressReleases->count() }}</span>
        </div>

        {{-- Group by ministry --}}
        <div id="pressList">
            @foreach($pressReleases->groupBy('ministry') as $ministryName => $releases)
                <div class="ministry-block" data-ministry="{{ $ministryName }}">
                    <div class="ministry-title">{{ $ministryName }}</div>
                    <ul class="press-list">
                        @foreach($releases as $press)
                            <li class="press-item" data-ministry="{{ $press->ministry }}" data-date="{{ $press->date }}">
                                <a href="{{ $press->url }}" 
                                   class="press-link" 
                                   target="_blank">
                                    {{ $press->title }}
                                </a>
                                <span class="press-date">
                                    {{ \Carbon\Carbon::parse($press->date)->format('F d, Y') }}
                                </span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
            <a href="https://www.pib.gov.in/Allrel.aspx?reg=3&lang=1" class="btn btn-primary">View All</a>
        </div>
    </div>
</main>

<script>const searchInput = document.getElementById('ministrySearch');
const dateInput = document.getElementById('dateFilter');
const clearBtn = document.getElementById('clearFilters');
const releaseCountEl = document.getElementById('releaseCount');

searchInput.addEventListener('input', filterPress);
dateInput.addEventListener('change', filterPress);
clearBtn.addEventListener('click', () => {
    searchInput.value = '';
    dateInput.value = '';
    filterPress();
});

function filterPress() {
    const query = searchInput.value.toLowerCase().trim();
    const selectedDate = dateInput.value;

    let totalVisible = 0;

    document.querySelectorAll('.ministry-block').forEach(block => {
        let blockName = block.dataset.ministry.toLowerCase();
        let blockMatches = query === '' || blockName.includes(query);

        let items = block.querySelectorAll('.press-item');
        let visibleCount = 0;

        items.forEach(item => {
            let itemMinistry = item.dataset.ministry.toLowerCase();
            let itemDate = item.dataset.date;

            let matchesText = query === '' || itemMinistry.includes(query);
            let matchesDate = selectedDate === '' || itemDate === selectedDate;

            if (matchesText && matchesDate) {
                item.style.display = '';
                visibleCount++;
            } else {
                item.style.display = 'none';
            }
        });

        block.style.display = (blockMatches && visibleCount > 0) ? '' : 'none';
        totalVisible += visibleCount;
    });

    releaseCountEl.textContent = totalVisible;
}


</script>

@endsection
