<footer class="bg-black text-white rounded-t-3xl snap-always snap-center font-body">
    <div class="container mx-auto px-4 flex flex-col md:flex-row justify-between items-start space-y-6 md:space-y-0 py-24">

        <a href="index.php" class="flex-shrink-0">
            <img class="h-10" src="" alt="Logo">
        </a>

        <div class="w-full md:w-1/3">
            <h3 class="text-white text-xl mb-4">Snelle Links</h3>
            <ul class="space-y-2">
                <li><a href="./index.php" class="hover:underline">Home</a></li>
                <li><a href="./spiegelspel.php" class="hover:underline">Spiegelspelconcept</a></li>
                <li><a href="./dienst.php" class="hover:underline">Dienstregeling</a></li>
                <li><a href="./contact.php" class="hover:underline">Contact</a></li>

            </ul>
        </div>
        <div class="w-full md:w-1/3">
            <h3 class="text-white text-xl mb-4">Contacteer ons</h3>
            <ul class="space-y-4">
                <li class="">
                    <div class="flex space-x-2 ">
                        <svg viewBox="0 0 29 29" style="width:22px">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7"
                                d="M6.364 3.81c1.496-1.503 5.032-2.139 6.907-2.108 1.88-.218 1.273 8.104.313 8.263 0 0-3.039.384-3.125 1.275-.116 1.217 3.009 8.67 4.22 8.84.65.091 2.606-1.402 2.606-1.402 1.521-1.145 4.678 2.2 6.161 3.596.649.627.617 1.159-.059 1.947-1.181 1.322-4.29 3.439-5.52 3.266-2.988-.42-8.05-4.592-10.483-9.582-2.743-5.629-2.712-12.82-1.02-14.095z"></path>
                        </svg>
                        <a href="mailto: info@focus6.nl" class="text-blue-400 hover:underline  ">info@focus6.nl</a>
                    </div>
                </li>
                <li>
                    <div class="flex space-x-2">
                        <svg viewBox="0 0 29 29" style="width:20px">
                            <path fill="currentColor" d="M5.135 5.37c-1.531 0-2.772 1.209-2.772 2.7v12.958c0 1.491 1.241 2.7 2.772 2.7h18.848c1.53 0 2.771-1.209 2.771-2.7V8.07c0-1.491-1.24-2.7-2.771-2.7H5.135zm0-1.62h18.848c2.449 0 4.434 1.934 4.434 4.32v12.958c0 2.386-1.985 4.32-4.434 4.32H5.135c-2.45 0-4.435-1.934-4.435-4.32V8.07c0-2.386 1.986-4.32 4.435-4.32z"></path>
                            <path fill="currentColor" d="M23.998 7.48c.335.306.35.819.036 1.145l-5.898 6.103 5.88 5.728c.298.29.323.745.075 1.062l-.075.083a.847.847 0 01-1.176 0l-5.844-5.693-1.832 1.896a.847.847 0 01-1.21 0l-1.833-1.896L6.277 21.6a.847.847 0 01-1.176 0 .795.795 0 010-1.145l5.88-5.728-5.897-6.103a.795.795 0 01.035-1.145.847.847 0 011.176.035l8.264 8.552 8.264-8.552a.847.847 0 011.175-.035z"></path>
                        </svg> <a href="tel:06-21937222" class="text-blue-400 hover:underline">06-21937222</a>
                </li>
        </div>
        </ul>

    </div>

    <div class="text-center mt-8 text-gray-500 py-6">
        <p>&copy; 2024 Spiegespel. Alle rechten voorbehouden.</p>
    </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const currentPath = window.location.pathname.split("/").pop();
            document.querySelectorAll("nav a").forEach((link) => {
                if (link.getAttribute("href") === currentPath) {
                    link.classList.add("text-lb");
                }
            });
        });
    </script>
</footer>


</div>
</body>

</html>