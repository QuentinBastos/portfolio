document.addEventListener("DOMContentLoaded", function () {
    const loader = document.getElementById('loader');
    const counter = document.createElement('div');
    counter.id = 'counter';
    counter.style.fontSize = '2em';
    counter.style.color = '#000';
    loader.appendChild(counter);

    if (loader) {
        loader.style.display = 'flex';
        let count = 0;
        const interval = setInterval(function () {
            counter.textContent = count + '%';
            count++;
            if (count > 100) {
                clearInterval(interval);
                loader.style.display = 'none';
            }
        }, 10); // Adjust the interval time as needed
    }
});