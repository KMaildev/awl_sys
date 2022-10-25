@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col">
            <h6 class="mt-4">
                {{ strtoupper($sending->overseas_agencie->employer_name ?? '') }}
                /
                Sending
            </h6>
            <div class="card mb-3">
                <div class="card-header border-bottom">
                    <ul class="nav nav-tabs card-header-tabs" role="tablist">

                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#form-tabs-personal"
                                role="tab" aria-selected="true">
                                Contract Name List

                            </button>
                        </li>

                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#contract-name-list"
                                role="tab" aria-selected="true">
                                Sending Name List
                            </button>
                        </li>

                    </ul>
                </div>

                <div class="tab-content">
                    {{-- Name List  --}}
                    <div class="tab-pane fade active show" id="form-tabs-personal" role="tabpanel">
                        @include('sending_name_list.contract_name_list')
                    </div>

                    {{-- Contract Name List  --}}
                    <div class="tab-pane fade" id="contract-name-list" role="tabpanel">
                        @include('sending_name_list.sending_name_list')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
