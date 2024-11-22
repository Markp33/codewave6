

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./src/output.css" rel="stylesheet">
    <title>Focus6</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>


<body>
<div id="default-carousel" class="relative w-full" data-carousel="slide">
  


<div class="relative h-[18rem] overflow-hidden md:h-[600px]">
            <button id="menuButton" class="block md:hidden focus:outline-none">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
    <div class="duration-700 ease-in-out" data-carousel-item>
        <img src="place.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="First Image">
        <div class="absolute inset-0 flex items-center justify-center text-white bg-black bg-opacity-50">
            <h2 class="text-4xl font-bold text-white uppercase">Focus6</h2>
        </div>
    </div>
    
    <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="place1.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Second Image">
        <div class="absolute inset-0 flex items-center justify-center text-white bg-black bg-opacity-50">
            <h2 class="text-4xl font-bold text-white uppercase">Focus6</h2>
        </div>
    </div>
    
    <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="place2.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Third Image">
        <div class="absolute inset-0 flex items-center justify-center text-white bg-black bg-opacity-50">
            <h2 class="text-4xl font-bold text-white uppercase">Focus6</h2>
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




<div class="flex flex-col items-center space-y-[5rem] my-[15rem]">

        <div class="flex space-x-[20rem]">
            <div class="h-[25rem] w-[25rem]">
                <h2 class="text-xl font-bold mt-8">Focus6</h2>
                <p class="mt-[5rem]">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem excepturi asperiores ratione nemo quae animi, pariatur quas soluta, praesentium necessitatibus deserunt ducimus maiores autem quaerat magnam dolorum molestiae? Reiciendis, quam.</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mt-10">
                        Click Me
                    </button>
            </div>
            <div class="h-[25rem] w-[25rem] bg-black"></div>
        </div>

        <div class="flex space-x-[20rem]">
            <div class="h-[25rem] w-[25rem] bg-black"></div>
            <div class="h-[25rem] w-[25rem]">
                <h2 class="text-xl font-bold mt-8">Spiegelspel</h2>
                <p class="mt-[5rem]">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem excepturi asperiores ratione nemo quae animi, pariatur quas soluta, praesentium necessitatibus deserunt ducimus maiores autem quaerat magnam dolorum molestiae? Reiciendis, quam.</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mt-10">
                        Click Me
                    </button>
            </div>
            
        </div>

        <div class="flex space-x-[20rem]">
            <div class="h-[25rem] w-[25rem]">
                <h2 class="text-xl font-bold mt-8">Dienstverlening</h2>
                <p class="mt-[5rem]">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem excepturi asperiores ratione nemo quae animi, pariatur quas soluta, praesentium necessitatibus deserunt ducimus maiores autem quaerat magnam dolorum molestiae? Reiciendis, quam.</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mt-10">
                        Click Me
                    </button>
            </div>
            <div class="h-[25rem] w-[25rem] bg-black"></div>
        </div>

    </div>
</body>





<script>

    const menuButton = document.getElementById('menuButton');
        const menu = document.getElementById('menu');
    
        menuButton.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });

    const carouselElement = document.getElementById('default-carousel');

    const items = [
        { position: 0, el: document.querySelectorAll('[data-carousel-item]')[0] },
        { position: 1, el: document.querySelectorAll('[data-carousel-item]')[1] },
        { position: 2, el: document.querySelectorAll('[data-carousel-item]')[2] }
    ];

    let currentPosition = 0;

    const showNextSlide = () => {
        items[currentPosition].el.classList.add('hidden');
        currentPosition = (currentPosition + 1) % items.length;
        items[currentPosition].el.classList.remove('hidden');
    };

    
    const showPrevSlide = () => {
        items[currentPosition].el.classList.add('hidden');
        currentPosition = (currentPosition - 1 + items.length) % items.length;
        items[currentPosition].el.classList.remove('hidden');
    };

    
    document.querySelector('[data-carousel-prev]').addEventListener('click', showPrevSlide);
    document.querySelector('[data-carousel-next]').addEventListener('click', showNextSlide);

    
    setInterval(showNextSlide, 10000);
</script>

<?php include_once 'footer.php'; ?>
