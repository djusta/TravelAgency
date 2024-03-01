<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <title>@yield('title', config('app.name'))</title>
    @vite(['resources/css/app.css'])

    @stack('styles')
</head>

<body class="flex flex-col h-screen">

    @include('layouts.inc.app_nav')

    <main class="flex-1 mb-4">
        @yield('content')
    </main>

    <hr>
    @include('layouts.inc.app_footer')

    <x-widgets.main-lead-modal />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    @vite(['resources/js/app.js'])

    <script>
        function openLeadForm(package = null) {
            $('#package').val(package.name);
            $('#leadModal').removeClass('hidden');
        }
    </script>
    @stack('scripts')
</body>

</html>
