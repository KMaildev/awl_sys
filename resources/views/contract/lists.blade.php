@foreach ($contracts as $contract)
    <tr>
        <td>
            {{ $loop->iteration }}
        </td>

        <td>
            {{ $contract->overseas_agencie->employer_name ?? '' }}
        </td>

        <td>
            {{ $contract->lot ?? '' }}
        </td>

        <td>
            {{ $contract->contract_date ?? '' }}
        </td>

        <td class="right">
            {{ $contract->male ?? 0 }}
        </td>

        <td class="right">
            {{ $contract->female ?? 0 }}
        </td>

        <td class="right">
            @php
                $male = $contract->male ?? 0;
                $female = $contract->female ?? 0;
                $total = $male + $female;
                echo $total;
            @endphp
        </td>

        <td>
            {{ $contract->remark ?? '' }}
        </td>

        <td class="text-center">
            <button type="button" class="btn btn-primary btn-sm dropdown-toggle block" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" style="width: 100%;">
                Action
            </button>

            <div class="dropdown-menu">

                <a class="dropdown-item" href="{{ route('contract.edit', $contract->id) }}">
                    Edit
                </a>

                <a class="dropdown-item" href="{{ route('interview_name_list_details', $contract->id) }}">
                    INTERVIEW NAME LIST
                </a>

                <form action="{{ route('contract.destroy', $contract->id) }}" method="POST">
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
