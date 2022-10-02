<div style="text-align: center">
    <h4>
        {{ strtoupper($pre_interview->overseas_agencie->employer_name ?? '') }}
        &nbsp; INTERVIEW NAME LIST
        ({{ $pre_interview->interview_date ?? '' }})
    </h4>
</div>

<div class="table-responsive text-nowrap">
    <table class="table table-bordered table-sm">
        <thead>
            <tr class="tbbg">
                <th style="color: white; width: 1%;">
                    #
                </th>

                <th class="text-center cw">
                    Employer
                </th>

                <th class="text-center cw">
                    Interview Date
                </th>

                <th class="text-center cw">
                    Male
                </th>

                <th class="text-center cw">
                    Female
                </th>

                <th class="text-center cw">
                    Total
                </th>

                <th class="text-center cw">
                    Action
                </th>

            </tr>
        </thead>
        <tbody class="table-border-bottom-0">

        </tbody>
    </table>
</div>
