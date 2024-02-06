<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')

    @stack('styles')
</head>

<body class="flex flex-col h-screen">

    <header>
        @include('layouts.inc.app_nav')
    </header>

    <main class="flex-1 mb-4">
        @yield('content')
    </main>

    <hr>
    @include('layouts.inc.app_footer')


    <script>
        
    </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
@vite('resources/js/app.js')

    @stack('scripts')
</body>

</html>