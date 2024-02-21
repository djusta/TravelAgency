@extends('layouts.landing_page')

@section('title', $landingPage->title)

@section('content')
    <section class="min-h-screen flex flex-col bg-cover bg-fixed bg-black bg-opacity-30 bg-blend-overlay" style="background-image: url('https://img.freepik.com/free-photo/beautiful-girl-standing-boat-looking-mountains-ratchaprapha-dam-khao-sok-national-park-surat-thani-province-thailand_335224-849.jpg?w=1060&t=st=1708257808~exp=1708258408~hmac=09d3a958e7fe6aacde8f12926d546382b4f3276988140e12f8c5e4d52920222b')">
        <div class="bg-black bg-opacity-50 p-2">
            <nav class="flex items-center justify-center">
                <img src="{{ asset('logo.png') }}" alt="" srcset="" class="w-20">
                <h2 class="text-3xl text-white font-extrabold font-serif text-center">{{ config('app.name') }}</h2>
            </nav>
        </div>
        <div class="container mx-auto flex-1 flex items-center justify-center">
            <div>
                <h1 class="text-center text-5xl text-white font-extrabold font-serif mb-5">{{ $landingPage->title }}</h1>
                <p class="text-center text-white mb-5 max-w-4xl bg-black bg-opacity-50 p-4 rounded-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam dignissimos odio cum, expedita amet exercitationem. Illum recusandae aspernatur ut voluptatibus, deleniti temporibus facere aut quod fugiat provident aliquid odit natus dicta dolor dolorum voluptates, quisquam corporis neque nesciunt laborum tempora blanditiis. Modi cumque ab debitis autem quia porro voluptatum quibusdam ipsam veniam? Quas, quod! Omnis, voluptatibus. Deserunt ipsam pariatur ex.</p>
                <button class="px-4 py-2 bg-orange-500 text-white font-bold text-3xl rounded-2xl block mx-auto" onclick="openLeadForm()">Get In Touch</button>
            </div>
        </div>
    </section>
    <section class="py-16">
        <div class="container mx-auto">
            <h2 class="text-4xl text-center font-serif font-bold mb-2">Best Selling Packages</h2>
            <div class="mx-auto h-1 w-36 bg-indigo-100 mb-5"></div>

            <div class="flex flex-wrap">
                @foreach ($packages as $package)
                <x-packages.card2 :package="$package" />
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-16 bg-indigo-400">
        <div class="container mx-auto">
            <h3 class="text-center text-4xl text-white font-bold mb-9">Didn't Find What You Want?</h3>
            <p class="text-center text-2xl text-white font-semibold font-serif mb-5">Our Tour Experts Are Here To Help.</p>
            <div class="text-center">
                <a class="py-2 px-4 mx-2 bg-indigo-800 hover:bg-indigo-900 text-white text-xl font-bold rounded-xl" href="">Call Us Now</a> <a class="py-2 px-4 mx-2 bg-indigo-800 hover:bg-indigo-900 text-white text-xl font-bold rounded-xl" href="">Send a Mail</a>
            </div>
        </div>
    </section>

    <footer class="text-gray-600 body-font">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
            <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full"
                    viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                </svg> --}}
                <img src="{{ asset('logo.png') }}" alt="" srcset="" class="w-16">
                <span class="ml-3 text-xl">{{ config('app.name', 'Travel Agency') }}</span>
            </a>
            <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">©
                {{ date('Y') }} — All Rights Reserved</p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                <a class="text-gray-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-5 h-5" viewBox="0 0 24 24">
                        <path
                            d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                        </path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-500">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-500">
                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                        <path stroke="none"
                            d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                        </path>
                        <circle cx="4" cy="4" r="2" stroke="none"></circle>
                    </svg>
                </a>
            </span>
        </div>
    </footer>

    <div class="fixed bottom-2 right-2">
        <a href="https://wa.me/+91{{ config('app.primary_contact') }}" target="_blank" rel="noopener noreferrer" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded shadow md:text-2xl">
            <i class="fab fa-whatsapp mr-2"></i> Chat on WhatsApp
        </a>
    </div>
@endsection