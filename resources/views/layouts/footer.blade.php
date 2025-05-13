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
    
    document.addEventListener("DOMContentLoaded", function () {
        const radials = document.querySelectorAll('.radial');

        const drawRadial = (el, percent) => {
            const canvas = el.querySelector('canvas');
            const ctx = canvas.getContext('2d');
            const radius = canvas.width / 2;
            const lineWidth = 6;
            const endAngle = (Math.PI * 2) * (percent / 100);

            // Clear and draw background circle
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            ctx.beginPath();
            ctx.arc(radius, radius, radius - lineWidth, 0, Math.PI * 2);
            ctx.strokeStyle = "#eee";
            ctx.lineWidth = lineWidth;
            ctx.stroke();

            // Draw foreground arc
            ctx.beginPath();
            ctx.arc(radius, radius, radius - lineWidth, -Math.PI / 2, endAngle - Math.PI / 2);
            ctx.strokeStyle = "#00aaff";
            ctx.lineWidth = lineWidth;
            ctx.stroke();
        };

        const animateCounter = (el, target) => {
            let current = 0;
            const step = Math.ceil(target / 50);
            const span = el.querySelector("span");
            const interval = setInterval(() => {
                current += step;
                if (current >= target) {
                    current = target;
                    clearInterval(interval);
                }
                span.textContent = current;
                drawRadial(el, current * 100 / target); // animate radial arc
            }, 20);
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const el = entry.target;
                    const percent = parseInt(el.getAttribute("data-percent"), 10);
                    animateCounter(el, percent);
                    observer.unobserve(el); // only run once
                }
            });
        }, {
            threshold: 0.5
        });

        radials.forEach(el => {
            observer.observe(el);
        });
    });
</script>

