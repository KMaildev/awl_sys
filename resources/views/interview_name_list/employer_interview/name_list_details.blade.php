@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col">
            <h6 class="mt-4">
                {{ strtoupper($employer_interview->overseas_agencie->employer_name ?? '') }}
                &nbsp; INTERVIEW NAME LIST
                ({{ $employer_interview->interview_date ?? '' }})
            </h6>
            <div class="card mb-3">
                <div class="card-header border-bottom">
                    <ul class="nav nav-tabs card-header-tabs" role="tablist">
                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#form-tabs-personal"
                                role="tab" aria-selected="true">
                                Pre Interview Name List
                            </button>
                        </li>

                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#form-tabs-account" role="tab"
                                aria-selected="false">
                                Thai/Employer Interview Name List
                            </button>
                        </li>
                    </ul>
                </div>

                <div class="tab-content">
                    {{-- Name List  --}}
                    <div class="tab-pane fade active show" id="form-tabs-personal" role="tabpanel">
                        @include('interview_name_list.shared.all_pre_interview_name_list')
                    </div>

                    <!-- Import Excel -->
                    <div class="tab-pane fade" id="form-tabs-account" role="tabpanel">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
