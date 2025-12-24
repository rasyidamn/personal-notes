<!DOCTYPE html>
<html lang="en" data-theme="garden">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ isset($title) ? $title . ' - Notes' : 'Personal Notes' }} </title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Pacifico&display=swap"
        rel="stylesheet">
</head>

<body class="min-h-screen flex flex-col bg-base-100 font-sans">
    <x-navbar />
    @session('success')
    <div class="toast toast-top toast-center z-50">
        <div class="alert alert-success animate-fade-out">
            <x-lucide-badge-check class="text-white size-6" />
            <span class="font-semibold text-white">{{ session('success') }}</span>
        </div>
    </div>
    @endsession
    <main class="flex flex-1 container mx-auto px-6 py-8 ">
        {{ $slot }}
    </main>

    <x-footer />
</body>

</html>
