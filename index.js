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

//showing slides

  const showNextSlide = () => {
      currentPosition = (currentPosition + 1) % items.length;
      updateSlides();
  };

  const showPrevSlide = () => {
      currentPosition = (currentPosition - 1 + items.length) % items.length;
      updateSlides();
  };


  //buttons left and right
  prevButton.addEventListener("click", () => {
      clearInterval(autoSlideInterval);
      showPrevSlide();
  });

  nextButton.addEventListener("click", () => {
      clearInterval(autoSlideInterval);
      showNextSlide();
  });


  //autoslider
  const startAutoSlide = () => {
      autoSlideInterval = setInterval(showNextSlide, 4000);
  };

  updateSlides();
  startAutoSlide();
});

document.addEventListener("DOMContentLoaded", () => {
  const updateImageSources = () => {
      const isMobile = window.innerWidth < 768; 
      const images = document.querySelectorAll("[data-mobile-src]");

      images.forEach(img => {
          const desktopSrc = img.getAttribute("src");
          const mobileSrc = img.getAttribute("data-mobile-src");

          if (isMobile) {
              img.setAttribute("src", mobileSrc);
          } else {
              img.setAttribute("src", desktopSrc);
          }
      });
  };

  updateImageSources();

  window.addEventListener("resize", updateImageSources);
});