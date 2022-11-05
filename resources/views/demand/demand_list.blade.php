@foreach ($demands as $demand)
    <tr>
        <td>
            {{ $loop->iteration }}
        </td>

        <td>
            {{ $demand->overseas_agencie->employer_name ?? '' }}
        </td>

        <td>
            {{ $demand->demand_number ?? '' }}
        </td>

        <td>
            {{ $demand->demand_date ?? '' }}
        </td>

        <td>
            {{ $demand->approval_number ?? '' }}
        </td>

        <td>
            {{ $demand->approval_date ?? '' }}
        </td>

        <td class="right">
            {{ $demand->male ?? 0 }}
        </td>

        <td class="right">
            {{ $demand->female ?? 0 }}
        </td>

        <td class="right">
            @php
                $male = $demand->male ?? 0;
                $female = $demand->female ?? 0;
                $total = $male + $female;
                echo $total;
            @endphp
        </td>


        <td class="right">
            <a href="{{ Storage::url($demand->file) }}" target="_blank">
                {{ $demand->file_name ?? '' }}
            </a>
        </td>
        
        <td class="text-center">
            <button type="button" class="btn btn-primary btn-sm dropdown-toggle block" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" style="width: 100%;">
                Action
            </button>

            <div class="dropdown-menu">

                <a class="dropdown-item" href="{{ route('demand.edit', $demand->id) }}">
                    Edit
                </a>

                <form action="{{ route('demand.destroy', $demand->id) }}" method="POST">
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
