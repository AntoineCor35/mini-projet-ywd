<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Projet YWD</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body>

    <body class="bg-black text-white font-hanken-grotesk pb-10">
        <div class="px-10">
            <nav class="flex justify-between items-center py-4 border-b border-white/10">
                <div><a href=""><img src=" {{ Vite::asset('resources/images/logo.png') }}" alt="logo"></a>
                </div>
            </nav>
            <main class="mt-10 max-w-[968px] mx-auto">
                {{ $slot }}
            </main>
        </div>
    </body>

</html>