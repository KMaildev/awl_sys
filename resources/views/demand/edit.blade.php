<form action="{{ route('demand.update', $demand_edit->id) }}" method="post" id="create-form" autocomplete="off">
    @csrf
    @method('PUT')
    <tr>
        <td>
            #
        </td>

        <td>
            <select class="form-select form-select-sm @error('overseas_agencie_id') is-invalid @enderror"
                name="overseas_agencie_id">
                <option value="">
                    Please Select
                </option>
                @foreach ($overseas_agencies as $overseas_agency)
                    <option value="{{ $overseas_agency->id }}" @if ($overseas_agency->id == $demand_edit->overseas_agencie_id) selected @endif>
                        {{ $overseas_agency->employer_name ?? '' }}
                    </option>
                @endforeach
            </select>
        </td>

        <td>
            <input type="text" class="form-control form-control-sm @error('demand_date') is-invalid @enderror"
                name="demand_date" value="{{ $demand_edit->demand_date ?? '' }}">
        </td>

        <td>
            <input type="text" class="form-control form-control-sm @error('male') is-invalid @enderror"
                name="male" id="male" oninput="TotalMaleFemale()" value="{{ $demand_edit->male ?? 0 }}"
                style="text-align: right">
        </td>

        <td>
            <input type="text" class="form-control form-control-sm @error('female') is-invalid @enderror"
                name="female" id="female" oninput="TotalMaleFemale()" value="{{ $demand_edit->female ?? 0 }}"
                style="text-align: right">
        </td>

        <td>
            <input type="text" class="form-control form-control-sm" id="Total" readonly
                style="text-align: right">
        </td>

        <td class="text-center">
            <button type="submit" class="btn btn-sm btn-primary" style="width: 100%;">
                Update
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
    TotalMaleFemale()
</script>
