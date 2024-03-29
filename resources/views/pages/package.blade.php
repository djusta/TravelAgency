@extends('layouts.app')


@section('content')
    <section>
        <div class="container mx-auto flex mb-10">
            <div class="w-full md:w-2/3 bg-red-400">
                123
            </div>
            <div class="w-full md:w-1/3 p-2">
                <div class="card shadow-xl shadow-black p-2">
                    <h1 class="text-3xl text-center font-serif font-semibold mb-5">{{ $package->name }} - {{ $package->duration }}</h1>
                    <span class="text-2xl font-medium">&#x20B9;{{ $package->price }}</span>
                    <div id="form-card" class="bg-indigo-500 p-2 my-3 rounded-lg">
                        <h2 class="text-2xl text-center font-bold text-neutral-200 mb-4">Get Your Tour Planned</h2>
                        <form action="" method="post">
                            @csrf
                            <input type="text" name="" id="" class="w-full mb-3" placeholder="Enter Your Name">
                            <input type="text" name="" id="" class="w-full mb-3" placeholder="Enter Your Mobile Number">
                            <input type="submit" value="Get Free Quote" class="block mx-auto bg-indigo-950 text-white p-3 w-full text-lg font-medium">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mx-auto flex flex-row">
            <div class="w-full md:w-2/3 bg-orange-300">
            </div>
            <div class="w-full md:w-1/3 p-3">
                <div class="card shadow-md shadow-black rounded-lg overflow-hidden">
                    <div class="card-header p-3 bg-indigo-400 text-white text-lg">
                        <h5 class="text-center font-semibold">Got a Question?</h5>
                    </div>
                    <div class="card-body px-3 py-1">
                        <p class="mb-2">Get in touch with our Tour Expert.</p>
                        <table>
                            <tr>
                                <th class="min-w-20">Phone:</th>
                                <td>9999999999</td>
                            </tr>
                            <tr>
                                <th>Email:</th>
                                <td>support@email.com</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
