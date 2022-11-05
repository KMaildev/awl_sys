<form action="{{ route('government_process_contract.store') }}" method="post" id="create-form" autocomplete="off"
    enctype="multipart/form-data">
    @csrf
    <tr>
        <td>
            #
        </td>

        {{-- EMPLOYER --}}
        <td>
            <select class="form-select form-select-sm @error('demand_id') is-invalid @enderror" name="demand_id"
                id="demandId">
                <option value="">
                    Please Select
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

        {{-- DOE DATE --}}
        <td>
            <input type="text" id="DoeDate">
        </td>

        {{-- DOE NUMBER	 --}}
        <td>
            <input type="text" id="DoeNumber">
        </td>

        {{-- CABINET DATE --}}
        <td>
            <input type="text" class="form-control form-control-sm @error('thai_date') is-invalid @enderror"
                name="thai_date" value="{{ old('thai_date') }}">
        </td>

        {{-- APPROVAL DATE ( MM - LABOR ) --}}
        <td>
            <input type="text" class="form-control form-control-sm @error('cabinet_date') is-invalid @enderror"
                name="cabinet_date" value="{{ old('cabinet_date') }}">
        </td>

        {{-- MALE --}}
        <td>
            <input type="text" class="form-control form-control-sm @error('male') is-invalid @enderror"
                name="male" value="0" id="male" oninput="TotalMaleFemale()">
        </td>

        {{-- FEMALE	 --}}
        <td>
            <input type="text" class="form-control form-control-sm @error('female') is-invalid @enderror"
                name="female" value="0" id="female" oninput="TotalMaleFemale()">
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
        console.log(male)
        document.getElementById("Total").value = total;
    }
</script>
