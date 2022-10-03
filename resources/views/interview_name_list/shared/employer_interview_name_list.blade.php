<div style="text-align: center">
    <h4>
        {{ strtoupper($employer_interview->overseas_agencie->employer_name ?? '') }}
        &nbsp; INTERVIEW NAME LIST
        ({{ $employer_interview->interview_date ?? '' }})
    </h4>
</div>

<input type="text" placeholder="Search" id="mySearchInterview">
<a href="{{ route('employer_interview_name_list_export', $employer_interview->id) }}" class="text-success">
    Excel Download
</a>

<div class="table-responsive text-nowrap">
    <table class="table table-bordered table-sm" style="margin-bottom: 10px">
        <thead>
            <tr class="tbbg">
                <th style="color: white; width: 1%;">
                    #
                </th>

                <th class="text-center cw">
                    Pre Interview Title
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
            </tr>
        </thead>
        <tbody class="table-border-bottom-0" id="searchInterviewTable">
            @foreach ($interview_name_lists as $key => $name_list)
                <tr style="background-color: {{ $name_list->bg_color ?? '' }}">

                    <td>
                        {{ $loop->iteration }}
                    </td>

                    <td>
                        {{ $name_list->pre_interviews_table->interview_title ?? '' }}
                        <span style="font-weight: bold">
                            {{ $name_list->pre_interviews_table->interview_date ?? '' }}
                        </span>
                    </td>

                    <td data-bs-toggle="modal" data-bs-target="#nameListEdit_{{ $name_list->id }}">
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
                </tr>
                @include('interview_name_list.shared.name_list_edit')
            @endforeach
        </tbody>
    </table>
</div>

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreUser', '#create-form') !!}
    <script>
        $(document).ready(function() {
            $("#mySearchInterview").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#searchInterviewTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
@endsection
