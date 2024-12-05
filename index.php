<?php include_once __DIR__ . '/header.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./src/output.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./src/img/favicon-8.ico">
</head>

<body>

    <div class="snap-y snap-mandatory overflow-y-scroll h-screen scroll-smooth">
        <div class="snap-start snap-always ">
            <div id="default-carousel" class="relative w-full h-screen md:h-[600px] bg-body" data-carousel="slide">
                <div class="relative h-full overflow-hidden md:h-[600px]">

                    <div class="duration-700 ease-in-out" data-carousel-item>
                        <img src="place.png" data-mobile-src="vplace.png"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="1 Image">
                        <div class="absolute inset-0 flex flex-col items-center justify-center text-white bg-black bg-opacity-50 space-y-2">
                            <h2 class="text-5xl font-bold uppercase">Focus6</h2>
                            <p class="text-xl">Focus op succes!</p>
                        </div>
                    </div>

                    <div class="duration-700 ease-in-out" data-carousel-item>
                        <img src="place1.png" data-mobile-src="vplace2.png"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="1 Image">
                        <div class="absolute inset-0 flex flex-col items-center justify-center text-white bg-black bg-opacity-50 space-y-2">
                            <h2 class="text-5xl font-bold uppercase">Focus6</h2>
                            <p class="text-xl">Focus op succes!</p>
                        </div>
                    </div>

                    <div class="duration-700 ease-in-out" data-carousel-item>
                        <img src="place2.png" data-mobile-src="vplace3.png"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="1 Image">
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


            <!-- Focus6 Section -->
            <div class="snap-center h-screen flex flex-col md:flex-row md:space-x-[20rem] items-center justify-center px-4 py-[5rem] md:py-0 md:px-0">

                <div class="h-auto w-full md:w-[25rem] px-4 md:px-0 flex flex-col">
                    <h2 class="text-3xl md:text-5xl font-bold mt-2">Focus6</h2>
                    <p class="mt-6 md:mt-[5rem] text-lg md:text-xl">
                        Focus6 biedt met haar Spiegelconcept een verfrissende en activerende aanpak om te werken aan de ontwikkeling van de lerende organisatie. Het concept is in te zetten op teamniveau en snel op te schalen naar organisatieniveau. Alles is in de praktijk ontwikkeld en toegepast. We geloven in de kracht van teams. In onze optiek onderscheidt een team zich als het goed samenwerkt, leert van ervaringen en innoveert om steeds beter te presteren.</p>
                </div>

                <div class="h-[15rem] w-full md:w-[25rem] bg-black rounded-2xl shadow-lg mt-auto md:mt-0 mx-auto flex items-center justify-center">

                </div>
            </div>

            <!-- Spiegelspel Section -->
            <div class="snap-center h-screen flex flex-col md:flex-row md:space-x-[20rem] items-center justify-center px-4 py-[5rem] md:py-0 md:px-0">

                <div class="h-[15rem] w-full md:w-[25rem] bg-black rounded-2xl shadow-lg mt-auto md:mt-0 mx-auto flex items-center justify-center">

                </div>
                <div class="h-auto w-full md:w-[25rem] px-4 md:px-0 flex flex-col">
                    <h2 class="text-3xl md:text-5xl font-bold mt-2">Over het Spiegelspel</h2>
                    <p class="mt-6 md:mt-[5rem] text-lg md:text-xl">
                        Met het Spiegelconcept geeft u invulling aan een lerende organisatie. Met deze aanpak spiegel je je als professional, team en organisatie systematisch aan de hoogste kwaliteitsstandaarden en de behoeften vanuit je omgeving. Je gebruikt de leerpunten die hieruit naar voren komen om je dienstverlening te ontwikkelen. </p>
                    <div class="bg-db text-white text-center px-4 py-2 rounded hover:bg-blue-600 mt-10 w-[8rem] mx-auto md:mx-0">
                        <a href="./spiegelspel.php">Lees meer</a>
                    </div>
                </div>


            </div>

            <!-- Over onze Dienstregeling -->
            <div class="snap-center h-screen flex flex-col md:flex-row md:space-x-[20rem] items-center justify-center px-4 py-[5rem] md:py-0 md:px-0">

                <div class="h-auto w-full md:w-[25rem] px-4 md:px-0 flex flex-col">
                    <h2 class="text-3xl md:text-5xl font-bold mt-2">Over onze Dienstregeling</h2>
                    <p class="mt-6 md:mt-[5rem] text-lg md:text-xl">
                        Lorem ipsum dolor sitt, consectetur adipisicing elit. Exercitationem excepturi asperiores ratione nemo quae animi, pariatur quas soluta, praesentium necessitatibus deserunt ducimus maiores autem quaerat magnam dolorum molestiae? Reiciendis, quam.
                    </p>
                    <div class="bg-db text-white text-center px-4 py-2 rounded hover:bg-blue-600 mt-10 w-[8rem] mx-auto md:mx-0">
                        <a href="./dienst.php">Lees meer</a>
                    </div>
                </div>
                <div class="h-[15rem] w-full md:w-[25rem] bg-black rounded-2xl shadow-lg mt-auto md:mt-0 mx-auto flex items-center justify-center">

                </div>
            </div>

            <!-- Contact Section -->
            <div class="snap-center h-screen flex flex-col md:flex-row md:space-x-[20rem] items-center justify-center px-4 py-[5rem]c md:py-0 md:px-0">

                <div class="h-[15rem] w-full md:w-[25rem] bg-black rounded-2xl shadow-lg mt-auto md:mt-0 mx-auto flex items-center justify-center">

                </div>
                <div class="h-auto w-full md:w-[25rem] px-4 md:px-0 flex flex-col">
                    <h2 class="text-3xl md:text-5xl font-bold mt-2">Contacteer ons</h2>
                    <p class="mt-6 md:mt-[5rem] text-lg md:text-xl">
                        Lorem ipsum dolor sitt, consectetur adipisicing elit. Exercitationem excepturi asperiores ratione nemo quae animi, pariatur quas soluta, praesentium necessitatibus deserunt ducimus maiores autem quaerat magnam dolorum molestiae? Reiciendis, quam.
                    </p>
                    <div class="bg-db text-white text-center px-4 py-2 rounded hover:bg-blue-600 mt-10 w-[8rem] mx-auto md:mx-0">
                        <a href="./contact.php">Lees meer</a>
                    </div>
                </div>

            </div>


        </div>


        <script>
            <?php include_once __DIR__ . '/index.js'; ?>
        </script>

        <?php include_once 'footer.php'; ?>