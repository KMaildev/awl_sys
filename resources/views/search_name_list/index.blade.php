@extends('layouts.main')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="card">

                <div class="card-body">
                    <div class="card-title header-elements">
                        <h5 class="m-0 me-2">
                            Users
                        </h5>
                        <div class="card-title-elements ms-auto">
                            <div class="card-header-elements ms-auto">
                                <form action="{{ route('search_name_list.index') }}" method="GET" autocomplete="off">
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

                                <th style="color: white; width: 1%;">
                                    No
                                </th>

                                <th class="text-center cw">
                                    Gender
                                </th>

                                <th class="text-center cw">
                                    Name
                                </th>

                                <th class="text-center cw">
                                    Date of birth
                                </th>

                                <th class="text-center cw">
                                    Age
                                </th>

                                <th class="text-center cw">
                                    Father's name
                                </th>

                                <th class="text-center cw">
                                    Mother's name
                                </th>

                                <th class="text-center cw">
                                    Qualification
                                </th>

                                <th class="text-center cw">
                                    NRC
                                </th>

                                <th class="text-center cw">
                                    Physical And Blindness Test
                                </th>

                                <th class="text-center cw">
                                    Medical
                                </th>

                                <th class="text-center cw">
                                    Covid Vaccine First Dose
                                </th>


                                <th class="text-center cw">
                                    Covid Vaccine Second Dose
                                </th>

                                <th class="text-center cw">
                                    Region
                                </th>

                                <th class="text-center cw">
                                    Native Town
                                </th>


                                <th class="text-center cw">
                                    Come From To Interview
                                </th>

                                <th class="text-center cw">
                                    Passport Issue Date
                                </th>

                                <th class="text-center cw">
                                    Passport Expire Date
                                </th>

                                <th class="text-center cw">
                                    Passport Slip Date
                                </th>

                                <th class="text-center cw">
                                    Passport Number
                                </th>

                                <th class="text-center cw">
                                    Phone Number
                                </th>

                                <th class="text-center cw">
                                    Remark
                                </th>

                                <th class="text-center cw">
                                    Fail Or Cancel
                                </th>

                                <th class="text-center cw">
                                    Contract No
                                </th>

                                <th class="text-center cw">
                                    Note
                                </th>

                                <th class="text-center cw">
                                    Interview
                                </th>

                                <th class="text-center cw">
                                    Contract
                                </th>

                                <th class="text-center cw">
                                    Sending
                                </th>

                            </tr>
                        </thead>

                        <tbody class="table-border-bottom-0">
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($name_lists as $key => $name_list)
                                @if ($name_list->medical_fail != '' || $name_list->remark != '' || $name_list->fail_cancel)
                                    @php
                                        $color = 'red';
                                    @endphp
                                @else
                                    @php
                                        $color = 'black';
                                    @endphp
                                @endif
                                <tr style="color: {{ $color }}; background-color: {{ $name_list->bg_color ?? '' }}">

                                    <td>
                                        {{ $loop->iteration }}
                                    </td>

                                    <td>
                                        {{ $name_list->no ?? '' }}
                                    </td>

                                    <td>
                                        {{ $name_list->gender ?? '' }}
                                    </td>

                                    <td>
                                        {{ $name_list->name ?? '' }}
                                    </td>

                                    <td>
                                        {{ $name_list->date_of_birth ?? '' }}
                                    </td>

                                    <td>
                                        {{ $name_list->age ?? '' }}
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
                                        {{ $name_list->nrc ?? '' }}
                                    </td>

                                    <td>
                                        {{ $name_list->physical_and_blindness_test ?? '' }}
                                    </td>

                                    <td>
                                        <input type="text" value="{{ $name_list->medical_fail ?? '' }}"
                                            data-id="{{ $name_list->id }}" class="updateMedicalFail" style="width: 140px;">
                                    </td>

                                    <td>
                                        {{ $name_list->covid_vaccine_first_dose ?? '' }}
                                    </td>

                                    <td>
                                        {{ $name_list->covid_vaccine_second_dose ?? '' }}
                                    </td>

                                    <td>
                                        {{ $name_list->region ?? '' }}
                                    </td>

                                    <td>
                                        {{ $name_list->native_town ?? '' }}
                                    </td>

                                    <td>
                                        {{ $name_list->come_from_to_interview ?? '' }}
                                    </td>


                                    <td>
                                        {{ $name_list->passport_issue_date ?? '' }}
                                    </td>

                                    <td>
                                        {{ $name_list->expiry_date ?? '' }}
                                    </td>


                                    <td>
                                        {{ $name_list->slip_date ?? '' }}
                                    </td>


                                    <td>
                                        {{ $name_list->passport_number ?? '' }}
                                    </td>


                                    <td>
                                        {{ $name_list->phone_number ?? '' }}
                                    </td>


                                    <td>
                                        <input type="text" value="{{ $name_list->remark ?? '' }}"
                                            data-id="{{ $name_list->id }}" class="updateRemark" style="width: 140px;">
                                    </td>

                                    <td>
                                        <input type="text" value="{{ $name_list->fail_cancel ?? '' }}"
                                            data-id="{{ $name_list->id }}" class="updateRemark" style="width: 140px;">
                                    </td>

                                    <td>
                                        <input type="text" value="{{ $name_list->contract_no ?? '' }}"
                                            data-id="{{ $name_list->id }}" class="updateContractNo" style="width: 140px;">
                                    </td>

                                    <td>
                                        <input type="text" value="{{ $name_list->note ?? '' }}"
                                            data-id="{{ $name_list->id }}" class="updateNote" style="width: 140px;">
                                    </td>

                                    {{-- PRE INTERVIEW --}}
                                    <td>
                                        {{ $name_list->interviews_table->interview_date ?? '' }}
                                        @if ($name_list->interviews_table->interview_date ?? '')
                                            @
                                        @endif
                                        {{ $name_list->interviews_table->interview_title ?? '' }}
                                    </td>

                                    {{-- CONTRACT --}}
                                    <td>
                                        {{ $name_list->contracts_table->overseas_agencie->employer_name ?? '' }}
                                        @if ($name_list->contracts_table->overseas_agencie->employer_name ?? '')
                                            @
                                        @endif
                                        {{ $name_list->contracts_table->contract_date ?? '' }}
                                    </td>


                                    {{-- Sending --}}
                                    <td>
                                        {{ $name_list->sendings_table->overseas_agencie->employer_name ?? '' }}
                                        @if ($name_list->sendings_table->overseas_agencie->employer_name ?? '')
                                            @
                                        @endif
                                        {{ $name_list->sendings_table->sending_date ?? '' }}
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
