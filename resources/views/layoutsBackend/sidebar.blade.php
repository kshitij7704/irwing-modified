<aside id="layout-menu" class="layout-menu menu-vertical menu">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
                <span class="text-primary">
                    <!-- Add logo image or SVG here if needed -->
                </span>
            </span>
            <span class="app-brand-text demo menu-text fw-bold ms-3"><a href="/"
                    class="logo d-flex align-items-center me-auto">
                    <!-- <img src="{{ asset('assets/img/logo-01.jpg') }}" alt="ailifebot logo" class="img-fluid"> -->
                    <!-- <h1 class="sitename">QuickStart</h1> -->

                    <span class="app-brand-text demo text-heading fw-bold">IR WING</span></a></span>
        </a>

        <!-- <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="icon-base ti tabler-layout-sidebar-right-expand d-none d-xl-block"></i>
            <i class="icon-base ti tabler-x d-block d-xl-none"></i>
        </a> -->
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item ">
            <a href="{{route('dashboard')}}" class="menu-link">
                <i class="menu-icon icon-base ti tabler-layout-dashboard"></i>
                <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>

        <!-- Apps & Pages Header -->
        <li class="menu-header small">
            <span class="menu-header-text" data-i18n="Apps & Pages">Apps &amp; Pages</span>
        </li>


        {{-- Submission --}}
        @roleCanAny(['submission.personal_performa.view', 'submission.tour_reports.view','submission.qrp.view'])
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ti ti-file-text"></i>
                <div data-i18n="Submission">Submission</div>
            </a>
            <ul class="menu-sub">
                @roleCan('submission.personal_performa.view')
                <li class="menu-item">
                    <a href="{{ route('personal-performa.index') }}" class="menu-link">
                        <div>Personal Performa and Justifications</div>
                    </a>
                </li>
                @endroleCan

                @roleCan('submission.tour_reports.view')
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div>Tour Reports and Presentations</div>
                    </a>
                </li>
                @endroleCan
                @roleCan('submission.qrp.view')
                <li class="menu-item"><a href="{{route('qrp.index')}}" class="menu-link">
                        <div>QRP</div>
                    </a></li>
                @endroleCan
            </ul>
        </li>
        @endroleCanAny

        {{-- Generation --}}
        @roleCanAny(['generation.personal_performa.view', 'generation.visit_tracker.view',
        'generation.sanction_memos.view', 'generation.qrp.view'])
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ti ti-edit"></i>
                <div data-i18n="Generation">Generation</div>
            </a>
            <ul class="menu-sub">
                @roleCan('generation.personal_performa.view')
                <li class="menu-item"><a href="{{ route('personal-performa-generation.index') }}" class="menu-link">
                        <div>Personal Performa and Justifications</div>
                    </a></li>
                @endroleCan

                @roleCan('generation.visit_tracker.view')
                <li class="menu-item"><a href="#" class="menu-link">
                        <div>Visit tracker</div>
                    </a></li>
                @endroleCan

                @roleCan('generation.sanction_memos.view')
                <li class="menu-item"><a href="#" class="menu-link">
                        <div>Sanction Memos</div>
                    </a></li>
                @endroleCan


                @roleCan('generation.qrp.view')
                <li class="menu-item"><a href="{{route('qrp-generation.index')}}" class="menu-link">
                        <div>QRP</div>
                    </a></li>
                @endroleCan
            </ul>
        </li>
        @endroleCanAny

        {{-- Repository --}}
        @roleCanAny(['repository.tour_reports.view', 'repository.presentations.view', 'repository.action_points.view',
        'repository.officer_database.view', 'repository.itu_focal_points.view',
        'repository.indian_mission_contact.view', 'repository.country_mission_master_sheet.view'])
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ti ti-database"></i>
                <div data-i18n="Repository">Repository</div>
            </a>
            <ul class="menu-sub">
                @roleCan('repository.tour_reports.view')
                <li class="menu-item"><a href="#" class="menu-link">
                        <div>Tour Reports</div>
                    </a></li>
                @endroleCan

                @roleCan('repository.presentations.view')
                <li class="menu-item"><a href="#" class="menu-link">
                        <div>Presentations</div>
                    </a></li>
                @endroleCan

                @roleCan('repository.action_points.view')
                <li class="menu-item"><a href="#" class="menu-link">
                        <div>Action Points</div>
                    </a></li>
                @endroleCan

                @roleCan('repository.officer_database.view')
                <li class="menu-item"><a href="#" class="menu-link">
                        <div>Officer Database</div>
                    </a></li>
                @endroleCan

                @roleCan('repository.itu_focal_points.view')
                <li class="menu-item"><a href="#" class="menu-link">
                        <div>ITU Focal points</div>
                    </a></li>
                @endroleCan

                @roleCan('repository.indian_mission_contact.view')
                <li class="menu-item"><a href="#" class="menu-link">
                        <div>Indian Mission contact</div>
                    </a></li>
                @endroleCan

                @roleCan('repository.country_mission_master_sheet.view')
                <li class="menu-item"><a href="#" class="menu-link">
                        <div>Country's Mission Master sheet</div>
                    </a></li>
                @endroleCan
            </ul>
        </li>
        @endroleCanAny

        {{-- Engagement --}}
        @roleCanAny(['engagement.bilateral_tracker.view', 'engagement.multilateral_tracker.view',
        'engagement.mou_foreign_countries.view', 'engagement.country_profile.view',
        'engagement.itu_council_tracker.view', 'engagement.itu_council_emails.view'])
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ti ti-world"></i>
                <div data-i18n="Bilateral & Multilateral">Bilateral & Multilateral Engagement</div>
            </a>
            <ul class="menu-sub">
                @roleCan('engagement.bilateral_tracker.view')
                <li class="menu-item"><a href="#" class="menu-link">
                        <div>Bilateral Engagement Tracker</div>
                    </a></li>
                @endroleCan

                @roleCan('engagement.multilateral_tracker.view')
                <li class="menu-item"><a href="#" class="menu-link">
                        <div>Multilateral Engagement Tracker</div>
                    </a></li>
                @endroleCan

                @roleCan('engagement.mou_foreign_countries.view')
                <li class="menu-item"><a href="#" class="menu-link">
                        <div>MoU with foreign Countries</div>
                    </a></li>
                @endroleCan

                @roleCan('engagement.country_profile.view')
                <li class="menu-item"><a href="#" class="menu-link">
                        <div>Country Profile</div>
                    </a></li>
                @endroleCan

                @roleCan('engagement.itu_council_tracker.view')
                <li class="menu-item"><a href="#" class="menu-link">
                        <div>ITU Council 2026 Nodal Point Tracker</div>
                    </a></li>
                @endroleCan

                @roleCan('engagement.itu_council_emails.view')
                <li class="menu-item"><a href="#" class="menu-link">
                        <div>ITU Council 2026 Email to Nodal Points</div>
                    </a></li>
                @endroleCan
            </ul>
        </li>
        @endroleCan

        {{-- Reports --}}
        @roleCanAny(['reports.yearwise_foreign_visits.view', 'reports.officer_participation.view',
        'reports.bilateral_summary.view', 'reports.multilateral_summary.view', 'reports.visit_tracker.view'])
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ti ti-report"></i>
                <div data-i18n="Reports">Reports</div>
            </a>
            <ul class="menu-sub">
                @roleCan('reports.yearwise_foreign_visits.view')
                <li class="menu-item"><a href="#" class="menu-link">
                        <div>Year-Wise Foreign Visits</div>
                    </a></li>
                @endroleCan

                @roleCan('reports.officer_participation.view')
                <li class="menu-item"><a href="#" class="menu-link">
                        <div>Officer level participation</div>
                    </a></li>
                @endroleCan

                @roleCan('reports.bilateral_summary.view')
                <li class="menu-item"><a href="#" class="menu-link">
                        <div>Bilateral Engagement Summary</div>
                    </a></li>
                @endroleCan

                @roleCan('reports.multilateral_summary.view')
                <li class="menu-item"><a href="#" class="menu-link">
                        <div>Multilateral Engagement Summary</div>
                    </a></li>
                @endroleCan

                @roleCan('reports.visit_tracker.view')
                <li class="menu-item"><a href="#" class="menu-link">
                        <div>Visit Tracker</div>
                    </a></li>
                @endroleCan
            </ul>
        </li>
        @endroleCan

        {{-- Users --}}
        @roleCan('users.view')
        <li class="menu-item">
            <a href="{{ route('users.index') }}" class="menu-link">
                <i class="menu-icon icon-base ti tabler-user"></i>
                <div data-i18n="Users">Users</div>
            </a>
        </li>
        @endroleCan

        {{-- Roles & Permissions --}}
        @roleCanAny(['permissions.view', 'roles.view'])
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon icon-base ti tabler-shield-lock"></i>
                <div data-i18n="Roles & Permissions">Roles & Permissions</div>
            </a>
            <ul class="menu-sub">
                @roleCan('roles.view')
                <li class="menu-item">
                    <a href="{{route('roles.index')}}" class="menu-link">
                        <div data-i18n="Roles">Roles</div>
                    </a>
                </li>
                @endroleCan

                @roleCan('permissions.view')
                <li class="menu-item">
                    <a href="{{route('permissions.index')}}" class="menu-link">
                        <div data-i18n="Permission">Permission</div>
                    </a>
                </li>
                @endroleCan
            </ul>
        </li>
        @endroleCanAny

        {{-- Roles & Permissions --}}
        @roleCanAny(['permissions.view', 'roles.view'])
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon icon-base ti tabler-shield-lock"></i>
                <div data-i18n="Frontend Pages">Frontend Pages</div>
            </a>
            <ul class="menu-sub">
                @roleCan('roles.view')
                <li class="menu-item">
                    <a href="{{route('orm-data.index')}}" class="menu-link">
                        <div data-i18n="Orms">Orms</div>
                    </a>
                </li>
                @endroleCan

                @roleCan('permissions.view')
                <li class="menu-item">
                    <a href="{{route('permissions.index')}}" class="menu-link">
                        <div data-i18n="page 2">page 2</div>
                    </a>
                </li>
                @endroleCan
            </ul>
        </li>
        @endroleCanAny

        <li class="menu-item">
            <a href="{{ route('profile.index') }}" class="menu-link">
                <i class="menu-icon icon-base ti tabler-user"></i>
                <div data-i18n="Profile">Profile</div>
            </a>
        </li>

    </ul>
</aside>
