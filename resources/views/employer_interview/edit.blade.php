<form action="{{ route('employer_interview.update', $pre_interview_edit->id) }}" method="post" id="create-form"
    autocomplete="off">
    @csrf
    @method('PUT')
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
                    <option value="{{ $demand->id }}" @if ($demand->id == $pre_interview_edit->demand_id) selected @endif>
                        {{ $demand->overseas_agencie->employer_name ?? '' }}
                        @
                        {{ $demand->demand_date ?? '' }}
                    </option>
                @endforeach
            </select>
        </td>

        <td>
            <input type="text" class="form-control form-control-sm @error('interview_title') is-invalid @enderror"
                name="interview_title" value="{{ $pre_interview_edit->interview_title ?? '' }}">
        </td>

        <td>
            <input type="text" class="form-control form-control-sm @error('interview_date') is-invalid @enderror"
                name="interview_date" value="{{ $pre_interview_edit->interview_date ?? '' }}">
        </td>

        <td>
            <input type="text" class="form-control form-control-sm @error('male') is-invalid @enderror"
                name="male" id="male" oninput="TotalMaleFemale()" value="{{ $pre_interview_edit->male ?? 0 }}"
                style="text-align: right">
        </td>

        <td>
            <input type="text" class="form-control form-control-sm @error('female') is-invalid @enderror"
                name="female" id="female" oninput="TotalMaleFemale()" value="{{ $pre_interview_edit->female ?? 0 }}"
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
