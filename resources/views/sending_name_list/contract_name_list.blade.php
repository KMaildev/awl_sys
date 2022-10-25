<div class="table-responsive text-nowrap">

    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search: Name, N.R.C NO" id="nameListSearch">
        <button class="text-white btn btn-success" type="button">
            Excel Download
        </button>
    </div>

    <form action="{{ route('sending_name_list.update', $sending->id) }}" method="post">
        @csrf
        @method('PUT')

        <table class="table table-bordered table-sm" id="nameListTable" style="margin-bottom: 20px;">
            @foreach ($contracts as $key => $contract)
                <thead>
                    <tr>
                        <th style="background-color: #F7C133; color: white; text-align: center;">
                            {{ $key + 1 }}
                        </th>

                        <th colspan="2" style="background-color: #F7C133; color: white; text-align: center;">
                            {{ $contract->lot ?? '' }}
                        </th>

                        <th colspan="2" style="background-color: #F7C133; color: white; text-align: center;">
                            {{ $contract->contract_date ?? '' }}
                        </th>

                        <th colspan="17" style="background-color: #F7C133; color: white; text-align: center;"></th>
                    </tr>

                    <tr class="tbbg">
                        <th style="color: white; width: 1%;">
                            <input type="checkbox" id='checkall' />
                            Check
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
                    </tr>
                </thead>
                <tbody>
                    @php
                        $loop_index = 1;
                    @endphp
                    @foreach ($contract->name_lists_table as $key => $name_list)
                        @if ($name_list->medical_fail == '' and
                            $name_list->remark == '' and
                            $name_list->fail_cancel == '' and
                            $name_list->contract_id != '' and
                            $name_list->sending_id == '')
                            <tr>
                                <td>
                                    <input type="checkbox" class='checkbox'
                                        name="nameList[{{ $loop_index++ }}][name_list_id]" value="{{ $name_list->id }}">

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
                                    {{ $name_list->remark ?? '' }}
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            @endforeach
        </table>

        <button type="submit" class="btn btn-primary">
            <span class="fa fa-arrow-right"></span>&nbsp;
            Submit to Contract Sending List
        </button>
    </form>
</div>

@section('script')
    <script>
        $(document).ready(function() {
            // Check or Uncheck All checkboxes
            $("#checkall").change(function() {
                var checked = $(this).is(':checked');
                if (checked) {
                    $(".checkbox").each(function() {
                        $(this).prop("checked", true);
                    });
                } else {
                    $(".checkbox").each(function() {
                        $(this).prop("checked", false);
                    });
                }
            });

            // Changing state of CheckAll checkbox 
            $(".checkbox").click(function() {
                if ($(".checkbox").length == $(".checkbox:checked").length) {
                    $("#checkall").prop("checked", true);
                } else {
                    $("#checkall").prop("checked", false);
                }

            });
        });
    </script>
@endsection
