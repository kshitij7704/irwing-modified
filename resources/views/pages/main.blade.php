@extends('frontend.partials.app')
@section('content')
<style>
    @media screen and (min-width: 1200px) {

        .intro-slider-container,
        .intro-slide {
            height: 296px !important;
        }
    }

</style>

<main class="main">
    <div class="intro-slider-container">
        <div class="owl-carousel owl-simple owl-light owl-nav-inside" data-toggle="owl"
            data-owl-options='{"nav": false}'>
            @foreach(\App\Models\Slider::where('status', true)->get() as $slide)
            <div class="intro-slide" style="background-image: url('{{ asset('storage/'.$slide->image) }}');">
                <div class="container intro-content">
                    @if($slide->title)
                    <h2 class="text-white">{{ $slide->title }}</h2>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
        <span class="slider-loader text-white"></span>
    </div>
    <div class="mb-3 mb-lg-5"></div><!-- End .mb-3 mb-lg-5 -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Minister Messages Left Column -->
            <div class="col-md-7 minister-messages">
                @foreach($ministerMessages as $msg)
                <div class="minister-row">
                    <div class="minister-photo">
                        <img src="{{ asset('storage/' . $msg->photo) }}" alt="{{ $msg->name }}">
                    </div>
                    <div class="minister-text">
                        <h5>Message from the Hon'ble {{ $msg->title }}</h5>
                        <p>{{ $msg->message }}</p>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Latest Updates Right Column -->
            <div class="col-md-5">
                <div class="latest-updates">
                    <h4>Latest Updates</h4>
                    <div class="updates-wrapper">
                        <div class="update-item">Update 1: Telecom policy revised for faster 5G rollout.</div>
                        <div class="update-item">Update 2: New broadband connectivity initiative launched in rural
                            areas.</div>
                        <div class="update-item">Update 3: Mobile call drop rate reduced nationwide.</div>
                        <div class="update-item">Update 4: Department to organize awareness campaigns on digital
                            literacy.</div>
                        <div class="update-item">Update 5: Fiber optic expansion completed in 200 villages.</div>
                        <!-- Repeat same updates to make smooth scroll -->
                        <div class="update-item">Update 1: Telecom policy revised for faster 5G rollout.</div>
                        <div class="update-item">Update 2: New broadband connectivity initiative launched in rural
                            areas.</div>
                        <div class="update-item">Update 3: Mobile call drop rate reduced nationwide.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl flex-grow-1 container-p-y mb-5" style="    margin-top: 40px;">
        <div class="row g-4">
            <!-- Announcements -->
            <div class="col-md-6">
                <div class="card shadow-sm border-0 rounded-4">
                    <h5 class="fw-bold mb-3">Latest Announcements & Circulars</h5>
                    <div class="card-body">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-3">
                                <a href="{{ asset('assets/pdfs/om7.pdf') }}"
                                    class="text-decoration-none fw-semibold text-primary">
                                    Strategy Paper for ITU Engagement & Outreach
                                </a>
                                <div class="small text-muted">28-04-2025</div>
                            </li>
                            <li class="mb-3">
                                <a href="{{ asset('assets/pdfs/om6.pdf') }}"
                                    class="text-decoration-none fw-semibold text-primary">
                                    Action Plan to Showcase Indigenous Telecom/ICT Technologies
                                </a>
                                <div class="small text-muted">22-04-2025</div>
                            </li>
                            <li class="mb-3">
                                <a href="{{ asset('assets/pdfs/om3.pdf') }}"
                                    class="text-decoration-none fw-semibold text-primary">
                                    Prioritization of ITU-T Study Group Questions
                                </a>
                                <div class="small text-muted">13-03-2025</div>
                            </li>
                            <li>
                                <a href="{{ url('pages/ir-wing-oms.html') }}"
                                    class="fw-bold text-decoration-none text-primary">View All Circulars →</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Calendar -->
            <div class="col-md-6">
                <div class="card shadow-sm border-0 rounded-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="fw-bold mb-0">Event Calendar – September 2025</h5>
                            <a href="#" class="text-decoration-none text-primary fw-semibold small">View Full Calendar
                                →</a>
                        </div>

                        <div id="calendar" class="calendar" data-year="2025" data-month="8">
                            <div class="calendar-weekdays">
                                <div>Sun</div>
                                <div>Mon</div>
                                <div>Tue</div>
                                <div>Wed</div>
                                <div>Thu</div>
                                <div>Fri</div>
                                <div>Sat</div>
                            </div>
                            <div id="calendar-grid" class="calendar-grid"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .calendar {
            width: 100%;
        }

        .calendar-weekdays {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            text-align: center;
            font-weight: 600;
            color: #6c757d;
            margin-bottom: 10px;
        }

        .calendar-grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 8px;
        }

        .day {
            min-height: 90px;
            border-radius: 12px;
            padding: 6px;
            background: #f8f9fa;
            position: relative;
            transition: all .2s ease-in-out;
            display: flex;
            flex-direction: column;
        }

        .day:hover {
            background: #eef3ff;
            transform: scale(1.02);
        }

        .day.empty {
            background: transparent;
            box-shadow: none;
        }

        .day-num {
            font-weight: 600;
            margin-bottom: 6px;
            color: #212529;
        }

        .today {
            border: 2px solid #4f46e5;
        }

        .events {
            margin-top: auto;
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .event-pill {
            padding: 4px 6px;
            border-radius: 6px;
            color: #fff;
            font-weight: 500;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            background: linear-gradient(135deg, #4f46e5, #6366f1);
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
        }

        .event-more {
            color: #6c757d;
        }

        @media(max-width:767px) {
            .day {
                min-height: 70px;
            }
        }

    </style>

    <script>
        (function () {
            const calEl = document.getElementById("calendar");
            const grid = document.getElementById("calendar-grid");
            const year = +calEl.dataset.year,
                month = +calEl.dataset.month;

            // ✅ Inject backend data
            const events = @json($events);

            const map = {};
            events.forEach(ev => {
                (map[ev.date] = map[ev.date] || []).push(ev);
            });

            const first = new Date(year, month, 1),
                last = new Date(year, month + 1, 0);
            const startDay = first.getDay(),
                total = last.getDate();

            // Empty slots
            for (let i = 0; i < startDay; i++) {
                grid.innerHTML += `<div class="day empty"></div>`;
            }

            // Days
            for (let d = 1; d <= total; d++) {
                const ds = `${year}-${String(month+1).padStart(2,"0")}-${String(d).padStart(2,"0")}`;
                const today = new Date(),
                    isToday = (d === today.getDate() && month === today.getMonth() && year === today.getFullYear());
                const evs = map[ds] || [];

                let pills = "";
                if (evs.length <= 2) {
                    evs.forEach(ev => {
                        const color = ev.color || "#6366f1";
                        pills += `<div class="event-pill" style="background:${color}">${ev.title}</div>`;
                    });
                } else {
                    pills +=
                        `<div class="event-pill" style="background:${evs[0].color || "#6366f1"}">${evs[0].title}</div>`;
                    pills += `<div class="event-more">+${evs.length-1} more</div>`;
                }

                grid.innerHTML += `
              <div class="day ${isToday?'today':''}">
                <div class="day-num">${d}</div>
                <div class="events">${pills}</div>
              </div>
            `;
            }
        })();

    </script>

    <div class="mb-3"></div><!-- End .mb-6 -->
</main>

@endsection
