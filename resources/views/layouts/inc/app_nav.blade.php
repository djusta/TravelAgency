<nav class="bg-indigo-500 p-2">
    <div class="container mx-auto flex justify-between items-center">
        <div class="flex items-center">
            <img src="{{ asset('logo.png') }}" alt="{{ config('app.name') }}" srcset="" class="w-16 mr-5">
            <a href="{{ route('home') }}" class="text-white text-3xl font-bold">{{ config('app.name', 'Travel Agency') }}</a>
        </div>
        <div class="hidden md:flex space-x-4">
            <a href="{{ route('home') }}" class="text-white">Home</a>
            <a href="{{ route('about') }}" class="text-white">About</a>
            <a href="/123" class="text-white">Services</a>
            <a href="{{ route('contact') }}" class="text-white">Contact</a>
        </div>
        <div class="md:hidden">
            <span id="mobile-menu-btn" class="text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                    </path>
                </svg>
            </span>
        </div>
    </div>
</nav>
<div id="mobile-menu" class="md:hidden hidden bg-white p-4">
    <a href="#" class="block text-gray-800 mb-2">Home</a>
    <a href="#" class="block text-gray-800 mb-2">About</a>
    <a href="#" class="block text-gray-800 mb-2">Services</a>
    <a href="#" class="block text-gray-800">Contact</a>
</div>