@foreach ($pre_interviews as $pre_interview)
    <tr>
        <td>
            {{ $loop->iteration }}
        </td>

        <td>
            {{ $pre_interview->overseas_agencie->employer_name ?? '' }}
        </td>

        <td>
            {{ $pre_interview->interview_title ?? '' }}
        </td>

        <td>
            {{ $pre_interview->interview_date ?? '' }}
        </td>

        <td class="right">
            {{ $pre_interview->male ?? 0 }}
        </td>

        <td class="right">
            {{ $pre_interview->female ?? 0 }}
        </td>

        <td class="right">
            @php
                $male = $pre_interview->male ?? 0;
                $female = $pre_interview->female ?? 0;
                $total = $male + $female;
                echo $total;
            @endphp
        </td>

        <td class="text-center">
            <button type="button" class="btn btn-primary btn-sm dropdown-toggle block" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" style="width: 100%;">
                Action
            </button>

            <div class="dropdown-menu">

                <a class="dropdown-item" href="{{ route('employer_interview.edit', $pre_interview->id) }}">
                    Edit
                </a>

                <a class="dropdown-item" href="{{ route('all_employer_interview_name_list', $pre_interview->id) }}">
                    THAI / INTERVIEW NAME LIST
                </a>

                <form action="{{ route('employer_interview.destroy', $pre_interview->id) }}" method="POST">
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
