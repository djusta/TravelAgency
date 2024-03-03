@extends('layouts.landing_page')

@section('title', $landingPage->title)

@section('content')
    <section class="min-h-screen flex flex-col bg-cover bg-fixed bg-black bg-opacity-30 bg-blend-overlay"
        style="background-image: url('{{ asset('images/1094.jpg') }}')">
        <div class="bg-black bg-opacity-50 p-2">
            <nav class="flex items-center justify-center">
                <img src="{{ asset('logo.png') }}" alt="" srcset="" class="w-20">
                <h2 class="text-3xl text-white font-extrabold font-serif text-center">{{ config('app.name') }}</h2>
            </nav>
        </div>
        <div class="container mx-auto flex-1 flex items-center justify-center">
            <div>
                <h1 class="text-center text-5xl text-white font-extrabold font-serif mb-5">{{ $landingPage->title }}</h1>
                <p class="text-center text-white mb-5 max-w-4xl bg-black bg-opacity-50 p-4 rounded-xl">Are you ready to
                    embark on your next unforgettable journey? At {{ config('app.name') }}, we specialize in curating
                    personalized travel experiences tailored to your desires. From exploring exotic destinations to crafting
                    unique itineraries, our team of experts is dedicated to making your travel dreams a reality. With our
                    attention to detail and commitment to excellence, you can trust us to handle every aspect of your
                    journey seamlessly. Start your adventure with {{ config('app.name') }} today!</p>
                <button class="px-4 py-2 bg-orange-500 text-white font-bold text-3xl rounded-2xl block mx-auto"
                    onclick="openLeadForm()">Get In Touch</button>
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

    <section class="bg-slate-800 py-20 bg-cover bg-blend-overlay bg-bottom px-5"
        style="background-image: url('https://img.freepik.com/free-photo/silhouetted-couple-sit-bench-autumn-tree-generative-ai_188544-12574.jpg?w=1380&t=st=1706109383~exp=1706109983~hmac=ec801800892a65ed2b3271d7ac03e047fb50e1d907da2f803b69a0925bd1a065')">
        <div class="container mx-auto">
            <p class="text-center text-4xl font-bold text-neutral-200 mb-5">Whispers of Love: Exclusive Honeymoon Hideaways
            </p>
            <p class="text-center text-xl font-semibold text-neutral-400">Escape to Secluded Bliss, Surrounded by Whispers
                of Love, as Our Thoughtfully Crafted
                Honeymoon Hideaways Set the Stage for Your Unforgettable Love Story.</p>
            <button
                class="py-2 px-4 bg-neutral-100 text-pink-700 hover:bg-pink-700 hover:text-neutral-100 hover:border hover:border-white text-xl rounded-full mx-auto block my-10 font-bold"
                onclick="openLeadForm()">Plan
                Your Honeymoon</button>
        </div>
    </section>

    <section class="py-16 bg-indigo-50">
        <div class="container mx-auto">
            <h3 class="text-center text-4xl text-indigo-500 font-bold mb-9">Didn't Find What You Want?</h3>
            <p class="text-center text-2xl text-indigo-500 font-semibold font-serif mb-5">Our Tour Experts Are Here To Help.
            </p>
            <div class="text-center">
                <a class="py-2 px-4 mx-2 bg-indigo-800 hover:bg-indigo-900 text-white text-xl font-bold rounded-xl"
                    href="tel:{{ config('app.primary_contact') }}">Call Us Now</a> <a
                    class="py-2 px-4 mx-2 bg-indigo-800 hover:bg-indigo-900 text-white text-xl font-bold rounded-xl"
                    href="mailto:{{ config('app.leads_email') }}">Send a Mail</a>
            </div>
        </div>
    </section>

    <section>
        <div class="container mx-auto py-5">
            <div class="flex flex-wrap">
                <div class="w-full md:w-1/3"></div>
                <div class="w-1/2 md:w-1/3 ms-auto">
                    <img src="{{ asset('images/google2.png') }}" alt="" srcset="">
                </div>
                <div class="w-1/2 md:w-1/3 ms-auto">
                    <img src="{{ asset('images/approved.png') }}" alt="" srcset="" class="w-full">
                </div>
            </div>
        </div>
    </section>

    <footer class="text-gray-600 body-font">
        <div class="container px-5 pb-8 mx-auto flex items-center sm:flex-row flex-col">
            <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full"
                    viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                </svg> --}}
                <img src="{{ asset('logo.png') }}" alt="" srcset="" class="w-16">
                <span class="ml-3 text-xl font-serif">{{ config('app.name', 'Travel Agency') }}</span>
            </a>
            <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">©
                {{ date('Y') }} — All Rights Reserved</p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                <a href="{{ config('app.facebook') }}" class="text-gray-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                        viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                </a>
                {{-- <a class="ml-3 text-gray-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-5 h-5" viewBox="0 0 24 24">
                        <path
                            d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                        </path>
                    </svg>
                </a> --}}
                <a href="{{ config('app.instagram') }}" class="ml-3 text-gray-500">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                </a>
                {{-- <a class="ml-3 text-gray-500">
                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                        <path stroke="none"
                            d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                        </path>
                        <circle cx="4" cy="4" r="2" stroke="none"></circle>
                    </svg>
                </a> --}}
                <a href="{{ config('app.youtube') }}" class="ml-3 text-gray-500">
                    <svg fill="currentColor" stroke="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-5 h-5" viewBox="0 0 24 24">
                        <path
                            d="M21.03 6.89a2 2 0 00-1.42-1.41C18.56 5 12 5 12 5s-6.56 0-7.61.48a2 2 0 00-1.42 1.41C2 8.44 2 12 2 12s0 3.56.48 4.61a2 2 0 001.41 1.41C5.44 18 12 18 12 18s6.56 0 7.61-.48a2 2 0 001.42-1.41C22 15.56 22 12 22 12s0-3.56-.48-4.61zM10 15V9l5.2 3-5.2 3z">
                        </path>
                    </svg>
                </a>

            </span>
        </div>
    </footer>

    <div class="fixed bottom-2 right-2">
        <a href="https://wa.me/+91{{ config('app.primary_contact') }}" target="_blank" rel="noopener noreferrer"
            class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded shadow text-xl md:text-2xl">
            <i class="fab fa-whatsapp md:mr-2"></i> <span class="hidden md:inline-block">Chat on WhatsApp</span>
        </a>
    </div>

    <!-- Itinerary Modal -->
    <div id="itineraryModal"
        class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-50 hidden overflow-y-scroll">
        <div class="bg-white p-6 rounded-md shadow-md relative max-w-4xl">
            <button id="closeItineraryModalBtn" class="absolute top-0 right-0 p-2 cursor-pointer" onclick="closeItineraryModal()">
                <svg class="h-6 w-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
            <h2 class="text-2xl font-bold mb-4">Itinerary</h2>
            <div id="itineraryContent" class="max-h-96 overflow-y-auto mb-3 px-2"></div> <!-- Add max height and overflow-y auto -->
            <button type="button" onclick="openLeadForm()" class="px-4 py-2 bg-indigo-500 text-neutral-200">Get Free Quote!</button>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        // Function to open modal
        function openItineraryModal(packageName, itineraries) {
            var modal = $("#itineraryModal");
            var itineraryContent = $("#itineraryContent");
            var body = $("body");
            let day = 1;

            // Parse the JSON string to an array
            var parsedItineraries = JSON.parse(itineraries);

            // Clear previous itinerary content
            itineraryContent.empty();

            // Populate modal with itinerary
            $.each(parsedItineraries, function(index, itinerary) {
                var title = $("<h3>").addClass("text-lg font-semibold").text('Day '+ day++ + ': '+itinerary.title);
                var description = $("<p>").addClass("text-gray-700 mb-2 text-justify").text(itinerary.description);
                itineraryContent.append(title).append(description);
            });

            // Display modal
            modal.removeClass('hidden');
            body.addClass('overflow-hidden'); // Prevent scrolling of underlying page
        }

        // Function to close modal
        function closeItineraryModal() {
            var modal = $("#itineraryModal");
            var body = $("body");

            modal.addClass('hidden');
            body.removeClass('overflow-hidden'); // Enable scrolling of underlying page
        }
    </script>
@endpush
