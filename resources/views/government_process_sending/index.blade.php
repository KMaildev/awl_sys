@extends('layouts.main')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="card">

                <div class="card-body">
                    <div class="card-title header-elements">
                        <h5 class="m-0 me-2">
                            Government Process Sending
                        </h5>
                        <div class="card-title-elements ms-auto">
                            <div class="card-header-elements ms-auto">
                                <form action="{{ route('government_process_sending.index') }}" method="GET"
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

                                <th class="text-center cw" style="width: 20%;">
                                    Employer
                                </th>

                                <th class="text-center cw" style="width: 20%;">
                                    DOE DATE
                                </th>

                                <th class="text-center cw" style="width: 20%;">
                                    DOE NUMBER
                                </th>

                                <th class="text-center cw" style="width: 20%;">
                                    YGN to Myawaddy
                                </th>

                                <th class="text-center cw" style="width: 20%;">
                                    Myawaddy to Thai
                                </th>

                                <th class="text-center cw" style="width: 20%;">
                                    Male
                                </th>

                                <th class="text-center cw" style="width: 20%;">
                                    Female
                                </th>

                                <th class="text-center cw" style="width: 20%;">
                                    Total
                                </th>

                                <th class="text-center cw" style="width: 20%;">
                                    Files
                                </th>

                                <th class="text-center cw" style="width: 20%;">
                                    Action
                                </th>

                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @if ($is_create)
                                @include('government_process_sending.create')
                            @else
                                @include('government_process_sending.edit')
                            @endif

                            @include('government_process_sending.lists')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\storeGovernmentProcessContract', '#create-form') !!}
    <script>
        $('select[id="demandId"]').on('change', function() {
            var demandId = $(this).val();
            if (demandId) {
                $.ajax({
                    url: '/get_demand_data/' + demandId,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        DoeDate.value = data.demand.demand_date;
                        DoeNumber.value = data.demand.demand_number;
                    }
                });
            }
        });
    </script>
@endsection
