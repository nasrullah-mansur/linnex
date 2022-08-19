
<script src="{{ asset('admin/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/js/core/app-menu.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/js/core/app.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/js/scripts/customizer.js') }}" type="text/javascript"></script>

<script src="{{ asset('admin/vendors/js/extensions/toastr.min.js') }}"></script>
<script src="{{ asset('admin/js/core/app.js') }}"></script>
{{-- @yield('js_plugins')
<script src="{{ asset('admin/js/custom.js') }}"></script> --}}


{{-- @if (Succest::get('success'))
    <script>
        toastr.success('Weldone', '{{ Succest::get('success') }}');
    </script>
@endif --}}

@yield('custom_js')