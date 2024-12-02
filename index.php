<?php include_once __DIR__ . '/header.php'; ?>

<head>
    <link href="./src/output.css" rel="stylesheet">
</head>

<body>

    <div class="snap-y snap-mandatory overflow-y-scroll h-screen scroll-smooth">
        <div class="snap-start snap-always">
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <div class="relative h-[18rem] overflow-hidden md:h-[600px]">

                    <div class="duration-700 ease-in-out " data-carousel-item>

                        <img src="place.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="1 Image">
                        <div class="absolute inset-0 flex flex-col items-center justify-center text-white bg-black bg-opacity-50 space-y-2">
                            <h2 class="text-5xl font-bold uppercase">Focus6</h2>
                            <p class="text-xl">Focus op succes!</p>
                        </div>

                    </div>
                    <div class="duration-700 ease-in-out hidden" data-carousel-item>

                        <img src="place1.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="2 Image">
                        <div class="absolute inset-0 flex flex-col items-center justify-center text-white bg-black bg-opacity-50 space-y-2">
                            <h2 class="text-5xl font-bold uppercase">Focus6</h2>
                            <p class="text-xl">Focus op succes!</p>
                        </div>

                    </div>
                    <div class="duration-700 ease-in-out hidden" data-carousel-item>

                        <img src="place2.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="3 Image">
                        <div class="absolute inset-0 flex flex-col items-center justify-center text-white bg-black bg-opacity-50 space-y-2">
                            <h2 class="text-5xl font-bold uppercase">Focus6</h2>
                            <p class="text-xl">Focus op succes!</p>
                        </div>

                    </div>
                </div>

                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                    <button type="button" class="w-3 h-3 rounded-full" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                </div>

                <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer" data-carousel-prev>
                    <span class="inline-flex items-center justify-center rounded-full w-10 h-10 bg-white/30 dark:bg-gray-800/30">
                        <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-width="2" d="M5 1 1 5l4 4" />
                        </svg>
                    </span>
                </button>
                <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer" data-carousel-next>
                    <span class="inline-flex items-center justify-center rounded-full w-10 h-10 bg-white/30 dark:bg-gray-800/30">
                        <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-width="2" d="M1 9l4-4-4-4" />
                        </svg>
                    </span>
                </button>
            </div>
        </div>

        <div class="flex flex-col items-center space-y-[5rem] my-[15rem]">

            <div class="snap-center h-screen flex items-center justify-center px-4 py-0 md:py-0 md:px-0">
                <div class="flex flex-col md:flex-row md:space-x-[20rem]">
                    <div class="h-auto md:h-[25rem] w-[90%] md:w-[25rem]">
                        <h2 class="text-3xl md:text-5xl font-bold mt-2">Focus6</h2>
                        <p class="mt-6 md:mt-[5rem] text-lg md:text-xl">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem excepturi asperiores ratione nemo quae animi, pariatur quas soluta, praesentium necessitatibus deserunt ducimus maiores autem quaerat magnam dolorum molestiae? Reiciendis, quam.
                        </p>
                    </div>
                    <div class="h-auto md:h-[25rem] w-[90%] md:w-[25rem] bg-black rounded-2xl shadow-lg md:mt-0 mt-6"></div>
                </div>
            </div>

            <div class="snap-center h-screen flex items-center justify-center px-4 py-10 md:py-0 md:px-0 bg-gray-200">
                <div class="flex flex-col-reverse md:flex-row md:space-x-[20rem]">
                    <div class="h-auto md:h-[25rem] w-[90%] md:w-[25rem] bg-black rounded-2xl shadow-lg md:mt-0 mt-6"></div>
                    <div class="h-auto md:h-[25rem] w-[90%] md:w-[25rem]">
                        <h2 class="text-3xl md:text-5xl font-bold mt-2">Spiegelspel</h2>
                        <p class="mt-6 md:mt-[5rem] text-lg md:text-xl">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem excepturi asperiores ratione nemo quae animi, pariatur quas soluta, praesentium necessitatibus deserunt ducimus maiores autem quaerat magnam dolorum molestiae? Reiciendis, quam.
                        </p>
                        <div class="bg-db text-white text-center px-4 py-2 rounded hover:bg-blue-600 mt-10 w-[8rem]">
                            <a href="./spiegelspel.php">Lees meer</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="snap-center h-screen flex items-center justify-center px-4 py-10 md:py-0 md:px-0">
                <div class="flex flex-col md:flex-row md:space-x-[20rem]">
                    <div class="h-auto md:h-[25rem] w-[90%] md:w-[25rem]">
                        <h2 class="text-3xl md:text-5xl font-bold mt-2">Over onze Dienstregeling</h2>
                        <p class="mt-6 md:mt-[5rem] text-lg md:text-xl">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem excepturi asperiores ratione nemo quae animi, pariatur quas soluta, praesentium necessitatibus deserunt ducimus maiores autem quaerat magnam dolorum molestiae? Reiciendis, quam.
                        </p>
                        <div class="bg-db text-white text-center px-4 py-2 rounded hover:bg-blue-600 mt-10 w-[8rem]">
                            <a href="./dienst.php">Lees meer</a>
                        </div>
                    </div>
                    <div class="h-auto md:h-[25rem] w-[90%] md:w-[25rem] bg-black rounded-2xl shadow-lg md:mt-0 mt-6"></div>
                </div>
            </div>

            <div class="snap-center h-screen flex items-center justify-center px-4 py-10 md:py-0 md:px-0 bg-gray-200">
                <div class="flex flex-col-reverse md:flex-row md:space-x-[20rem]">
                    <div class="h-auto md:h-[25rem] w-[90%] md:w-[25rem] bg-black rounded-2xl shadow-lg md:mt-0 mt-6"></div>
                    <div class="h-auto md:h-[25rem] w-[90%] md:w-[25rem]">
                        <h2 class="text-3xl md:text-5xl font-bold mt-2">Contact</h2>
                        <p class="mt-6 md:mt-[5rem] text-lg md:text-xl">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem excepturi asperiores ratione nemo quae animi, pariatur quas soluta, praesentium necessitatibus deserunt ducimus maiores autem quaerat magnam dolorum molestiae? Reiciendis, quam.
                        </p>
                        <div class="bg-db text-white text-center px-4 py-2 rounded hover:bg-blue-600 mt-10 w-[8rem]">
                            <a href="contact.php">Lees meer</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>







        <script>
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
        </script>

        <?php include_once 'footer.php'; ?>