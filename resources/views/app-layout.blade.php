<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Porfolio</title>
    @vite('resources/css/app.css')
</head>
<body>
    <style>
        body {
            padding:0;
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
</html>
