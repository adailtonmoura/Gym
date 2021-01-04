<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
    @yield('assets')
    <title>
        @yield('title')
    </title>
</head>
<body>
<div class="app w-screen h-screen">
    <header class="header">
        <x-app-nav-header></x-app-nav-header>
    </header>
    <main class="main">
        @yield('main')
    </main>
    <footer class="footer">
       <x-app-footer></x-app-footer>
    </footer>
</div>

</body>
</html>
