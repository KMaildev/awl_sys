@extends('layouts.main')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="card">

                <div class="card-body">
                    <div class="card-title header-elements">
                        <h5 class="m-0 me-2">
                            Employer Company
                        </h5>
                        <div class="card-title-elements ms-auto">
                            <div class="card-header-elements ms-auto">
                                <form action="{{ route('overseas_agent.index') }}" method="GET" autocomplete="off">
                                    <input type="text" class="form-control form-control-sm" placeholder="Search"
                                        name="search">
                                </form>
                            </div>

                            <a href="{{ route('overseas_agent.create') }}"
                                class="dt-button create-new btn btn-primary btn-sm">
                                <span>
                                    <i class="bx bx-plus me-sm-2"></i>
                                    <span class="d-none d-sm-inline-block">Create</span>
                                </span>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered table-sm">
                        <thead>
                            <tr class="tbbg">
                                <th style="color: white; width: 1%;">#</th>
                                <th class="text-center cw">Employer</th>
                                <th class="text-center cw">Type of Company</th>
                                <th class="text-center cw">Company Phone</th>
                                <th class="text-center cw">Company Email</th>
                                <th class="text-center cw">Country</th>
                                <th class="text-center cw">Remark</th>
                                <th class="text-center cw">Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($overseas_agencies as $key => $value)
                                <tr>
                                    <td style="text-align: center;">
                                        {{ $key + 1 }}
                                    </td>

                                    <td style="text-align: center;">
                                        {{ $value->employer_name }}
                                    </td>

                                    <td style="text-align: center;">
                                        {{ $value->type_of_company }}
                                    </td>

                                    <td style="text-align: center;">
                                        {{ $value->company_phone }}
                                    </td>

                                    <td style="text-align: center;">
                                        {{ $value->company_email ?? '' }}
                                    </td>

                                    <td style="text-align: center;">
                                        {{ $value->countries_table->country ?? '' }}
                                    </td>

                                    <td style="text-align: center;">
                                        {{ $value->remark ?? '' }}
                                    </td>

                                    <td style="text-align: center;">

                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success btn-sm dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">

                                                <a class="dropdown-item" href="{{ route('overseas_agent.edit', $value->id) }}">
                                                    Edit
                                                </a>

                                                <form action="{{ route('overseas_agent.destroy', $value->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="dropdown-item del_confirm"
                                                        id="confirm-text" data-toggle="tooltip">
                                                        Delete
                                                    </button>
                                                </form>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
