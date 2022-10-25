<div class="table-responsive text-nowrap">

    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search: Name, N.R.C NO" id="contractNameListSearch">
        <button class="text-white btn btn-success" type="button">
            Excel Download
        </button>
    </div>

    <table class="table table-bordered table-sm" id="contractNameListTable" style="margin-bottom: 20px;">
        <thead>
            <tr class="tbbg">
                <th style="color: white; width: 1%;">
                    #
                </th>

                <th style="color: white; width: 1%;">
                    No
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
        <tbody>
            @php
                $loop_index = 1;
            @endphp
            @foreach ($sending_name_lists as $key => $name_list)
                @if ($name_list->medical_fail == '' and $name_list->remark == '' and $name_list->fail_cancel == '')
                    <tr>
                        <td>
                            {{ $loop_index++ }}
                        </td>

                        <td>
                            {{ $name_list->no ?? '' }}
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
                @endif
            @endforeach
        </tbody>
    </table>
</div>

@section('script')
@endsection
