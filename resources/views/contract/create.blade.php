<form action="{{ route('contract.store') }}" method="post" id="create-form" autocomplete="off">
    @csrf

    <tr>
        <td>
            #
        </td>

        <td>
            <select class="form-select form-select-sm @error('demand_id') is-invalid @enderror" name="demand_id">
                <option value="">
                    Select Demand & Date
                </option>
                @foreach ($demands as $demand)
                    <option value="{{ $demand->id }}">
                        {{ $demand->overseas_agencie->employer_name ?? '' }}
                        @
                        {{ $demand->demand_date ?? '' }}
                    </option>
                @endforeach
            </select>
        </td>

        <td>
            <input type="text" class="form-control form-control-sm @error('lot') is-invalid @enderror" name="lot"
                value="{{ old('lot') }}">
        </td>

        <td>
            <input type="text" class="form-control form-control-sm @error('contract_date') is-invalid @enderror"
                name="contract_date" value="{{ old('contract_date') }}">
        </td>

        <td>
            <input type="text" class="form-control form-control-sm @error('male') is-invalid @enderror"
                name="male" id="male" oninput="TotalMaleFemale()" value="0" style="text-align: right"
                value="{{ old('male') }}">
        </td>

        <td>
            <input type="text" class="form-control form-control-sm @error('female') is-invalid @enderror"
                name="female" id="female" oninput="TotalMaleFemale()" value="0" style="text-align: right"
                value="{{ old('female') }}">
        </td>

        <td>
            <input type="text" class="form-control form-control-sm" id="Total" readonly
                style="text-align: right">
        </td>

        <td>
            <input type="text" class="form-control form-control-sm @error('remark') is-invalid @enderror"
                name="remark" value="{{ old('remark') }}">
        </td>

        <td class="text-center">
            <button type="submit" class="btn btn-sm btn-primary" style="width: 100%;">
                Save
            </button>
        </td>
    </tr>

</form>

<script>
    function TotalMaleFemale() {
        var male = document.getElementById("male").value;
        var female = document.getElementById("female").value;
        var total = parseInt(male) + parseInt(female);
        console.log(male)
        document.getElementById("Total").value = total;
    }
</script>
