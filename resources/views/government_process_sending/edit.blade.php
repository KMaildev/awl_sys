<form action="{{ route('government_process_sending.update', $government_process_edit->id) }}" method="post"
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
                    <option value="{{ $demand->id }}" @if ($demand->id == $government_process_edit->overseas_agencie_id) selected @endif>
                        {{ $demand->overseas_agencie->employer_name ?? '' }}
                    </option>
                @endforeach
            </select>
        </td>

        <td>
            <input type="text" class="form-control form-control-sm @error('thai_date') is-invalid @enderror"
                name="thai_date" value="{{ $government_process_edit->thai_date ?? '' }}">
        </td>

        <td>
            <input type="text" class="form-control form-control-sm @error('cabinet_date') is-invalid @enderror"
                name="cabinet_date" value="{{ $government_process_edit->cabinet_date ?? '' }}">
        </td>

        <td>
            <input type="text" class="form-control form-control-sm @error('issue_date') is-invalid @enderror"
                name="issue_date" value="{{ $government_process_edit->issue_date ?? '' }}">
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
