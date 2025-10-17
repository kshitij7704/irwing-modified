@extends('layoutsBackend.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row g-6">

        <div class="row g-6 mb-6">
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="content-left">
                                <span class="text-heading">Total Officers</span>
                                <div class="d-flex align-items-center my-1">
                                    <h4 class="mb-0 me-2">2</h4>
                                </div>
                            </div>
                            <div class="avatar">
                                <span class="avatar-initial rounded bg-label-primary">
                                    <i class="icon-base ti tabler-users icon-26px"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="content-left">
                                <span class="text-heading">Total Tours</span>
                                <div class="d-flex align-items-center my-1">
                                    <h4 class="mb-0 me-2">4</h4>
                                </div>
                            </div>
                            <div class="avatar">
                                <span class="avatar-initial rounded bg-label-danger">
                                    <i class="icon-base ti tabler-user-plus icon-26px"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="content-left">
                                <span class="text-heading">Total Qrp Forms</span>
                                <div class="d-flex align-items-center my-1">
                                    <h4 class="mb-0 me-2">8</h4>
                                </div>
                            </div>
                            <div class="avatar">
                                <span class="avatar-initial rounded bg-label-success">
                                    <i class="icon-base ti tabler-user-check icon-26px"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="content-left">
                                <span class="text-heading">Total Visits</span>
                                <div class="d-flex align-items-center my-1">
                                    <h4 class="mb-0 me-2">2</h4>
                                </div>
                            </div>
                            <div class="avatar">
                                <span class="avatar-initial rounded bg-label-warning">
                                    <i class="icon-base ti tabler-user-search icon-26px"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                @roleCan('submission.personal_performa.view')
            <!-- for officers dashboard -->
            @php
            $qrps = null;
            $profile = \App\Models\Profile::where('user_id', Auth::user()->id)->first();
            if($profile){

            $qrps = \App\Models\QrpForm::where('staff_no',$profile->staff_no)->get();
            }
            @endphp
            @if($qrps)
            <!-- <div class="col-sm-6 col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="content-left">
                                <span class="text-heading">Upcoming Events</span>
                                <div class="d-flex align-items-center my-1">
                                    @foreach($qrps as $qrp)
                                    <h4 class="mb-0 me-2">You have a Meeting invite for meeting - {{$qrp->meeting_id}}
                                        please fill personal performa <a
                                            href="{{ url('personal-performa/create?meeting_id=' . $qrp->meeting_id) }}">click
                                            here</a>
                                    </h4>
                                    @endforeach
                                </div>
                            </div>
                            <div class="avatar">
                                <span class="avatar-initial rounded bg-label-warning">
                                    <i class="icon-base ti tabler-user-search icon-26px"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            @endif
                @endroleCan

            <!-- for admin Dashboard -->

@php
    $qrps = \App\Models\QrpForm::where('status','Pending')->get();
@endphp

@if($qrps->count() > 0)
    @roleCan('generation.qrp.view')
        <!-- <div class="col-sm-6 col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span class="text-heading">Submitted Qrps</span>
                            <div class="d-flex align-items-center my-1">
                                @foreach($qrps as $qrp)
                                    <h4 class="mb-0 me-2">
                                        You have an Unapproved Qrp - {{ $qrp->meeting_id }}
                                        <a href="{{ url('qrp-generation/'.$qrp->id) }}">
                                            click here
                                        </a>
                                    </h4>
                                @endforeach
                            </div>
                        </div>
                        <div class="avatar">
                            <span class="avatar-initial rounded bg-label-warning">
                                <i class="icon-base ti tabler-user-search icon-26px"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    @endroleCan
@endif

@php
    $Performa = \App\Models\PersonalPerforma::where('status','Pending')->get();
@endphp

@if($Performa->count() > 0)
                @roleCan('generation.personal_performa.view')
            <!-- <div class="col-sm-6 col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="content-left">
                                <span class="text-heading">Submitted Performas</span>
                                <div class="d-flex align-items-center my-1">
                                    @foreach($Performa as $perform)
                                    <h4 class="mb-0 me-2">You have a Pending Performa Form - {{$perform->meeting_id}}<a
                                            href="{{ url('personal-performa-generation/'.$perform->id) }}">click
                                            here</a>
                                    </h4>
                                    @endforeach
                                </div>
                            </div>
                            <div class="avatar">
                                <span class="avatar-initial rounded bg-label-warning">
                                    <i class="icon-base ti tabler-user-search icon-26px"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
                @endroleCan
                @endif



        </div>
        <!--/ Activity Timeline -->

    </div>
</div>
@endsection
