let slider = document.querySelector('.slider');
let nextBtn = document.querySelector('.next');

nextBtn.onclick = () => {
    slider.append(slider.querySelector('div:first-child'));
} 