<!-- Core JS -->
<script src="{{ asset('assets/js/core/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>

<!-- Plugin yang dipakai di hampir semua halaman -->
<script src="{{ asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

<!-- Kaiadmin -->
<script src="{{ asset('assets/js/kaiadmin.min.js') }}"></script>

{{-- Plugin khusus halaman (chart, datatables, dll) dipasang lewat @push('scripts') di halaman masing-masing --}}

@livewireScripts
