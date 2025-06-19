const slides = document.querySelectorAll(".slide");

let currentSlide = 0;

    function showNextSlide() {
        slides[currentSlide].style.display = "none";
        currentSlide = (currentSlide + 1) % slides.length;
        slides[currentSlide].style.display = "block";
    }

    slides.forEach(slide => slide.style.display = "none");
    slides[0].style.display = "block";

    setInterval(showNextSlide, 3000);