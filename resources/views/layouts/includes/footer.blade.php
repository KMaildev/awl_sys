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

<script>
    let date = new Date();
    let now = `${date.getDate()}/${date.getMonth() + 1}/${date.getFullYear()}`;
    $(".date_picker").datetimepicker({
        value: now,
        format: "Y-m-d h:i A",
    });
</script>
@yield('script')
</body>

</html>
