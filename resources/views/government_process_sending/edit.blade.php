<form action="{{ route('government_process_sending.update', $government_process_edit->id) }}" method="post"
    id="create-form" autocomplete="off" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <tr>
        <td>
            #
        </td>

        <td>
            <select class="form-select form-select-sm @error('demand_id') is-invalid @enderror" name="demand_id"
                id="demandId">
                <option value="">
                    Please Select
                </option>
                @foreach ($demands as $demand)
                    <option value="{{ $demand->id }}" @if ($demand->id == $government_process_edit->overseas_agencie_id) selected @endif>
                        {{ $demand->overseas_agencie->employer_name ?? '' }}
                        @
                        {{ $demand->demand_date ?? '' }}
                    </option>
                @endforeach
            </select>
        </td>

        {{-- DOE DATE --}}
        <td>
            <input type="text" id="DoeDate"
                value="{{ $government_process_edit->demand_table->demand_date ?? '' }}">
        </td>

        {{-- DOE NUMBER	 --}}
        <td>
            <input type="text" id="DoeNumber"
                value="{{ $government_process_edit->demand_table->demand_number ?? '' }}">
        </td>

        <td>
            <input type="text" class="form-control form-control-sm @error('ygn_to_myawaddy') is-invalid @enderror"
                name="ygn_to_myawaddy" value="{{ $government_process_edit->ygn_to_myawaddy ?? '' }}">
        </td>

        <td>
            <input type="text" class="form-control form-control-sm @error('myawaddy_to_thai') is-invalid @enderror"
                name="myawaddy_to_thai" value="{{ $government_process_edit->myawaddy_to_thai ?? '' }}">
        </td>

        {{-- MALE --}}
        <td>
            <input type="text" class="form-control form-control-sm @error('male') is-invalid @enderror"
                name="male" value="{{ $government_process_edit->male ?? 0 }}" id="male"
                oninput="TotalMaleFemale()">
        </td>

        {{-- FEMALE	 --}}
        <td>
            <input type="text" class="form-control form-control-sm @error('female') is-invalid @enderror"
                name="female" value="{{ $government_process_edit->female ?? 0 }}" id="female"
                oninput="TotalMaleFemale()">
        </td>

        <td>
            <input type="text" class="form-control form-control-sm" id="Total" readonly
                style="text-align: right">
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
        document.getElementById("Total").value = total;
    }
    TotalMaleFemale();
</script>