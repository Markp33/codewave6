<?php include_once __DIR__ . '/header.php'; ?>

<head>
    <link href="./src/output.css" rel="stylesheet">
</head>

<body class="text-gray-700">

    <div class="flex flex-col lg:flex-row justify-center items-center min-h-screen gap-12 p-4">
        <form
            action="https://formspree.io/f/xdkoydwa"
            method="POST">
            <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
                <h1 class="text-2xl font-bold text-gray-800 m-8 ">Contact opnemen</h1>
                <form>
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Naam</label>
                        <input type="text" id="name" name="name" class="mt-1 block w-full p-2 border rounded-md focus:ring-blue-500 focus:border-blue-500" placeholder="Naam">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" class="mt-1 block w-full p-2 border rounded-md focus:ring-blue-500 focus:border-blue-500" placeholder="Email">
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-sm font-medium text-gray-700">Bericht</label>
                        <textarea id="message" name="message" rows="4" class="mt-1 block w-full p-2 border rounded-md focus:ring-blue-500 focus:border-blue-500" placeholder="Bericht"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600">Verstuur</button>
                </form>
            </div>
        </form>

        <div class="w-full max-w-lg shadow-lg">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2216.8781191751355!2d5.07113987616693!3d52.12104006569134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c66fb2419fb2f3%3A0x4d02ab8533b7d537!2sBurgemeester%20Norbruislaan%20111%2C%203555%20EE%20Utrecht!5e1!3m2!1snl!2snl!4v1732532269655!5m2!1snl!2snl"
                width="100%"
                height="450"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>

</body>



</html>