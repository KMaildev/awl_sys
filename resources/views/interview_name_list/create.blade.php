<div style="text-align: center">
    <h4>
        {{ strtoupper($pre_interview->overseas_agencie->employer_name ?? '') }}
        &nbsp; INTERVIEW NAME LIST
        ({{ $pre_interview->interview_date ?? '' }})
    </h4>
</div>

<form action="{{ route('interview_name_list.store') }}" method="post" enctype="multipart/form-data" id="create-form">
    @csrf
    <input type="hidden" value="{{ $pre_interview->id }}" name="pre_interview_id">
    <input type="hidden" value="{{ $pre_interview->demand_id }}" name="demand_id">
    <input type="hidden" value="{{ $pre_interview->overseas_agencie_id }}" name="overseas_agencie_id">

    <div class="card-body">
        <p style="color: red">
            Choose Interview Name List Excel File for
            {{ strtoupper($pre_interview->overseas_agencie->employer_name ?? '') }}
        </p>
        <div class="input-group">
            <input type="file" class="form-control" name="name_list_file" accept=".xlsx, .csv">
        </div>
        <br>
        <a href="{{ asset('data/name_list.xlsx') }}" class="btn btn-primary text-white" download="">
            <i class="fa fa-download"></i>
            Simple File Download
        </a>
        <button class="btn btn-primary" type="submit" id="button-addon2">
            Submit
        </button>
    </div>
</form>
<br><br>

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreNameList', '#create-form') !!}
@endsection
