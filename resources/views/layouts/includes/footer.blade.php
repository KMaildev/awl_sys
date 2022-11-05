<!--/ Content -->
</div>
<!--/ Content wrapper -->
</div>
<!--/ Layout container -->

</div>
</div>
<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

<script src="{{ asset('assets/vendor/libs/hammer/hammer.js') }}"></script>


<script src="{{ asset('assets/vendor/libs/i18n/i18n.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>

<script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
<!-- endbuild -->
<!-- Vendors JS -->
<script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>
<!-- Page JS -->
<script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js') }}"></script>
<script src="{{ asset('install/datetime/jquery.datetimepicker.js') }}"></script>
<script src="{{ asset('install/sweetalert/sweetalert.min.js') }}"></script>
<script>
    let date = new Date();
    let now = `${date.getDate()}/${date.getMonth() + 1}/${date.getFullYear()}`;
    $(".date_picker").datetimepicker({
        value: now,
        format: "Y-m-d h:i A",
    });


    $('.del_confirm').click(function(event) {
        var form = $(this).closest("form");
        event.preventDefault();
        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
    });


    // Js Search 
    $(document).ready(function() {
        $("#nameListSearch").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#nameListTable tbody tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });


    $(document).ready(function() {
        $("#contractNameListSearch").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#contractNameListTable tbody tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });


    // Remark 
    $(document).on("keyup", ".updateRemark", function() {
        var id = $(this).data('id');
        var value = $(this).val();

        var url = '{{ url('update_remark') }}';
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            method: 'GET',
            url: url,
            data: {
                id: id,
                value: value,
            },
            success: function(data) {
                console.log(data)
            },
            error: function(data) {
                console.log(data)
            }
        });
    });



    // Note 
    $(document).on("keyup", ".updateNote", function() {
        var id = $(this).data('id');
        var value = $(this).val();

        var url = '{{ url('update_note') }}';
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            method: 'GET',
            url: url,
            data: {
                id: id,
                value: value,
            },
            success: function(data) {
                console.log(data)
            },
            error: function(data) {
                console.log(data)
            }
        });
    });


    // Update Cancel 
    $(document).on("keyup", ".updateCancel", function() {
        var id = $(this).data('id');
        var value = $(this).val();

        var url = '{{ url('update_cancel') }}';
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            method: 'GET',
            url: url,
            data: {
                id: id,
                value: value,
            },
            success: function(data) {
                console.log(data)
            },
            error: function(data) {
                console.log(data)
            }
        });
    });


    // Update updateMedicalFail
    $(document).on("keyup", ".updateMedicalFail", function() {
        var id = $(this).data('id');
        var value = $(this).val();

        var url = '{{ url('update_medical_fail') }}';
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            method: 'GET',
            url: url,
            data: {
                id: id,
                value: value,
            },
            success: function(data) {
                console.log(data)
            },
            error: function(data) {
                console.log(data)
            }
        });
    });



    // Update Contract No 
    $(document).on("keyup", ".updateContractNo", function() {
        var id = $(this).data('id');
        var value = $(this).val();

        var url = '{{ url('update_contract_no') }}';
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            method: 'GET',
            url: url,
            data: {
                id: id,
                value: value,
            },
            success: function(data) {
                console.log(data)
            },
            error: function(data) {
                console.log(data)
            }
        });
    });
</script>
@yield('script')
</body>

</html>
