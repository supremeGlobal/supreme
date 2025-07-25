<script src="{{ asset('admin/js/jquery.min.js') }}"></script>
<script src="{{ asset('admin/js/overlayscrollbars.browser.es6.min.js') }}"></script>
<script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin/js/adminlte.min.js') }}"></script>

{{-- Datatable --}}
<script src="//cdn.datatables.net/2.3.1/js/dataTables.min.js"></script>
<script>
    $('.table').DataTable({
        "pageLength": 15,
        "lengthMenu": [
            [15, 25, 50, -1],
            [15, 25, 50, "All"]
        ]
    });
</script>

<!-- Summernote JS -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 200,
            placeholder: 'Write your text here...'
        });
    });
</script>

{{-- OverlayScrollbars Configure --}}
<script>
    const SELECTOR_SIDEBAR_WRAPPER = ".sidebar-wrapper";
    const Default = {
        scrollbarTheme: "os-theme-light",
        scrollbarAutoHide: "leave",
        scrollbarClickScroll: true,
    };

    document.addEventListener("DOMContentLoaded", function() {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
        if (
            sidebarWrapper &&
            typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== "undefined"
        ) {
            OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                scrollbars: {
                    theme: Default.scrollbarTheme,
                    autoHide: Default.scrollbarAutoHide,
                    clickScroll: Default.scrollbarClickScroll,
                },
            });
        }
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script>

<script>
    let elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
    elems.forEach(function(html) {
        let switchery = new Switchery(html, {
            size: 'small'
        });
    });

    // Status change
    $(document).ready(function() {
        // Reusable toastr alert function
        function showToastr(type, message) {
            toastr.options = {
                closeButton: true,
                closeMethod: 'fadeOut',
                closeDuration: 100
            };
            toastr[type](message);
        }
        $('.status').change(function() {
            let model = $(this).data('model');
            let field = 'status';
            let id = $(this).data('id');

            $.ajax({
                type: "GET",
                dataType: "json",
                url: '{{ route('status') }}',
                data: {
                    'model': model,
                    'field': field,
                    'id': id
                },
                success: function(data) {
					showToastr('success', data.message);
                },
                error: function(xhr) {
                    let message = xhr.responseJSON?.message || 'Something went wrong';
	                showToastr('error', message);
                }
            });
        });
    });

    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 5000);
</script>
