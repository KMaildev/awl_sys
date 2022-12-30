@extends('layouts.main')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="card">

                <div class="card-body">
                    <div class="card-title header-elements">
                        <h5 class="m-0 me-2">
                            Pre Failed
                        </h5>
                        <div class="card-title-elements ms-auto">
                            <div class="card-header-elements ms-auto">
                                <form action="{{ route('failed.index') }}" method="GET" autocomplete="off">
                                    <input type="text" class="form-control form-control-sm" placeholder="Search"
                                        name="search">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered table-sm">
                        @include('component.name_list_header')
                        <tbody class="table-border-bottom-0">
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($name_lists as $key => $name_list)
                                @if ($name_list->medical_fail != '' || $name_list->remark != '' || $name_list->fail_cancel != '')
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
                                        {{ $name_list->departure_date ?? '' }}
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
                                            data-id="{{ $name_list->id }}" class="updateCancel" style="width: 140px;">
                                    </td>

                                    <td>
                                        <input type="text" value="{{ $name_list->contract_no ?? '' }}"
                                            data-id="{{ $name_list->id }}" class="updateContractNo" style="width: 140px;">
                                    </td>

                                    <td>
                                        <input type="text" value="{{ $name_list->note ?? '' }}"
                                            data-id="{{ $name_list->id }}" class="updateNote" style="width: 140px;">
                                    </td>

                                    <td class="text-center">
                                        <form action="{{ route('interview_name_list.destroy', $name_list->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a class="text-danger del_confirm" id="confirm-text" data-toggle="tooltip">
                                                Delete
                                            </a>
                                        </form>
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
