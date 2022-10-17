<div class="modal fade" id="nameListEdit_{{ $name_list->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <form action="{{ route('interview_name_list.update', $name_list->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        {{ $name_list->name ?? '' }}
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-2 col-form-label">
                                Name
                            </label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $name_list->name ?? '' }}"
                                    name="name">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-2 col-form-label">
                                M/F
                            </label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $name_list->gender ?? '' }}"
                                    name="gender">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-2 col-form-label">
                                N.R.C NO
                            </label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $name_list->nrc ?? '' }}"
                                    name="nrc">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-2 col-form-label">
                                Father's name
                            </label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $name_list->father_name ?? '' }}"
                                    name="father_name">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-2 col-form-label">
                                Mother's Name
                            </label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $name_list->mother_name ?? '' }}"
                                    name="mother_name">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-2 col-form-label">
                                Qualification
                            </label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $name_list->qualification ?? '' }}"
                                    name="qualification">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-2 col-form-label">
                                Date of birth
                            </label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $name_list->date_of_birth ?? '' }}"
                                    name="date_of_birth">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-2 col-form-label">
                                Native town
                            </label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $name_list->native_town ?? '' }}"
                                    name="native_town">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-2 col-form-label">
                                Region
                            </label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $name_list->region ?? '' }}"
                                    name="region">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-2 col-form-label">
                                Come from to interview
                            </label>
                            <div class="col-md-10">
                                <input class="form-control" type="text"
                                    value="{{ $name_list->come_from_to_interview ?? '' }}"
                                    name="come_from_to_interview">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-2 col-form-label">
                                Expiry date
                            </label>
                            <div class="col-md-10">
                                <input class="form-control" type="text"
                                    value="{{ $name_list->expiry_date ?? '' }}" name="expiry_date">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-2 col-form-label">
                                slip date
                            </label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $name_list->slip_date ?? '' }}"
                                    name="slip_date">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-2 col-form-label">
                                Passport Issue Date
                            </label>
                            <div class="col-md-10">
                                <input class="form-control" type="text"
                                    value="{{ $name_list->passport_issue_date ?? '' }}" name="passport_issue_date">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-2 col-form-label">
                                Medical fail X-ray(or)Hep-B
                            </label>
                            <div class="col-md-10">
                                <input class="form-control" type="text"
                                    value="{{ $name_list->medical_fail ?? '' }}" name="medical_fail">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-2 col-form-label">
                                Phone Number
                            </label>
                            <div class="col-md-10">
                                <input class="form-control" type="text"
                                    value="{{ $name_list->phone_number ?? '' }}" name="phone_number">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-2 col-form-label">
                                PP Number
                            </label>
                            <div class="col-md-10">
                                <input class="form-control" type="text"
                                    value="{{ $name_list->passport_number ?? '' }}" name="passport_number">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-2 col-form-label">
                                Remark
                            </label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $name_list->remark ?? '' }}"
                                    name="remark">
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-2 col-form-label">
                                Fail/Cancel
                            </label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $name_list->fail_cancel ?? '' }}"
                                    name="fail_cancel">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-2 col-form-label">
                                Background Color
                            </label>
                            <div class="col-md-10">
                                <input class="form-control" type="color" name="background_color" value="#FFFFFF">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </form>
</div>
