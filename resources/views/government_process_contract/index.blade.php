@extends('layouts.main')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="card">

                <div class="card-body">
                    <div class="card-title header-elements">
                        <h5 class="m-0 me-2">
                            Government Process Contract
                        </h5>
                        <div class="card-title-elements ms-auto">
                            <div class="card-header-elements ms-auto">
                                <form action="{{ route('government_process_contract.index') }}" method="GET"
                                    autocomplete="off">
                                    <input type="text" class="form-control form-control-sm" placeholder="Search"
                                        name="search">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered table-sm">
                        <thead>
                            <tr class="tbbg">
                                <th style="color: white; width: 1%;">
                                    #
                                </th>

                                <th class="text-center cw">
                                    Employer
                                </th>

                                <th class="text-center cw">
                                    Thai Date
                                </th>

                                <th class="text-center cw">
                                    Cabinet Date
                                </th>

                                <th class="text-center cw">
                                    Issue Date
                                </th>

                                <th class="text-center cw">
                                    Files
                                </th>

                                <th class="text-center cw">
                                    Action
                                </th>

                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @if ($is_create)
                                @include('government_process_contract.create')
                            @else
                                @include('government_process_contract.edit')
                            @endif

                            @include('government_process_contract.lists')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\storeGovernmentProcessContract', '#create-form') !!}
@endsection
