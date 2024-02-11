@extends('layouts.app')

@section('content')
    <section class="bg-slate-800 py-20 bg-cover bg-blend-overlay bg-center px-5"
        style="background-image: url('{{ $destination->image ? asset('storage/uploads/' . $destination->image) : 'https://img.freepik.com/free-photo/group-man-woman-enjoy-camping-picnic-barbecue-lake-with-tents-background-young-mixed-race-asian-woman-man-young-people-s-hands-toasting-cheering-bottles-beer_1253-1041.jpg?w=1060&t=st=1707243870~exp=1707244470~hmac=5babe2247df2250b31ff2aa3a3862d751653ba2c083db090a449728a246bfdac' }}')">
        <div class="container mx-auto">
            <h1 class="text-center text-4xl font-bold text-neutral-200 mb-5">{{ $destination->name }}
            </h1>
            <p class="text-center text-xl font-semibold text-neutral-400">
                @if ($destination->description)
                    {{ $destination->description }}
                @else
                Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Labore tempore ullam animi officiis quasi laudantium consequuntur laborum. Enim omnis doloribus hic,
                quasi porro nesciunt sequi cupiditate nostrum vel dolores nemo animi officia rem illo quaerat necessitatibus
                velit corporis! Officiis libero debitis enim animi excepturi harum nostrum, cupiditate officia fugiat
                reiciendis?
                @endif
            </p>

            {{-- <button
        class="py-2 px-4 bg-neutral-100 text-pink-700 hover:bg-pink-700 hover:text-neutral-100 hover:border hover:border-white text-xl rounded-full mx-auto block my-10 font-bold">Plan
        Your Honeymoon</button> --}}
        </div>
    </section>

    <section id="packages">

        <div class="flex flex-wrap">
            @foreach ($packages as $package)
                <x-packages.card :package="$package" />
            @endforeach
        </div>
    </section>
@endsection

@section('hideFooter', true)
