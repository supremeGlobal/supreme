<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

<script>
    $(window).on("scroll", function() {
        if ($(window).scrollTop() > 100) {
            $(".navbarMain").addClass("fixed");
        } else {
            $(".navbarMain").removeClass("fixed");
        }
    });
</script>