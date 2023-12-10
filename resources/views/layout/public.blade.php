<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
   <div class="flex justify-between items-center">
    <div class="flex space-x-4">
        <a href="{{ route('index') }}">home</a>
        <a href="{{ route('about') }}">about</a>
        <a href="{{ route('contact') }}">contact</a>
    </div>
    <div>
        right side
    </div>
   </div>
   <div>
    @yield('content')
   </div>
</body>
</html>