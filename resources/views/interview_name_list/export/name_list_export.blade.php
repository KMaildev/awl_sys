<table class="table table-bordered table-sm">
    <thead>
        <tr class="tbbg">
            <th style="color: white; width: 1%;">
                #
            </th>

            <th class="text-center cw" style="width: 2vh">
                Name
            </th>

            <th class="text-center cw" style="width: 2vh">
                M/F
            </th>

            <th class="text-center cw" style="width: 2vh">
                N.R.C NO
            </th>

            <th class="text-center cw" style="width: 2vh">
                Father's name
            </th>

            <th class="text-center cw" style="width: 2vh">
                Mother's Name
            </th>

            <th class="text-center cw" style="width: 2vh">
                Qualification
            </th>

            <th class="text-center cw" style="width: 2vh">
                Date of birth
            </th>

            <th class="text-center cw" style="width: 2vh">
                Native town
            </th>

            <th class="text-center cw" style="width: 2vh">
                Region
            </th>

            <th class="text-center cw" style="width: 2vh">
                Come from to interview
            </th>

            <th class="text-center cw" style="width: 2vh">
                Expiry date
            </th>

            <th class="text-center cw" style="width: 2vh">
                slip date
            </th>

            <th class="text-center cw" style="width: 2vh">
                Passport Issue Date
            </th>

            <th class="text-center cw" style="width: 2vh">
                Medical fail X-ray(or)Hep-B
            </th>

            <th class="text-center cw" style="width: 2vh">
                Phone Number
            </th>

            <th class="text-center cw" style="width: 2vh">
                PP Number
            </th>

            <th class="text-center cw" style="width: 2vh">
                Remark
            </th>

        </tr>
    </thead>
    <tbody class="table-border-bottom-0">
        @foreach ($name_lists as $name_list)
            <tr>
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

            </tr>
        @endforeach
    </tbody>
</table>
