
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("slide-image");
        var prevButton = document.querySelector(".prev-slide");
        var nextButton = document.querySelector(".next-slide");

        // Hide all slides
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }

        // Increment slide index
        slideIndex++;

        // Reset slide index if it exceeds the number of slides
        if (slideIndex > slides.length) {
            slideIndex = 1;
        }

        // Display the current slide
        slides[slideIndex - 1].style.display = "block";

        // Change slide to previous
        prevButton.addEventListener("click", function() {
            slideIndex--;
            if (slideIndex < 1) {
                slideIndex = slides.length;
            }
            showSlides();
        });

        // Change slide to next
        nextButton.addEventListener("click", function() {
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1;
            }
            showSlides();
        });

        // Change slide on click - left side of the image
        slides[slideIndex - 1].addEventListener("click", function(e) {
            if (e.clientX < window.innerWidth / 2) {
                slideIndex--;
                if (slideIndex < 1) {
                    slideIndex = slides.length;
                }
                showSlides();
            }
        });

        // Change slide on click - right side of the image
        slides[slideIndex - 1].addEventListener("click", function(e) {
            if (e.clientX >= window.innerWidth / 2) {
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1;
                }
                showSlides();
            }
        });

        // Change slide every 2 seconds
        setTimeout(showSlides, 2000);
    }