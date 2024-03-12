@extends('layouts.app')

@section('title', 'About - ' . config('app.name'))

@section('content')
    <section id="main">
        <div class="container mx-auto flex flex-wrap px-2 py-20">
            <div class="w-full md:w-1/2 p-2 flex items-center">
                <img src="https://img.freepik.com/free-photo/hiker-going-up-aiguille-du-midi_53876-139593.jpg?w=1060&t=st=1707927770~exp=1707928370~hmac=ff87936ca58dc8a0b4a995f2162f2be1cd9b1ea108dcd9764d1df3211dfcfad6"
                    alt="" srcset="">
            </div>
            <div class="w-full md:w-1/2 p-2">
                <h1 class="text-2xl text-indigo-700 font-serif">About</h1>
                <h2 class="text-3xl mb-5">Discover India with <strong>Your Travelling Partner</strong>: Crafting
                    Unforgettable Domestic Adventures</h2>
                <p class="mb-2 text-justify text-lg">Welcome to Your Travelling Partner, your premier destination for
                    domestic travel experiences. Located amidst the serene hills of Shimla, Himachal Pradesh, we specialize
                    in curating unforgettable journeys across India. Whether you're planning a family getaway, a romantic
                    honeymoon, or a rejuvenating holiday, our expert team is dedicated to providing personalized service
                    every step of the way.</p>
                <p class="mb-2 text-justify text-lg">With a focus on family, holiday, and honeymoon tours, we tailor each
                    itinerary to suit your unique preferences and interests. From selecting the perfect accommodations to
                    arranging seamless transportation and delectable dining experiences, we ensure every aspect of your trip
                    is meticulously planned for an unparalleled adventure.</p>
                <p class="mb-2 text-justify text-lg">Embark on your next journey with confidence, knowing that Your
                    Travelling Partner is committed to crafting memories that will last a lifetime. Let us be your guide to
                    discovering the beauty, culture, and diversity of India's breathtaking landscapes.</p>
            </div>
        </div>
    </section>

    <section id="why" class="bg-indigo-200 py-20">
        <div class="container mx-auto">
            <h2 class="text-center text-4xl font-bold font-serif mb-5 text-indigo-700">Why Choose Us?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach ($whyCards as $card)
                    <div class="card">
                        <h3 class="text-center font-semibold text-3xl text-indigo-500 mb-2">{{ $card['title'] }}</h3>
                        <p class="text-center text-lg">{{ $card['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section id="counter"
        style="background-image: url('https://img.freepik.com/free-photo/businessman-holding-luggage-waiting-airport-arrival-generated-by-ai_188544-39330.jpg?t=st=1707928605~exp=1707932205~hmac=57e53442b6f63aa8c24be2dab75c8033783bd0017acc76099632b7d1ffef8f9b&w=1380')"
        class="py-20 bg-cover bg-blend-overlay bg-slate-700">
        <div class="container mx-auto grid grid-cols-2 md:grid-cols-4 gap-5 text-neutral-200">
            @foreach ($counter as $item)
                <div>
                    <p class="text-5xl text-center font-extrabold">{!! $item['number'] !!}</p>
                    <p class="text-2xl text-center">{{ $item['label'] }}</p>
                </div>
            @endforeach
        </div>
    </section>
@endsection
