<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{isset($title) ? $title : "Page en cours"}}</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />


    <!-- par défaut on charge ces css/js -->
    <!-- on peut étendre cette section, voir la vue test-vite.blade.php -->
    @section("head")
        @vite(["resources/css/normalize.css", 'resources/css/app.css', 'resources/js/app.js'])
    @show
</head>
<body>
<header class="menu">
    <x-nav-bar></x-nav-bar>
</header>

<main>
    <div> {{$slot}}</div>
</main>
</body>
</html>
