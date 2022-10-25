<div style="text-align: center">
    <h4>
        {{ strtoupper($pre_interview->overseas_agencie->employer_name ?? '') }}
        &nbsp; INTERVIEW NAME LIST
        ({{ $pre_interview->interview_date ?? '' }})
    </h4>
</div>


<a href="{{ route('interview_name_list_export', $pre_interview->id) }}" class="text-white btn btn-success">
    Excel Download
</a>

<button type="button" class="btn btn-primary">
    Total (All)
    <span class="badge bg-white text-primary">
        {{ count($name_lists) }}
    </span>
</button>

<hr>
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

                <th class="text-center cw">
                    Action
                </th>

            </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach ($name_lists as $name_list)
                <tr style="background-color: {{ $name_list->bg_color ?? '' }}">

                    <td data-bs-toggle="modal" data-bs-target="#nameListEdit_{{ $name_list->id }}">
                        {{ $loop->iteration }}
                    </td>

                    <td data-bs-toggle="modal" data-bs-target="#nameListEdit_{{ $name_list->id }}">
                        {{ $name_list->no ?? '' }}
                    </td>

                    <td data-bs-toggle="modal" data-bs-target="#nameListEdit_{{ $name_list->id }}">
                        {{ $name_list->name ?? '' }}
                    </td>

                    <td data-bs-toggle="modal" data-bs-target="#nameListEdit_{{ $name_list->id }}">
                        {{ $name_list->gender ?? '' }}
                    </td>

                    <td data-bs-toggle="modal" data-bs-target="#nameListEdit_{{ $name_list->id }}">
                        {{ $name_list->nrc ?? '' }}
                    </td>

                    <td data-bs-toggle="modal" data-bs-target="#nameListEdit_{{ $name_list->id }}">
                        {{ $name_list->father_name ?? '' }}
                    </td>

                    <td data-bs-toggle="modal" data-bs-target="#nameListEdit_{{ $name_list->id }}">
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
                        <input type="text" value="{{ $name_list->remark ?? '' }}" data-id="{{ $name_list->id }}"
                            class="updateRemark" style="width: 140px;">
                    </td>

                    <td>
                        <input type="text" value="{{ $name_list->note ?? '' }}" data-id="{{ $name_list->id }}"
                            class="updateNote" style="width: 140px;">
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
