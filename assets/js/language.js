document.addEventListener("DOMContentLoaded", function() {
});

document.querySelectorAll('[data-toggle="refresh"]').forEach(function(element) {
    element.addEventListener('click', function(event) {
        setTimeout(function() {
            event.preventDefault();
           window.location.reload();
        }, 100); // 2000 milliseconds = 2 seconds
    });
});
