@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col">
            <h6 class="mt-4">
                {{ strtoupper($pre_interview->overseas_agencie->employer_name ?? '') }}
                &nbsp; INTERVIEW NAME LIST
                ({{ $pre_interview->interview_date ?? '' }})
            </h6>
            <div class="card mb-3">
                <div class="card-header border-bottom">
                    <ul class="nav nav-tabs card-header-tabs" role="tablist">

                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#form-tabs-personal"
                                role="tab" aria-selected="true">
                                Name List
                            </button>
                        </li>

                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#name-list-male" role="tab"
                                aria-selected="true">
                                Male
                            </button>
                        </li>

                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#name-list-female" role="tab"
                                aria-selected="true">
                                Female
                            </button>
                        </li>

                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#form-tabs-account" role="tab"
                                aria-selected="false">
                                Import Excel
                            </button>
                        </li>
                    </ul>
                </div>

                <div class="tab-content">
                    {{-- Name List  --}}
                    <div class="tab-pane fade active show" id="form-tabs-personal" role="tabpanel">
                        @include('employer_interview_name_list.name_list')
                    </div>

                    {{-- name-list-male --}}
                    <div class="tab-pane fade" id="name-list-male" role="tabpanel">
                        @include('employer_interview_name_list.male_name_list')
                    </div>

                    {{-- name-list-female --}}
                    <div class="tab-pane fade" id="name-list-female" role="tabpanel">
                        @include('employer_interview_name_list.female_name_list')
                    </div>

                    <!-- Import Excel -->
                    <div class="tab-pane fade" id="form-tabs-account" role="tabpanel">
                        @include('employer_interview_name_list.create')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
