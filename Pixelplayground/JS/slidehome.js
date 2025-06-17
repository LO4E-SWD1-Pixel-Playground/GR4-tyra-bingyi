let slides = document.querySelectorAll('.slide');

let lastSlide = 1;


function slideshow() {
    lastSlide = slideNum;
    if (slideNum < slides.length -1 ) {
        slideNum ++;
    } else {
        slideNum = 0;
    }

    slides[lastSlide].style.display = "none";
    slide.innerHTML =`${slideNum + 1} / ${slides.length}`;
}

slides[lastSlide].style.display = "none";
let timer = 3000;
let slideInter = setInterval(slideshow, timer);