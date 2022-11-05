<div style="text-align: center">
    <h4>
        {{ strtoupper($pre_interview->overseas_agencie->employer_name ?? '') }}
        &nbsp; INTERVIEW NAME LIST
        ({{ $pre_interview->interview_date ?? '' }})
    </h4>
</div>


<a href="{{ route('interview_name_list_export', $pre_interview->id) }}" class="text-white btn btn-success">
    Excel Download
</a>

<button type="button" class="btn btn-primary">
    Total (Male)
    <span class="badge bg-white text-primary">
        {{ $male_total ?? '' }}
    </span>
</button>

<hr>
<div class="table-responsive text-nowrap">
    <table class="table table-bordered table-sm">
        @include('component.name_list_header')
        <tbody class="table-border-bottom-0">
            @php
                $iteration = 1;
            @endphp
            @foreach ($name_lists as $name_list)
                @if ($name_list->gender == 'M')
                    @include('component.name_lists')
                    @include('interview_name_list.shared.name_list_edit')
                @endif
            @endforeach
        </tbody>
    </table>
</div>
