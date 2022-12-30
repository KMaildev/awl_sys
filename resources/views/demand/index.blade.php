@extends('layouts.main')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="card">

                <div class="card-body">
                    <div class="card-title header-elements">
                        <h5 class="m-0 me-2">
                            Demand List
                        </h5>
                        <div class="card-title-elements ms-auto">
                            <div class="card-header-elements ms-auto">
                                <form action="{{ route('demand.index') }}" method="GET" autocomplete="off">
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
                                    Demand Number
                                </th>

                                <th class="text-center cw" style="width: 20%;">
                                    Demand Date
                                </th>

                                <th class="text-center cw" style="width: 20%;">
                                    Approval Number <br> (MM - Labor)
                                </th>

                                <th class="text-center cw" style="width: 20%;">
                                    Approval Date <br> ( MM - Labor )
                                </th>

                                <th class="text-center cw" style="width: 20%;">
                                    Male Total
                                </th>

                                <th class="text-center cw" style="width: 20%;">
                                    Female Total
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
                                @include('demand.create')
                            @else
                                @include('demand.edit')
                            @endif

                            @include('demand.demand_list')
                        </tbody>

                        <tr>
                            <td colspan="6">
                                Total
                            </td>

                            <td class="right">
                                @php
                                    $male = $demands->sum('male');
                                    echo number_format($male);
                                @endphp
                            </td>

                            <td class="right">
                                @php
                                    $female = $demands->sum('female');
                                    echo number_format($female);
                                @endphp
                            </td>

                            <td class="right">
                                @php
                                    $AllTotal = $male + $female;
                                    echo number_format($AllTotal);
                                @endphp
                            </td>

                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreDemand', '#create-form') !!}
@endsection
