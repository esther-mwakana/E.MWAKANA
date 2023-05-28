// JavaScript code here

    // Slideshow functionality
    const slides = document.getElementsByClassName('slide');
    const dots = document.getElementsByClassName('dot');
    let currentSlide = 0;

    // Function to show the current slide
    function showSlide(index) {
      // Hide all slides
      for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = 'none';
      }

      // Remove active class from all dots
      for (let i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(' active', '');
      }

      // Show the current slide
      slides[index].style.display = 'block';

      // Add active class to the corresponding dot
      dots[index].className += ' active';
    }

    // Function to switch to the next slide
    function nextSlide() {
      currentSlide++;
      if (currentSlide >= slides.length) {
        currentSlide = 0;
      }
      showSlide(currentSlide);
    }

    // Function to switch to the previous slide
    function prevSlide() {
      currentSlide--;
      if (currentSlide < 0) {
        currentSlide = slides.length - 1;
      }
      showSlide(currentSlide);
    }

    // Function to handle dot click events
    function dotClick(index) {
      currentSlide = index;
      showSlide(currentSlide);
    }

    // Add event listeners to the dots
    for (let i = 0; i < dots.length; i++) {
      dots[i].addEventListener('click', function() {
        dotClick(i);
      });
    }

    // Show the initial slide
    showSlide(currentSlide);

    // Set interval to automatically switch slides every 3 seconds
    setInterval(nextSlide, 3000);
