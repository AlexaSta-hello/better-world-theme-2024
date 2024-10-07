document.addEventListener('DOMContentLoaded', function () {
    const sloganProjectsSection = document.querySelector('#slogan-projects');
    const schauElement = document.querySelector('#schau');
    const inspirationElement = document.querySelector('#inspiration');

    const observer2 = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Animationen hinzufügen, wenn der Slogan sichtbar wird
                schauElement.classList.add('animated-left');
                inspirationElement.classList.add('animated-right');
            }
        });
    }, {
        threshold: 0.5 // Die Animation startet, wenn 50% der Section sichtbar sind
    });

    observer2.observe(sloganProjectsSection);
});