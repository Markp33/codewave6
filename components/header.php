<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Focus6</title>
</head>

<body class="flex flex-col min-h-screen font-body">

    <header class="bg-white rounded-full border-2 border-blue top-4 mx-8 fixed left-0 right-0 z-50">

        <div class="container mx-auto flex items-center justify-between p-4 md:justify-between">

            <a href="index.php" class="flex-shrink-0 mx-auto md:mx-0 md:ml-10">
                <img class="h-10" src="Logo.png" alt="Logo">
            </a>

            <button id="menuButton" class="block md:hidden focus:outline-none absolute right-4 top-4">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>

            <nav id="menu" class="hidden md:flex md:items-center space-x-4">
                <ul class="flex flex-col md:flex-row md:space-x-4">
                    <li><a href="index.php" class="hover:text-blue pl-4 text-xl">Home</a></li>
                    <li><a href="spiegelspel.php" class="hover:text-blue border-l border-black pl-4 text-xl">Spiegelspelconcept</a></li>
                    <li><a href="dienst.php" class="hover:text-blue border-l border-black pl-4 text-xl">Dienstregeling</a></li>
                    <li><a href="contact.php" class="hover:text-blue border-l border-black pl-4 text-xl">Contact</a></li>
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

            <a href="tel:06-21937222" class="hidden md:block text-xl font-medium text-black hover:text-blue">
                06-21937222
            </a>
        </div>
    </header>



    <script>
        <?php include_once __DIR__ . '/header.js'; ?>
    </script>