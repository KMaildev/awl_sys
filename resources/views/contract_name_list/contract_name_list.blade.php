<div class="table-responsive text-nowrap">

    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search: Name, N.R.C NO" id="contractNameListSearch">
        <a href="{{ route('contract_name_list_export', $contract->id) }}" class="text-white btn btn-success">
            Excel Download
        </a>
    </div>

    <table class="table table-bordered table-sm" id="contractNameListTable" style="margin-bottom: 20px;">
        @include('component.name_list_header')
        <tbody>
            @php
                $loop_index = 1;
            @endphp
            @foreach ($contract_name_lists as $key => $name_list)
                @include('component.name_lists')
            @endforeach
        </tbody>
    </table>
</div>

@section('script')
@endsection