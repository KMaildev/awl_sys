@extends('layouts.main')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="card">

                <div class="card-body">
                    <div class="card-title header-elements">
                        <h5 class="m-0 me-2">
                            Reject / Blacklist
                        </h5>
                        <div class="card-title-elements ms-auto">
                            <div class="card-header-elements ms-auto">
                                <form action="{{ route('reject.index') }}" method="GET" autocomplete="off">
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
                                    Name
                                </th>

                                <th class="text-center cw">
                                    M/F
                                </th>

                                <th class="text-center cw">
                                    N.R.C NO
                                </th>

                                <th class="text-center cw">
                                    Father's name
                                </th>

                                <th class="text-center cw">
                                    Mother's Name
                                </th>

                                <th class="text-center cw">
                                    Qualification
                                </th>

                                <th class="text-center cw">
                                    Date of birth
                                </th>

                                <th class="text-center cw">
                                    Native town
                                </th>

                                <th class="text-center cw">
                                    Region
                                </th>

                                <th class="text-center cw">
                                    Come from to interview
                                </th>

                                <th class="text-center cw">
                                    Expiry date
                                </th>

                                <th class="text-center cw">
                                    slip date
                                </th>

                                <th class="text-center cw">
                                    Passport Issue Date
                                </th>

                                <th class="text-center cw">
                                    Medical fail X-ray(or)Hep-B
                                </th>

                                <th class="text-center cw">
                                    Phone Number
                                </th>

                                <th class="text-center cw">
                                    PP Number
                                </th>

                                <th class="text-center cw">
                                    Remark
                                </th>

                                <th class="text-center cw">
                                    Note
                                </th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($name_lists as $key => $name_list)
                                <tr>
                                    <td>
                                        {{ $i++ }}
                                    </td>

                                    <td>
                                        {{ $name_list->name ?? '' }}
                                    </td>

                                    <td>
                                        {{ $name_list->gender ?? '' }}
                                    </td>

                                    <td>
                                        {{ $name_list->nrc ?? '' }}
                                    </td>

                                    <td>
                                        {{ $name_list->father_name ?? '' }}
                                    </td>

                                    <td>
                                        {{ $name_list->mother_name ?? '' }}
                                    </td>

                                    <td>
                                        {{ $name_list->qualification ?? '' }}
                                    </td>

                                    <td>
                                        {{ $name_list->date_of_birth ?? '' }}
                                    </td>

                                    <td>
                                        {{ $name_list->native_town ?? '' }}
                                    </td>

                                    <td>
                                        {{ $name_list->region ?? '' }}
                                    </td>

                                    <td>
                                        {{ $name_list->come_from_to_interview ?? '' }}
                                    </td>

                                    <td>
                                        {{ $name_list->expiry_date ?? '' }}
                                    </td>

                                    <td>
                                        {{ $name_list->slip_date ?? '' }}
                                    </td>

                                    <td>
                                        {{ $name_list->passport_issue_date ?? '' }}
                                    </td>

                                    <td>
                                        {{ $name_list->medical_fail ?? '' }}
                                    </td>

                                    <td>
                                        {{ $name_list->phone_number ?? '' }}
                                    </td>

                                    <td>
                                        {{ $name_list->passport_number ?? '' }}
                                    </td>

                                    <td>
                                        @include('component.remark')
                                    </td>

                                    <td>
                                        @include('component.note')
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
