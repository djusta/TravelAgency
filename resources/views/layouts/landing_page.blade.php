<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', config('app.name'))</title>
    <meta name="description" content="@yield('description', 'If Travelling Is Your Dream, We can Make Your Dream Come True.')">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
        $(document).ready(function() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                console.log("Geolocation is not supported by this browser.");
            }
        });
    </script>
    <script>
        function openLeadForm(package = null) {
            if (package) {
                $('#package').val(package.name);
            }
            $('#leadModal').removeClass('hidden');
        }

        function showPosition(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;

            console.log(latitude, longitude)
            // Perform reverse geocoding to get the location name
            fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${latitude}&lon=${longitude}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Failed to fetch location data');
                    }
                    return response.json();
                })
                .then(data => {
                    var locationName = data.display_name;
                    console.log('Location:', locationName);
                    $('#user_location').val(locationName);
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }
    </script>
    @stack('scripts')
</body>

</html>
