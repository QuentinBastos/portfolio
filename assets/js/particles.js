// Réseau de points de la section « Qui suis-je ? ». Moins dense sur téléphone, absent si le
// système demande moins d'animations, et arrêté tant que la section n'est pas à l'écran.
document.addEventListener('DOMContentLoaded', function () {
    var element = document.getElementById('particles-js');
    if (!element || typeof particlesJS === 'undefined') {
        return;
    }
    if (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        return;
    }

    fetch('/assets/js/particles-config.json')
        .then(function (response) {
            return response.json();
        })
        .then(function (config) {
            if (window.innerWidth < 768) {
                config.particles.number.value = 35;
                config.interactivity.events.onhover.enable = false;
            }
            particlesJS('particles-js', config);

            var pJS = window.pJSDom && window.pJSDom[0] && window.pJSDom[0].pJS;
            if (!pJS || !('IntersectionObserver' in window)) {
                return;
            }
            var running = true;
            new IntersectionObserver(function (entries) {
                var visible = entries[0].isIntersecting;
                if (visible && !running) {
                    running = true;
                    pJS.fn.vendors.draw();
                } else if (!visible && running) {
                    running = false;
                    window.cancelRequestAnimFrame(pJS.fn.drawAnimFrame);
                }
            }).observe(element);
        });
});
