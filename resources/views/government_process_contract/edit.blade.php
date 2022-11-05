<form action="{{ route('government_process_contract.update', $government_process_edit->id) }}" method="post"
    id="create-form" autocomplete="off" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <tr>
        <td>
            #
        </td>

        <td>
            <select class="form-select form-select-sm @error('demand_id') is-invalid @enderror" name="demand_id">
                <option value="">
                    Please Select
                </option>
                @foreach ($demands as $demand)
                    <option value="{{ $demand->id }}" @if ($demand->id == $government_process_edit->demand_id) selected @endif>
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

        {{-- CABINET DATE --}}
        <td>
            <input type="text" class="form-control form-control-sm @error('thai_date') is-invalid @enderror"
                name="thai_date" value="{{ $government_process_edit->thai_date ?? '' }}">
        </td>

        {{-- APPROVAL DATE ( MM - LABOR ) --}}
        <td>
            <input type="text" class="form-control form-control-sm @error('cabinet_date') is-invalid @enderror"
                name="cabinet_date" value="{{ $government_process_edit->cabinet_date ?? '' }}">
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
            <input type="file" class="form-control form-control-sm" name="files">
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
