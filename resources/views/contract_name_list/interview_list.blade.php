<div class="table-responsive text-nowrap">

    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search: Name, N.R.C NO" id="nameListSearch">
        <button class="text-white btn btn-success" type="button">
            Excel Download
        </button>
    </div>

    <table class="table table-bordered table-sm" id="nameListTable">
        @foreach ($interviews as $key => $interview)
            <thead>
                <tr>
                    <th style="background-color: #F7C133; color: white; text-align: center;">
                        {{ $key + 1 }}
                    </th>

                    <th colspan="2" style="background-color: #F7C133; color: white; text-align: center;">
                        {{ $interview->interview_title ?? '' }}
                    </th>

                    <th colspan="2" style="background-color: #F7C133; color: white; text-align: center;">
                        {{ $interview->interview_date ?? '' }}
                    </th>

                    <th colspan="17" style="background-color: #F7C133; color: white; text-align: center;"></th>
                </tr>

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
                        Action
                    </th>

                </tr>
            </thead>
            <tbody>
                @foreach ($interview->name_lists as $name_list)
                    <tr>
                        <td>
                            {{ $loop->iteration }}
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
                            {{ $name_list->remark ?? '' }}
                        </td>

                        <td class="text-center">
                            <form action="{{ route('interview_name_list.destroy', $name_list->id) }}" method="POST">
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
        @endforeach
    </table>
</div>

@section('script')
@endsection
