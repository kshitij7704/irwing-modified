@extends('layoutsBackend.app')
@section('content')


<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header d-flex justify-content-between align-items-center">
            <span>QRP's</span>
        </h5>
        @roleCan('generation.qrp.view')
        <div class="card-datatable table-responsive">
            <table class=" table border-top">
                
                <tbody>

                    @foreach($agencies as $agenciess)
                    <tr>
                        <td>{{ $agenciess->name }}</td>
                        @php

                        $agencycount = App\Models\QrpForm::where('agency',$agenciess->id)->count();
                        @endphp
                        <td>Total Qrps - {{ $agencycount }}</td>
                        <td><a href="{{url('qrp-generation-index/'.$agenciess->id)}}" class="btn btn-info">view</a></td>
                    </tr>
                    @endforeach
                    <tr>
                        <td>All Qrps</td>
                        @php

                        $agencycounts = App\Models\QrpForm::count();
                        @endphp
                        <td>Total Qrps - {{ $agencycounts }}</td>
                        <td><a href="{{url('qrp-generation-index/0')}}" class="btn btn-info">view</a></td>
                    </tr>
                </tbody>

            </table>
        </div>
        @endroleCan
        <!-- Offcanvas to add new user -->

    </div>
</div>

@endsection
