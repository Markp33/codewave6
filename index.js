document.addEventListener("DOMContentLoaded", () => {


  const items = document.querySelectorAll("[data-carousel-item]");
  const prevButton = document.querySelector("[data-carousel-prev]");
  const nextButton = document.querySelector("[data-carousel-next]");
  let currentPosition = 0;
  let autoSlideInterval;

  const updateSlides = () => {
      items.forEach((item, index) => {
          item.classList.toggle("hidden", index !== currentPosition);
      });
  };

  const showNextSlide = () => {
      currentPosition = (currentPosition + 1) % items.length;
      updateSlides();
  };

  const showPrevSlide = () => {
      currentPosition = (currentPosition - 1 + items.length) % items.length;
      updateSlides();
  };

  prevButton.addEventListener("click", () => {
      clearInterval(autoSlideInterval);
      showPrevSlide();
  });

  nextButton.addEventListener("click", () => {
      clearInterval(autoSlideInterval);
      showNextSlide();
  });

  const startAutoSlide = () => {
      autoSlideInterval = setInterval(showNextSlide, 4000);
  };

  updateSlides();
  startAutoSlide();
});

document.addEventListener("DOMContentLoaded", () => {
  const updateImageSources = () => {
      const isMobile = window.innerWidth < 768; // Define the mobile breakpoint
      const images = document.querySelectorAll("[data-mobile-src]");

      images.forEach(img => {
          const desktopSrc = img.getAttribute("src");
          const mobileSrc = img.getAttribute("data-mobile-src");

          // Swap the src attribute based on screen size
          if (isMobile) {
              img.setAttribute("src", mobileSrc);
          } else {
              img.setAttribute("src", desktopSrc);
          }
      });
  };

  // Call the function on page load
  updateImageSources();

  // Update images on window resize
  window.addEventListener("resize", updateImageSources);
});