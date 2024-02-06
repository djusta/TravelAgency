@extends('layouts.app')

@section('content')
    <section class="bg-slate-800 py-20 bg-cover bg-blend-overlay bg-center px-5"
        style="background-image: url('{{ $destination->image_path }}')">
        <div class="container mx-auto">
            <h1 class="text-center text-4xl font-bold text-neutral-200 mb-5">{{ $destination->name }}
            </h1>
            <p class="text-center text-xl font-semibold text-neutral-400">Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Labore tempore ullam animi officiis quasi laudantium consequuntur laborum. Enim omnis doloribus hic,
                quasi porro nesciunt sequi cupiditate nostrum vel dolores nemo animi officia rem illo quaerat necessitatibus
                velit corporis! Officiis libero debitis enim animi excepturi harum nostrum, cupiditate officia fugiat
                reiciendis?</p>

            {{-- <button
        class="py-2 px-4 bg-neutral-100 text-pink-700 hover:bg-pink-700 hover:text-neutral-100 hover:border hover:border-white text-xl rounded-full mx-auto block my-10 font-bold">Plan
        Your Honeymoon</button> --}}
        </div>
    </section>

    <section id="packages">

        <div class="flex flex-wrap">
            @foreach ($packages as $package)
                <x-packages.card :name="$package->name"
                    ft-image="https://img.freepik.com/free-photo/freezing-wedding-couple-is-warming-up-together-winter-mountains-front-frozen-lake_8353-11090.jpg?w=1060&t=st=1706111603~exp=1706112203~hmac=e313278e9f1ff6014daa22657be18c82f586b444faab52ffa95c602c56101ed0"
                    :cost="$package->price" />
            @endforeach
        </div>
    </section>
@endsection

@section('hideFooter', true)
