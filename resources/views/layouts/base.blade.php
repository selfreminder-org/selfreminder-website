<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    @include('partials.head')
</head>

<body class="min-h-screen bg-white dark:bg-zinc-800">

    {{ $slot }}



    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 px-4 md:px-8">
        <div class="max-w-5xl mx-auto text-center">
            <h3 class="text-2xl font-bold mb-2">Self<span class="text-green-400">Reminder</span></h3>
            <p class="text-gray-400 mb-6">Komunitas Remaja Islam untuk Saling Mengingatkan</p>
        </div>
    </footer>

    @fluxScripts
</body>

</html>
