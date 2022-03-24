<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Website</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
<div id="app">
        @include('layout/navbar')
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>