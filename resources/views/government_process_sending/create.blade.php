<form action="{{ route('government_process_sending.store') }}" method="post" id="create-form" autocomplete="off"
    enctype="multipart/form-data">
    @csrf
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

        <td>
            <input type="text" class="form-control form-control-sm @error('ygn_to_myawaddy') is-invalid @enderror"
                name="ygn_to_myawaddy" value="{{ old('ygn_to_myawaddy') }}">
        </td>

        <td>
            <input type="text" class="form-control form-control-sm @error('myawaddy_to_thai') is-invalid @enderror"
                name="myawaddy_to_thai" value="{{ old('myawaddy_to_thai') }}">
        </td>

        {{-- MALE --}}
        <td>
            <input type="text" class="form-control form-control-sm @error('male') is-invalid @enderror"
                name="male" value="0" id="male" oninput="TotalMaleFemale()"
                style="text-align: right; width: 100px;">
        </td>

        {{-- FEMALE	 --}}
        <td>
            <input type="text" class="form-control form-control-sm @error('female') is-invalid @enderror"
                name="female" value="0" id="female" oninput="TotalMaleFemale()"
                style="text-align: right; width: 100px;">
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
