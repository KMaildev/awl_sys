<form action="{{ route('demand.store') }}" method="post" id="create-form" autocomplete="off" enctype="multipart/form-data">
    @csrf
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
                    <option value="{{ $overseas_agency->id }}">
                        {{ $overseas_agency->employer_name ?? '' }}
                    </option>
                @endforeach
            </select>
        </td>

        <td>
            <input type="text" class="form-control form-control-sm @error('demand_number') is-invalid @enderror"
                name="demand_number">
        </td>

        <td>
            <input type="text" class="form-control form-control-sm @error('demand_date') is-invalid @enderror"
                name="demand_date">
        </td>

        <td>
            <input type="text" class="form-control form-control-sm @error('approval_number') is-invalid @enderror"
                name="approval_number">
        </td>

        <td>
            <input type="text" class="form-control form-control-sm @error('approval_date') is-invalid @enderror"
                name="approval_date">
        </td>

        <td>
            <input type="text" class="form-control form-control-sm @error('male') is-invalid @enderror"
                name="male" id="male" oninput="TotalMaleFemale()" value="0" style="text-align: right">
        </td>

        <td>
            <input type="text" class="form-control form-control-sm @error('female') is-invalid @enderror"
                name="female" id="female" oninput="TotalMaleFemale()" value="0" style="text-align: right">
        </td>

        <td>
            <input type="text" class="form-control form-control-sm" id="Total" readonly
                style="text-align: right; width: 100px;">
        </td>

        <td>
            <input type="file" class="form-control form-control-sm" name="files" style="width: 100px;">
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
