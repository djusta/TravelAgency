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
                    <x-destinations.card destinationName="{{ $destination->name }}" :bg-image="$destination->image"
                        description="{{ $destination->excerpt ?? 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis saepe beatae dignissimos eligendi sapiente dolorum, laboriosam perferendis animi facere sint.' }}"
                        slug="{{ $destination->slug }}" :package-count="$destination->packages_count"/>
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
                <x-packages.card :package="$package" />
            @endforeach
        </div>
    </section>

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <h1 class="text-3xl font-medium title-font text-gray-900 mb-12 text-center">Testimonials</h1>
            <div class="grid sm:grid-cols-2">
                @foreach ($testimonials as $testimonial)
                <div class="px-4 mb-2">
                    <x-widgets.testimonial
                    :testimonial="$testimonial" />
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="bg-indigo-500 p-10">
        <div class="container mx-auto flex flex-col md:flex-row justify-between">
            <p class="text-4xl text-neutral-100 font-bold text-center mb-3">Escape to Paradise – Plan Your Getaway!</p>
            <button class="bg-neutral-100 px-4 py-3 text-lg rounded-full font-semibold w-fit max-md:mx-auto md:mx">Call Now</button>
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
