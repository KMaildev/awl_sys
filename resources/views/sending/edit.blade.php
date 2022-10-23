<form action="{{ route('sending.update', $sending_edit->id) }}" method="post" id="create-form" autocomplete="off">
    @csrf
    @method('PUT')

    <tr>
        <td>
            #
        </td>

        <td>
            <select class="form-select form-select-sm @error('contract_id') is-invalid @enderror" name="contract_id"
                id="contract_id">
                <option value="">
                    Select Contract & Date
                </option>
                @foreach ($contracts as $contract)
                    <option value="{{ $contract->id }}" @if ($contract->id == $sending_edit->contract_id) selected @endif>
                        {{ $contract->overseas_agencie->employer_name ?? '' }}
                        @
                        {{ $contract->contract_date ?? '' }}
                    </option>
                @endforeach
            </select>
        </td>

        <td>
            <input type="text" class="form-control form-control-sm" readonly id="LOTID"
                value="{{ $sending_edit->contract_table->lot ?? '' }}">
        </td>

        <td>
            <input type="text" class="form-control form-control-sm @error('sending_date') is-invalid @enderror"
                name="sending_date" value="{{ $sending_edit->sending_date ?? '' }}">
        </td>

        <td>
            <input type="text" class="form-control form-control-sm @error('male') is-invalid @enderror"
                name="male" id="male" oninput="TotalMaleFemale()" style="text-align: right"
                value="{{ $sending_edit->male ?? 0 }}">
        </td>

        <td>
            <input type="text" class="form-control form-control-sm @error('female') is-invalid @enderror"
                name="female" id="female" oninput="TotalMaleFemale()" style="text-align: right"
                value="{{ $sending_edit->female ?? 0 }}">
        </td>

        <td>
            <input type="text" class="form-control form-control-sm" id="Total" readonly
                style="text-align: right">
        </td>

        <td>
            <input type="text" class="form-control form-control-sm @error('remark') is-invalid @enderror"
                name="remark" value="{{ $sending_edit->remark ?? '' }}">
        </td>

        <td class="text-center">
            <button type="submit" class="btn btn-sm btn-primary" style="width: 100%;">
                Save
            </button>
        </td>
    </tr>

</form>


@section('script')
    <script>
        function TotalMaleFemale() {
            var male = document.getElementById("male").value;
            var female = document.getElementById("female").value;
            var total = parseInt(male) + parseInt(female);
            console.log(male)
            document.getElementById("Total").value = total;
        }


        $('select[id="contract_id"]').on('change', function() {
            var contract_id = $(this).val();
            if (contract_id) {
                $.ajax({
                    url: '/contract_data_ajax/' + contract_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        LOTID.value = data.lot;
                    }
                });
            }
        });
    </script>
@endsection
