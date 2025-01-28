<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Test technique Julien CHAZOT</title>
</head>
<body>
    @include('layouts/navbar')
        <div class="p-20">
            @yield('content')
        </div>
    @include('layouts/footer')
</body>
</html>