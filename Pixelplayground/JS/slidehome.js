// let slideIndex = 0;

//         function showSlides() {
//             let slides = document.getElementsByClassName("slide");

//             for (let i = 0; i < slides.length; i++) {
//                 slides[i].style.display = "none";
//             }

//             // loop
//             slideIndex++;
//             if (slideIndex > slides.length) {
//                 slideIndex = 1;
//             }

//             slides[slideIndex - 1].style.display = "block";

//             setTimeout(showSlides, 3000);
//         }
        
//         showSlides();

let slides = document.querySelectorAll('.slide');

function slideshow() {
    lastSlide = slideNum;
    if (slideNum < slides.length -1 ) {
        slideNum ++;
    } else {
        slideNum = 0;
    }

    slides[lastSlide].style.display = "none";
    slides[slideNum].style.display = "block";
    num.innerHTML =`${slideNum + 1} / ${slides.length}`;
}

slides[lastSlide].style.display = "none";
slides[slideNum].style.display = "block";
num.innerHTML =`${slideNum + 1} / ${slides.length}`;
let timer = 3000;
let slideInter = setInterval(slideshow, timer);