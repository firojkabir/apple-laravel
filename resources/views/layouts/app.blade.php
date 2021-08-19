<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Apples</title>
</head>
<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
            <li><a href="/">Home</a></li>
        </ul>
        <ul class="flex items-center">
            <li><a href="">Phones</a></li>
        </ul>
    </nav>
    
    @yield('content')
</body>
</html>