<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My App')</title>
</head>
<body>
    <header>
        @include('components.header')
        <nav>
            <a href="#">Home</a>
            <a href="#">Aobut Us</a>
            <a href="#">Contact</a>
        </nav>
    </header>

    <h1>List Produk</h1>
    <div class="container">
        <main>
            @yield('content')
        </main>
    </div>

    <footer>
        @include('components.footer')
        <p>&copy; {{ date('Y') }} My App</p>
    </footer>
</body>
</html>