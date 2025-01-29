<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Store</title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<header>
        <nav>
            <a href="{{ url('/')}}">Fashion Store</a>
            <a href="{{ url('/about')}}">About</a>
            <a href="{{ url('/shop')}}">Shop</a>
            <a href="{{ url('/contact')}}">Contact Us</a>
            <a href="{{ url('/checkout')}}">CheckOut</a>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>
            &copy; 2025 Fashion Store Website
        </p>
    </footer>
</body>
</html>