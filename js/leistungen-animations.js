document.addEventListener('DOMContentLoaded', function () {
    const leistungenKonzeptSection = document.querySelector('.leistungen-konzept');
    const konzeptTextElement = document.querySelector('.konzept-text');
    const konzeptElement = leistungenKonzeptSection.querySelector('h2');

    const observer3 = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Animationen hinzufügen, wenn der Slogan sichtbar wird
                konzeptTextElement.classList.add('l-animated-right');
                konzeptElement.classList.add('active');
            }
        });
    }, {
        threshold: 0.5 // Die Animation startet, wenn 50% der Section sichtbar sind
    });

    observer3.observe(leistungenKonzeptSection);



    const leistungenWebentwicklungSection = document.querySelector('.leistungen-webentwicklung');
    const webentwicklungTextElement = document.querySelector('.webentwicklung-text');
    const webentwicklungElement = leistungenWebentwicklungSection.querySelector('h2');

    const observer4 = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Animationen hinzufügen, wenn der Slogan sichtbar wird
                webentwicklungTextElement.classList.add('l-animated-left');
                webentwicklungElement.classList.add('active');
            }
        });
    }, {
        threshold: 0.5 // Die Animation startet, wenn 50% der Section sichtbar sind
    });

    observer4.observe(leistungenWebentwicklungSection);



    const leistungenWebdesignSection = document.querySelector('.leistungen-webdesign');
    const webdesignTextElement = document.querySelector('.webdesign-text');
    const webdesignElement = leistungenWebdesignSection.querySelector('h2');

    const observer5 = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Animationen hinzufügen, wenn der Slogan sichtbar wird
                webdesignTextElement.classList.add('l-animated-right');
                webdesignElement.classList.add('active');
            }
        });
    }, {
        threshold: 0.5 // Die Animation startet, wenn 50% der Section sichtbar sind
    });

    observer5.observe(leistungenWebdesignSection);


    const leistungenSeoSection = document.querySelector('.leistungen-seo');
    const seoTextElement = document.querySelector('.seo-text');
    const seoElement = leistungenSeoSection.querySelector('h2');

    const observer6 = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Animationen hinzufügen, wenn der Slogan sichtbar wird
                seoTextElement.classList.add('l-animated-left');
                seoElement.classList.add('active');
            }
        });
    }, {
        threshold: 0.5 // Die Animation startet, wenn 50% der Section sichtbar sind
    });

    observer6.observe(leistungenSeoSection);


    const leistungenHoistingSection = document.querySelector('.leistungen-hoisting');
    const hoistingTextElement = document.querySelector('.hoisting-text');
    const hoistingElement = leistungenHoistingSection.querySelector('h2');

    const observer7 = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Animationen hinzufügen, wenn der Slogan sichtbar wird
                hoistingTextElement.classList.add('l-animated-right');
                hoistingElement.classList.add('active');
            }
        });
    }, {
        threshold: 0.5 // Die Animation startet, wenn 50% der Section sichtbar sind
    });

    observer7.observe(leistungenHoistingSection);
});





