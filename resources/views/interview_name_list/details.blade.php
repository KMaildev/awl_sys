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
                        @include('interview_name_list.name_list')
                    </div>

                    <!-- Import Excel -->
                    <div class="tab-pane fade" id="form-tabs-account" role="tabpanel">
                        @include('interview_name_list.create')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-12 col-sm-12 col-lg-12">


        </div>
    </div>
@endsection
