@extends('layouts.main')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="card">

                <div class="card-body">
                    <div class="card-title header-elements">
                        <h5 class="m-0 me-2">
                            Sending List
                        </h5>
                        <div class="card-title-elements ms-auto">
                            <div class="card-header-elements ms-auto">
                                <form action="{{ route('sending.index') }}" method="GET" autocomplete="off">
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
                                    Employer & Contract Date
                                </th>

                                <th class="text-center cw">
                                    LOT
                                </th>

                                <th class="text-center cw">
                                    Sending Date
                                </th>

                                <th class="text-center cw">
                                    Male
                                </th>

                                <th class="text-center cw">
                                    Female
                                </th>

                                <th class="text-center cw">
                                    Total
                                </th>

                                <th class="text-center cw">
                                    Remark
                                </th>

                                <th class="text-center cw">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @if ($is_create)
                                @include('sending.create')
                            @else
                                @include('sending.edit')
                            @endif

                            @include('sending.lists')
                        </tbody>

                        <tr>
                            <td colspan="4">
                                Total
                            </td>

                            <td class="right">
                                @php
                                    $male = $contracts->sum('male');
                                    echo number_format($male);
                                @endphp
                            </td>

                            <td class="right">
                                @php
                                    $female = $contracts->sum('female');
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
