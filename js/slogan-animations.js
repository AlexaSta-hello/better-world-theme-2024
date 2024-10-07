
document.addEventListener('DOMContentLoaded', function () {
    const sloganSection = document.querySelector('#slogan');
    const femmeElement = document.querySelector('#femme');
    const webElement = document.querySelector('#web');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Animationen hinzufügen, wenn der Slogan sichtbar wird
                femmeElement.classList.add('animated-left');
                webElement.classList.add('animated-right');
            }
        });
    }, {
        threshold: 0.5 // Die Animation startet, wenn 50% der Section sichtbar sind
    });

    observer.observe(sloganSection);
});
