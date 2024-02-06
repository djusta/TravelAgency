@extends('layouts.app')

@section('content')
    <section class="text-gray-200 body-font bg-neutral-800 hero-bg">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
            <div
                class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-100">
                    If Travelling Is Your Dream, We Can Make Your Dream Come True!
                </h1>
                <p class="mb-8 leading-relaxed">Copper mug try-hard pitchfork pour-over freegan heirloom neutra air plant
                    cold-pressed tacos poke beard tote bag. Heirloom echo park mlkshk tote bag selvage hot chicken authentic
                    tumeric truffaut hexagon try-hard chambray.</p>
                <div class="flex justify-center">
                    <button
                        class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
                    <button
                        class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Button</button>
                </div>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                {{-- <img class="object-cover object-center rounded-full" alt="hero" src="https://img.freepik.com/free-photo/backpacker-standing-sunrise-viewpoint-ja-bo-village-mae-hong-son-province-thailand_335224-1356.jpg?size=626&ext=jpg&ga=GA1.1.1150222235.1705849205&semt=sph"> --}}
            </div>
        </div>
    </section>

    <section id="destinations" class="py-16">
        <div class="container mx-auto">
            <h2 class="text-5xl text-center font-semibold mb-10 text-blue-500">Poplular Destinations</h2>
            <div class="destination-cards flex flex-wrap">

                @foreach ($popularDestinations as $destination)
                    <x-destinations.card destinationName="{{ $destination->name }}" :bg-image="$destination->image_path"
                        description="{{ $destination->short_description ?? 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis saepe beatae dignissimos eligendi sapiente dolorum, laboriosam perferendis animi facere sint.' }}"
                        slug="{{ $destination->id }}" :package-count="$destination->packages_count"/>
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
                class="py-2 px-4 bg-neutral-100 text-pink-700 hover:bg-pink-700 hover:text-neutral-100 hover:border hover:border-white text-xl rounded-full mx-auto block my-10 font-bold">Plan
                Your Honeymoon</button>
        </div>
    </section>


    <section>
        <div class="honeymoon-packages flex flex-wrap">
            @foreach ($packages as $package)
                <x-packages.card :name="$package->name"
                    ft-image="https://img.freepik.com/free-photo/freezing-wedding-couple-is-warming-up-together-winter-mountains-front-frozen-lake_8353-11090.jpg?w=1060&t=st=1706111603~exp=1706112203~hmac=e313278e9f1ff6014daa22657be18c82f586b444faab52ffa95c602c56101ed0"
                    :cost="$package->price" />
            @endforeach
        </div>
    </section>

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <h1 class="text-3xl font-medium title-font text-gray-900 mb-12 text-center">Testimonials</h1>
            <div class="flex flex-wrap -m-4">
                <div class="p-4 md:w-1/2 w-full">
                    <div class="h-full bg-gray-100 p-8 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4"
                            viewBox="0 0 975.036 975.036">
                            <path
                                d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                            </path>
                        </svg>
                        <p class="leading-relaxed mb-6">Synth chartreuse iPhone lomo cray raw denim brunch everyday carry
                            neutra before they sold out fixie 90's microdosing. Tacos pinterest fanny pack venmo,
                            post-ironic heirloom try-hard pabst authentic iceland.</p>
                        <a class="inline-flex items-center">
                            <img alt="testimonial" src="https://dummyimage.com/106x106"
                                class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                            <span class="flex-grow flex flex-col pl-4">
                                <span class="title-font font-medium text-gray-900">Holden Caulfield</span>
                                <span class="text-gray-500 text-sm">UI DEVELOPER</span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="p-4 md:w-1/2 w-full">
                    <div class="h-full bg-gray-100 p-8 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4"
                            viewBox="0 0 975.036 975.036">
                            <path
                                d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                            </path>
                        </svg>
                        <p class="leading-relaxed mb-6">Synth chartreuse iPhone lomo cray raw denim brunch everyday carry
                            neutra before they sold out fixie 90's microdosing. Tacos pinterest fanny pack venmo,
                            post-ironic heirloom try-hard pabst authentic iceland.</p>
                        <a class="inline-flex items-center">
                            <img alt="testimonial" src="https://dummyimage.com/107x107"
                                class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                            <span class="flex-grow flex flex-col pl-4">
                                <span class="title-font font-medium text-gray-900">Alper Kamu</span>
                                <span class="text-gray-500 text-sm">DESIGNER</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-indigo-500 p-10">
        <div class="container mx-auto flex flex-col md:flex-row justify-between">
            <p class="text-4xl text-neutral-100 font-bold text-center mb-3">Escape to Paradise – Plan Your Getaway!</p>
            <button class="bg-neutral-100 px-4 py-3 text-lg rounded-full font-semibold w-fit max-md:mx-auto md:mx">Call
                Now</button>
        </div>
    </section>

    {{-- <x-cta-popup></x-cta-popup>
    <x-lead-modal></x-lead-modal> --}}
@endsection

@push('styles')
    <style>
        .hero-bg {
            background-image: url('https://img.freepik.com/free-photo/backpacker-standing-sunrise-viewpoint-ja-bo-village-mae-hong-son-province-thailand_335224-1356.jpg?size=626&ext=jpg&ga=GA1.1.1150222235.1705849205&semt=sph');
            background-size: cover;
            background-position: center center;
            background-blend-mode: overlay
        }
    </style>
@endpush

@push('scripts')
    <script></script>
@endpush
