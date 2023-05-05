<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - LKS Jabar Juara 2023</title>
    @vite('resources/js/app.js')
</head>
<body>
    <div class="container d-flex flex-column justify-content-center">
        {{ $slot }}
    </div>
</body>
</html>
