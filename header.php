<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Responsive Menu</title>
</head>

<<<<<<< HEAD
<body class="flex flex-col min-h-screen">

    <header class="bg-white rounded-full mx-8 fixed top-4 left-0 right-0 z-50">
        <div class="container mx-auto flex items-center justify-between p-4">

=======
<body class="flex flex-col min-h-screen font-body">
    
    <header class="bg-white rounded-full top-4 mx-8 fixed left-0 right-0 z-50">
        <div class="container mx-auto flex items-center justify-between p-4">
            
>>>>>>> 51ebdf20d4b516b483a06cb58b829888826eaa3e
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
<<<<<<< HEAD
                    <li><a href="index.php" class=" hover:text-black border-l border-white pl-4">Home</a></li>
                    <li><a href="spiegelspel.php" class=" hover:text-black border-l border-white pl-4">Spiegelspelconcept</a></li>
                    <li><a href="dienst.php" class=" hover:text-black border-l border-white pl-4">Dienstregeling</a></li>
                    <li><a href="contact.php" class=" hover:text-black border-l border-white pl-4">Contact</a></li>
=======
                    <li><a href="index.php" class=" hover:text-blue pl-4 text-xl">Home</a></li>
                    <li><a href="spiegelspel.php" class=" hover:text-blue border-l border-black pl-4 text-xl">Spiegelspelconcept</a></li>
                    <li><a href="dienst.php" class=" hover:text-blue border-l border-black pl-4 text-xl">Dienstregeling</a></li>
                    <li><a href="contact.php" class=" hover:text-blue border-l border-black pl-4 text-xl">Contact</a></li>
>>>>>>> 51ebdf20d4b516b483a06cb58b829888826eaa3e
                </ul>
            </nav>

            <nav id="dropdownMenu" class="hidden absolute top-16 left-4 right-4 bg-white text-gray-800 rounded-lg shadow-lg md:hidden">
                <ul class="flex flex-col md:flex-row md:space-x-6">
                    <li><a href="index.php" class="block px-4 py-2 hover:bg-gray-200">Home</a></li>
                    <li><a href="spiegelspel.php" class="block px-4 py-2 hover:bg-gray-200">Spiegelspelconcept</a></li>
                    <li><a href="dienst.php" class="block px-4 py-2 hover:bg-gray-200">Dienstregeling</a></li>
                    <li><a href="contact.php" class="block px-4 py-2 hover:bg-gray-200">Contact</a></li>
                </ul>
            </nav>


<<<<<<< HEAD
            <a href="tel:0621937222" class="hidden md:block text-xl font-medium text-black hover:text-blue">
                0621937222
=======
            <a href="tel:06-21937222" class="hidden md:block text-xl font-medium text-black hover:text-blue">
            06-21937222
>>>>>>> 51ebdf20d4b516b483a06cb58b829888826eaa3e
            </a>
        </div>
    </header>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const menuButton = document.getElementById('menuButton');
            const dropdownMenu = document.getElementById('dropdownMenu');
            const menu = document.getElementById('menu');

            menu.classList.add('hidden');
            dropdownMenu.classList.add('hidden');

            menuButton.addEventListener('click', () => {
<<<<<<< HEAD
                dropdownMenu.classList.toggle('hidden');
=======
                dropdownMenu.classList.toggle('hidden'); 
>>>>>>> 51ebdf20d4b516b483a06cb58b829888826eaa3e
            });

            window.addEventListener('click', (e) => {
                if (!dropdownMenu.contains(e.target) && !menuButton.contains(e.target)) {
<<<<<<< HEAD
                    dropdownMenu.classList.add('hidden');
=======
                    dropdownMenu.classList.add('hidden'); 
>>>>>>> 51ebdf20d4b516b483a06cb58b829888826eaa3e
                }
            });
        });



        document.addEventListener("DOMContentLoaded", () => {
<<<<<<< HEAD
            const currentPath = window.location.pathname.split("/").pop();
            document.querySelectorAll("nav a").forEach((link) => {
                if (link.getAttribute("href") === currentPath) {
                    link.classList.add("text-blue");
                }
            });
        });
    </script>
=======
        const currentPath = window.location.pathname.split("/").pop();
        document.querySelectorAll("nav a").forEach((link) => {
            if (link.getAttribute("href") === currentPath) {
                link.classList.add("text-lb");
            }
        });
    });
    </script>

>>>>>>> 51ebdf20d4b516b483a06cb58b829888826eaa3e
