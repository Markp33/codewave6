<?php include_once 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <!-- TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FullPage.js CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.15/fullpage.min.css">
    <style>
        .header {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
        }

        .section-title {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
        }
    </style>
</head>

<body class="bg-gray-900 text-white">
    <!-- Header -->
    <!-- <header class="header fixed top-0 w-full flex justify-between items-center px-8 py-4 shadow-lg z-50">
        <div class="flex items-center">
            <img src="logo.png" alt="Logo" class="h-10">
            <h1 class="ml-4 text-xl font-semibold text-gray-800">Logo</h1>
        </div>
        <nav class="space-x-6">
            <a href="#section1" class="text-gray-700 hover:text-gray-900 font-medium">Home</a>
            <a href="#section2" class="text-gray-700 hover:text-gray-900 font-medium">Spiegelspelconcept</a>
            <a href="#section3" class="text-gray-700 hover:text-gray-900 font-medium">Dienstenregeling</a>
            <a href="#contact" class="text-gray-700 hover:text-gray-900 font-medium">Contact</a>
        </nav>
        <div class="text-gray-700 font-medium">0612345678</div>
    </header> -->

    <!-- FullPage.js Sections -->
    <div id="fullpage">
        <div class="h-screen section flex flex-col items-center justify-center bg-gradient-to-r from-blue-500 to-indigo-500" id="section1">
            <h1 class="section-title text-5xl font-extrabold">Welcome to Section 1</h1>
            <p class="mt-5 text-lg text-gray-100">Explore the first section of our amazing webpage.</p>
        </div>
        <div class="h-screen section flex flex-col items-center justify-center bg-gradient-to-r from-red-500 to-pink-500" id="section2">
            <h1 class="section-title text-5xl font-extrabold">This is Section 2</h1>
            <p class="mt-4 text-lg text-gray-100">Scroll down to see more cool stuff.</p>
        </div>
        <div class="h-screen section flex flex-col items-center justify-center bg-gradient-to-r from-green-500 to-teal-500" id="section3">
            <h1 class="section-title text-5xl font-extrabold">And here is Section 3</h1>
            <p class="mt-4 text-lg text-gray-100">Thanks for visiting our website!</p>
        </div>
    </div>

    <!-- FullPage.js Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.15/fullpage.min.js"></script>
    <script>
        new fullpage('#fullpage', {
            autoScrolling: true, // Zorgt dat het scrollen automatisch werkt
            fitToSection: true, // Past secties aan om volledig te passen
            scrollingSpeed: 700, // Insteltijd voor soepel scrollen
            navigation: true, // Toon navigatiebalk rechts
            responsiveHeight: 500, // Schakel FullPage.js uit bij kleinere schermen
        });
    </script>
</body>

</html>
<?php include_once 'footer.php'; ?>