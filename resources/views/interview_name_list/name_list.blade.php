<div style="text-align: center">
    <h4>
        {{ strtoupper($pre_interview->overseas_agencie->employer_name ?? '') }}
        &nbsp; INTERVIEW NAME LIST
        ({{ $pre_interview->interview_date ?? '' }})
    </h4>
</div>

<a href="{{ route('interview_name_list_import', $pre_interview->id) }}" class="text-success">
    Excel Download
</a>
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
                    Action
                </th>

            </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach ($name_lists as $name_list)
                <tr style="background-color: {{ $name_list->bg_color ?? '' }}" data-bs-toggle="modal"
                    data-bs-target="#nameListEdit_{{ $name_list->id }}">
                    <td>
                        {{ $loop->iteration }}
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
                @include('interview_name_list.shared.name_list_edit')
            @endforeach
        </tbody>
    </table>
</div>
