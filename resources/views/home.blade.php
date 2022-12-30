@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-sm-12 col-12">
            <div class="row">

                <div class="col-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between" style="position: relative;">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="avatar">
                                        <span class="avatar-initial bg-label-primary rounded-circle"><i
                                                class="bx bx-user fs-4"></i></span>
                                    </div>
                                    <div class="card-info">
                                        <h5 class="card-title mb-0 me-2">
                                            {{ $total_demand ?? 0 }}
                                        </h5>
                                        <small class="text-muted">
                                            Demand Total
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between" style="position: relative;">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="avatar">
                                        <span class="avatar-initial bg-label-primary rounded-circle"><i
                                                class="fa fa-users fs-4"></i></span>
                                    </div>
                                    <div class="card-info">
                                        <h5 class="card-title mb-0 me-2">
                                            {{ $pre_interview ?? 0 }}
                                        </h5>
                                        <small class="text-muted">
                                            Pre Interview Total
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between" style="position: relative;">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="avatar">
                                        <span class="avatar-initial bg-label-primary rounded-circle"><i
                                                class="fa fa-users fs-4"></i></span>
                                    </div>
                                    <div class="card-info">
                                        <h5 class="card-title mb-0 me-2">
                                            {{ $thai_interview ?? 0 }}
                                        </h5>
                                        <small class="text-muted">
                                            Thai Interview Total
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between" style="position: relative;">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="avatar">
                                        <span class="avatar-initial bg-label-primary rounded-circle">
                                            <i class="fa-solid fa-file-signature fs-4"></i>
                                        </span>
                                    </div>
                                    <div class="card-info">
                                        <h5 class="card-title mb-0 me-2">
                                            {{ $total_contract ?? 0 }}
                                        </h5>
                                        <small class="text-muted">
                                            Contract Total
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between" style="position: relative;">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="avatar">
                                        <span class="avatar-initial bg-label-primary rounded-circle">
                                            <i class="fa-sharp fa-solid fa-paper-plane fs-4"></i>
                                        </span>
                                    </div>
                                    <div class="card-info">
                                        <h5 class="card-title mb-0 me-2">
                                            {{ $total_sending ?? 0 }}
                                        </h5>
                                        <small class="text-muted">
                                            Sending Total
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between" style="position: relative;">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="avatar">
                                        <span class="avatar-initial bg-label-danger rounded-circle">
                                            <i class="fa-sharp fa-solid fa-xmark fs-4 danger"></i>
                                        </span>
                                    </div>
                                    <div class="card-info">
                                        <h5 class="card-title mb-0 me-2">
                                            {{ $pre_failed ?? 0 }}
                                        </h5>
                                        <small class="text-muted">
                                            Pre Failed
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between" style="position: relative;">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="avatar">
                                        <span class="avatar-initial bg-label-danger rounded-circle">
                                            <i class="fa-sharp fa-solid fa-xmark fs-4 danger"></i>
                                        </span>
                                    </div>
                                    <div class="card-info">
                                        <h5 class="card-title mb-0 me-2">
                                            {{ $thai_failed ?? 0 }}
                                        </h5>
                                        <small class="text-muted">
                                            Thai Failed
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between" style="position: relative;">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="avatar">
                                        <span class="avatar-initial bg-label-danger rounded-circle">
                                            <i class="fa-sharp fa-solid fa-xmark fs-4 danger"></i>
                                        </span>
                                    </div>
                                    <div class="card-info">
                                        <h5 class="card-title mb-0 me-2">
                                            {{ $total_reject ?? 0 }}
                                        </h5>
                                        <small class="text-muted">
                                            Reject
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between" style="position: relative;">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="avatar">
                                        <span class="avatar-initial bg-label-danger rounded-circle">
                                            <i class="fa-sharp fa-solid fa-xmark fs-4 danger"></i>
                                        </span>
                                    </div>
                                    <div class="card-info">
                                        <h5 class="card-title mb-0 me-2">
                                            @php
                                                $total = $pre_failed + $thai_failed + $total_reject;
                                                echo $total;
                                            @endphp
                                        </h5>
                                        <small class="text-muted">
                                            Total
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h4>login history</h4>
                            <div class="table-responsive text-nowrap">
                                <table class="table table-bordered table-sm">
                                    <thead>
                                        <tr class="tbbg">
                                            <th style="color: white; width: 1%;">#</th>
                                            <th class="text-center cw">Photo</th>
                                            <th class="text-center cw">User Id</th>
                                            <th class="text-center cw">Name</th>
                                            <th class="text-center cw">Email</th>
                                            <th class="text-center cw">Phone</th>
                                            <th class="text-center cw">Last Login At</th>
                                            <th class="text-center cw">IP</th>
                                            <th class="text-center cw">Devices</th>
                                            <th class="text-center cw">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        @foreach ($users as $key => $value)
                                            <tr>
                                                <td style="text-align: center;">
                                                    {{ $key + 1 }}
                                                </td>

                                                <td style="text-align: center;">
                                                    @if ($value->passport_photo)
                                                        <img src="{{ Storage::url($value->passport_photo) }}"
                                                            alt=""
                                                            style="width: 30px; height: 30px; background-position: center; background-size: contain, cover;">
                                                    @endif
                                                </td>

                                                <td style="text-align: center;">
                                                    {{ $value->employee_id }}
                                                </td>

                                                <td style="text-align: center;">
                                                    {{ $value->name }}
                                                </td>

                                                <td style="text-align: center;">
                                                    {{ $value->email }}
                                                </td>

                                                <td style="text-align: center;">
                                                    {{ $value->phone ?? '' }}
                                                </td>

                                                <td style="text-align: center;">
                                                    {{ $value->last_login_at ?? '' }}
                                                </td>

                                                <td style="text-align: center;">
                                                    {{ $value->last_login_ip ?? '' }}
                                                </td>

                                                <td style="text-align: center;">
                                                    {{ $value->device ?? '' }}
                                                </td>

                                                <td style="text-align: center;">
                                                    <a class="btn btn-info btn-xs"
                                                        href="{{ route('users.edit', $value->id) }}">
                                                        Edit
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
