<table class="table table-bordered table-sm">
    @include('component.export.name_list_export_header')
    <tbody class="table-border-bottom-0">
        @foreach ($name_lists as $name_list)
            @include('component.export.name_list_export')
        @endforeach
    </tbody>
</table>
