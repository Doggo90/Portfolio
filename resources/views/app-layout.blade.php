<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Porfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />

    @vite('resources/css/app.css')
</head>

<body>
    <style>
        html {
            scroll-behavior: smooth;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .animate-fade-in {
            animation: fadeIn 1s ease-in-out;
        }

        body {
            font-family: 'Lora', sans-serif;
            padding: 0;
            margin: 0;
            background-image: url(../background.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .nav-link:focus {
            @apply bg-blue-700 text-white md:bg-transparent md:text-blue-700 dark:text-white md:dark:text-blue-500;
        }
    </style>

    <div>
        <main>
            @yield('content')
        </main>
    </div>
</body>
<footer class="text-center text-white text-md p-3">
    <h3>Copyright © 2025 Martin Oca</h3>
</footer>

</html>
