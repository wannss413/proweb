<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'laravel App')</title>

    <link href="https://cdn.jsdelivr.net/npm/flowbite@latest/dist/flowbite.min.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/flowbite@latest/dist/flowbite.min.js"></script>


</head>
<body class="bg-gray-100 text-gray-800 font-sans">
    <!--Navbar-->
    @include('components.menu')

    <!--Main content-->
    <main class="container mx-auto mt-10 px-4">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">@yield('page_title', 'judul halaman')</h2>
            @yield('content')
        </div>
    </main>
    
    <!--footer-->
    <footer class="mt-10 text-center text-sm text-gray-500 py-4 border-t">
        &copy; {{ date('Y') }} - Laravel App. All rights reserved.
    </footer>

</body>
</html>