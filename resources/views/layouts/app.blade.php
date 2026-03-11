<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toyota Sales</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>

<x-navbar />

<main>
    @yield('content')
</main>

<x-footer />

</body>
</html>