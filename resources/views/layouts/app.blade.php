<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Test technique Julien CHAZOT</title>
</head>
<body>
    <!-- Je créer un formulaire, j'informe son action qui est la redirection vers sa route qui amène vers son controller -->
    @include('layouts/navbar')
        <div class="clearsection">
            <div class="container">
                @yield('content')
            </div>
        </div>
    @include('layouts/footer')
</body>
</html>