@foreach ($sendings as $sending)
    <tr>
        <td>
            {{ $loop->iteration }}
        </td>

        <td>
            {{ $sending->overseas_agencie->employer_name ?? '' }}
            @
            {{ $sending->contract_table->contract_date ?? '' }}
        </td>

        <td>
            {{ $sending->contract_table->lot ?? '' }}
        </td>

        <td>
            {{ $sending->sending_date ?? '' }}
        </td>

        <td class="right">
            {{ $sending->male ?? 0 }}
        </td>

        <td class="right">
            {{ $sending->female ?? 0 }}
        </td>

        <td class="right">
            @php
                $male = $sending->male ?? 0;
                $female = $sending->female ?? 0;
                $total = $male + $female;
                echo $total;
            @endphp
        </td>

        <td>
            {{ $sending->remark ?? '' }}
        </td>

        <td class="text-center">
            <button type="button" class="btn btn-primary btn-sm dropdown-toggle block" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" style="width: 100%;">
                Action
            </button>

            <div class="dropdown-menu">

                <a class="dropdown-item" href="{{ route('sending.edit', $sending->id) }}">
                    Edit
                </a>

                <a class="dropdown-item" href="{{ route('contract_name_list.show', $sending->id) }}">
                    Contract Name List
                </a>

                <form action="{{ route('sending.destroy', $sending->id) }}" method="POST" hidden>
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
