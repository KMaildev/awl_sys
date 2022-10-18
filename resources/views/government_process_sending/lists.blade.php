@foreach ($government_process as $government_proces)
    <tr>
        <td>
            {{ $loop->iteration }}
        </td>

        <td>
            {{ $government_proces->overseas_agencie->employer_name ?? '' }}
        </td>

        <td>
            {{ $government_proces->thai_date ?? '' }}
        </td>

        <td>
            {{ $government_proces->cabinet_date ?? '' }}
        </td>

        <td>
            {{ $government_proces->issue_date ?? '' }}
        </td>

        <td>
            <a href="{{ Storage::url($government_proces->file_path) }}" target="_blank">
                {{ $government_proces->file_name ?? '' }}
            </a>
        </td>

        <td class="text-center">
            <button type="button" class="btn btn-primary btn-sm dropdown-toggle block" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" style="width: 100%;">
                Action
            </button>

            <div class="dropdown-menu">

                <a class="dropdown-item" href="{{ route('government_process_sending.edit', $government_proces->id) }}">
                    Edit
                </a>

                <form action="{{ route('government_process_sending.destroy', $government_proces->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="dropdown-item del_confirm" id="confirm-text" data-toggle="tooltip">
                        Delete
                    </button>
                </form>
            </div>
        </td>
    </tr>
@endforeach
