document.addEventListener('DOMContentLoaded', function () {
    const leistungenKonzeptSection = document.querySelector('.leistungen-konzept');
    const konzeptElement = leistungenKonzeptSection.querySelector('.leistungen-page-item-bild');

    const observer3 = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Animationen hinzufügen, wenn der Slogan sichtbar wird
                konzeptElement.classList.add('l-animated-right');
            }
        });
    }, {
        threshold: 0.5 // Die Animation startet, wenn 50% der Section sichtbar sind
    });

    observer3.observe(leistungenKonzeptSection);



    const leistungenWebentwicklungSection = document.querySelector('.leistungen-webentwicklung');
    const webentwicklungElement = leistungenWebentwicklungSection.querySelector('.leistungen-page-item-bild');

    const observer4 = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Animationen hinzufügen, wenn der Slogan sichtbar wird
                webentwicklungElement.classList.add('l-animated-left');
            }
        });
    }, {
        threshold: 0.5 // Die Animation startet, wenn 50% der Section sichtbar sind
    });

    observer4.observe(leistungenWebentwicklungSection);



    const leistungenWebdesignSection = document.querySelector('.leistungen-webdesign');
    const webdesignElement = leistungenWebdesignSection.querySelector('.leistungen-page-item-bild');

    const observer5 = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Animationen hinzufügen, wenn der Slogan sichtbar wird
                webdesignElement.classList.add('l-animated-right');
            
            }
        });
    }, {
        threshold: 0.5 // Die Animation startet, wenn 50% der Section sichtbar sind
    });

    observer5.observe(leistungenWebdesignSection);


    const leistungenSeoSection = document.querySelector('.leistungen-seo');
    const seoElement = leistungenSeoSection.querySelector('.leistungen-page-item-bild');

    const observer6 = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Animationen hinzufügen, wenn der Slogan sichtbar wird
                seoElement.classList.add('l-animated-left');
            }
        });
    }, {
        threshold: 0.5 // Die Animation startet, wenn 50% der Section sichtbar sind
    });

    observer6.observe(leistungenSeoSection);


    const leistungenHoistingSection = document.querySelector('.leistungen-hoisting');
    const hoistingElement = leistungenHoistingSection.querySelector('.leistungen-page-item-bild');

    const observer7 = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Animationen hinzufügen, wenn der Slogan sichtbar wird
                hoistingElement.classList.add('l-animated-right');
            }
        });
    }, {
        threshold: 0.5 // Die Animation startet, wenn 50% der Section sichtbar sind
    });

    observer7.observe(leistungenHoistingSection);
});





