<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', config('app.name'))</title>
    @vite('resources/css/app.css', 'resources/js/app.js')
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins/fontawesome-free/css/all.min.css') }}">
    @stack('styles')
</head>

<body>
    @yield('content')

    @if (session('success'))
        <x-widgets.thankyou-modal />
    @endif
    <x-widgets.main-lead-modal action="{{ route('landingPage.storeLead') }}" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        function openLeadForm(package = null) {
            if (package) {
                $('#package').val(package.name);
            }
            $('#leadModal').removeClass('hidden');
        }
    </script>
    @stack('scripts')
</body>

</html>
