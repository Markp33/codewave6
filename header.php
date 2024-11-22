<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <title>Focus6</title>
</head>
 
<body class="flex flex-col min-h-screen">
    
    <header class="bg-gray-400 text-white rounded-full mx-8 fixed top-4 left-0 right-0 z-50">
        <div class="container mx-auto flex items-center justify-between p-4">
            <a href="index.php" class="flex-shrink-0">
                <img class="h-10" src="" alt="Logo">
            </a>
 
            <button id="menuButton" class="block md:hidden focus:outline-none">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
 
            
            <nav id="menu" class="hidden md:flex md:items-center space-x-4">
                <ul class="flex flex-col md:flex-row md:space-x-4">
                    <li><a href="index.php"         class="hover:text-black">Home</a></li>
                    <li><a href="spiegelspel.php"   class="hover:text-black border-l border-white pl-4">Spiegelspelconcept</a></li>
                    <li><a href="dienst.php"        class="hover:text-black border-l border-white pl-4">Dienstregeling</a></li>
                    <li><a href="contact.php"       class="hover:text-black border-l border-white pl-4">Contact</a></li>
                </ul>
            </nav>
 
            
            <a href="tel:06456789" class="text-xl font-medium hover:text-black hidden md:block">
                0612345678
            </a>
        </div>
    </header>
 
 
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const currentPath = window.location.pathname.split("/").pop();
            document.querySelectorAll("nav a").forEach((link) => {
                if (link.getAttribute("href") === currentPath) {
                    link.classList.add("text-black");
                }
            });
        });
    </script>
 
 
    <script>
    const menuButton = document.getElementById('menuButton');
    const menu = document.getElementById('menu');
 
    menuButton.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
    </script>


</body>
 
</html>