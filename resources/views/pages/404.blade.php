@extends('layouts.app')

@section('title', '404 Not Found - ' . config('app.name'))

@section('content')
    <div class="h-full flex items-center">
        <div class="container mx-auto my-10 px-3">
            <h1 class="text-5xl font-bold text-center mb-5">404 : NOT FOUND</h1>
            <h2 class="text-3xl font-semibold text-center mb-3">Oops! The page you're looking for went on a little vacation.</h2>
            <p class="text-center text-lg">It seems like the page you wanted is off exploring somewhere else. No worries, we're here to help you find your way back!</p>
            <p class="text-center text-lg">While we're fixing things, how about taking a quick break to imagine your dream destination? Picture a sunny beach, a busy city market, or a green jungle – the world is full of cool places, just like our website!</p>
            <div class="links flex justify-center space-x-3 my-3">
                <a href="{{ route('home') }}" class="py-2 px-3 text-center bg-black text-white rounded-full font-semibold hover:bg-slate-200 hover:text-black hover:border hover:border-black">Go Home</a>
                <a href="" class="py-2 px-3 text-center bg-black text-white rounded-full font-semibold hover:bg-slate-200 hover:text-black hover:border hover:border-black">Explore Destination</a>
                <a href="" class="py-2 px-3 text-center bg-black text-white rounded-full font-semibold hover:bg-slate-200 hover:text-black hover:border hover:border-black">Contact us</a>
            </div>
        </div>
    </div>
@endsection

@section('hideFooter', true)
