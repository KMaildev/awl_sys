@extends('layouts.main')
@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-8">
            <div class="card mb-4">
                <h5 class="card-header">
                    Employer/Company Info
                </h5>
                <div class="card-body">
                    <form autocomplete="off" action="{{ route('overseas_agent.update', $overseas_agency->id) }}" method="POST"
                        id="create-form" class="form" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <hr>

                        <div class="form-group mt-4 row @error('employer_name') has-danger @enderror">
                            <label class="col-3 col-form-label">
                                Employer/Company
                            </label>
                            <div class="col-9">
                                <input type="text"
                                    class="form-control @error('employer_name') form-control-danger @enderror"
                                    name="employer_name" value="{{ $overseas_agency->employer_name }}">
                                @error('employer_name')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group form-group mt-4 row @error('type_of_company') has-danger @enderror">
                            <label class="col-3 col-form-label">Type of Company</label>
                            <div class="col-9">
                                <input type="text"
                                    class="form-control @error('type_of_company') form-control-danger @enderror"
                                    name="type_of_company" value="{{ $overseas_agency->type_of_company }}">
                                @error('type_of_company')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }} </div>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group form-group mt-4 row @error('type_of_company') has-danger @enderror">
                            <label class="col-3 col-form-label">Company Phone</label>
                            <div class="col-9">
                                <input type="text"
                                    class="form-control @error('company_phone') form-control-danger @enderror"
                                    name="company_phone" value="{{ $overseas_agency->company_phone }}">
                                @error('type_of_company')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }} </div>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group form-group mt-4 row @error('company_email') has-danger @enderror">
                            <label class="col-3 col-form-label">Company Email</label>
                            <div class="col-9">
                                <input type="text"
                                    class="form-control @error('company_email') form-control-danger @enderror"
                                    name="company_email" value="{{ $overseas_agency->company_email }}">
                                @error('company_email')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }} </div>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group form-group mt-4 row @error('company_address') has-danger @enderror">
                            <label class="col-3 col-form-label">Company Address</label>
                            <div class="col-9">
                                <input type="text"
                                    class="form-control @error('company_address') form-control-danger @enderror"
                                    name="company_address" value="{{ $overseas_agency->company_address }}">
                                @error('company_address')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }} </div>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group form-group mt-4 row @error('company_website') has-danger @enderror">
                            <label class="col-3 col-form-label">
                                Website
                            </label>
                            <div class="col-9">
                                <input type="text"
                                    class="form-control @error('company_website') form-control-danger @enderror"
                                    name="company_website" value="{{ $overseas_agency->company_website }}">
                                @error('company_website')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }} </div>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group form-group mt-4 row @error('countrie_id') has-danger @enderror">
                            <label class="col-3 col-form-label">Country</label>
                            <div class="col-9">
                                <select class="form-control form-select" name="countrie_id">
                                    @foreach ($countryies as $country)
                                        <option value="{{ $country->id }}"
                                            @if ($country->id == $overseas_agency->countrie_id) selected @endif>
                                            {{ $country->country }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            @error('countrie_id')
                                <div class="form-control-feedback" style="color: red;">
                                    {{ $message }} </div>
                            @enderror
                        </div>


                        <div class="form-group mt-4 row @error('remark') has-danger @enderror">
                            <label class="col-3 col-form-label">
                                Remark
                            </label>
                            <div class="col-9">
                                <textarea name="remark" class="form-control" rows="5">{{ $overseas_agency->remark }}</textarea>
                                @error('remark')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }} </div>
                                @enderror
                            </div>
                        </div>
                        <hr>
                        <div class="mb-3 row">
                            <label for="html5-search-input" class="col-md-3 col-form-label"></label>
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-secondary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\UpdateOverseaAgency', '#create-form') !!}
@endsection
