document.addEventListener('DOMContentLoaded', function() {
    // Vérifiez si l'élément existe
    if (document.getElementById('particles-js')) {
        particlesJS.load('particles-js', '/assets/js/particles-config.json', function() {
            console.log('particles.js chargé');
        });
    } else {
        console.warn('L\'élément particles-js n\'existe pas dans le DOM');
    }
});