<div class="table-responsive text-nowrap">

    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search: Name, N.R.C NO" id="nameListSearch">
    </div>

    <form action="{{ route('contract_name_list.update', $contract->id) }}" method="post" id="create-form">
        @csrf
        @method('PUT')

        <table class="table table-bordered table-sm" id="nameListTable" style="margin-bottom: 20px;">
            @foreach ($interviews as $key => $interview)
                <thead>
                    <tr>
                        <th style="background-color: #F7C133; color: white; text-align: center;">
                            {{ $key + 1 }}
                        </th>

                        <th colspan="2" style="background-color: #F7C133; color: white; text-align: center;">
                            {{ $interview->interview_title ?? '' }}
                        </th>

                        <th colspan="2" style="background-color: #F7C133; color: white; text-align: center;">
                            {{ $interview->interview_date ?? '' }}
                        </th>

                        <th colspan="21" style="background-color: #F7C133; color: white; text-align: center;"></th>
                    </tr>

                    @include('component.contract.interview_name_list_header')
                </thead>
                <tbody>
                    @php
                        $loop_index = 1;
                    @endphp
                    @foreach ($interview->name_lists as $key => $name_list)
                        @if ($name_list->medical_fail == '' and
                            $name_list->remark == '' and
                            $name_list->fail_cancel == '' and
                            $name_list->contract_id == '')
                            @include('component.contract.interview_name_list')
                        @endif
                    @endforeach
                </tbody>
            @endforeach
        </table>

        <button type="submit" class="btn btn-primary">
            <span class="fa fa-arrow-right"></span>&nbsp;
            Submit to Contract Name List
        </button>
    </form>
</div>

@section('script')
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\UpdateNameListContract', '#create-form') !!}
@endsection
<script>
    $(document).ready(function() {
        // Check or Uncheck All checkboxes
        $("#checkall").change(function() {
            var checked = $(this).is(':checked');
            if (checked) {
                $(".checkbox").each(function() {
                    $(this).prop("checked", true);
                });
            } else {
                $(".checkbox").each(function() {
                    $(this).prop("checked", false);
                });
            }
        });

        // Changing state of CheckAll checkbox 
        $(".checkbox").click(function() {
            if ($(".checkbox").length == $(".checkbox:checked").length) {
                $("#checkall").prop("checked", true);
            } else {
                $("#checkall").prop("checked", false);
            }

        });
    });
</script>
@endsection
