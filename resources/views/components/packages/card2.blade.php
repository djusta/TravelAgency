@php use Illuminate\Support\Str; @endphp

<div class="w-full md:w-1/2 lg:w-1/3 mx-auto p-3">
    <div class="card shadow-lg h-full flex flex-col rounded overflow-hidden">
        <img class="w-full h-52 object-cover mb-2"
            src="{{ $package->image ? asset('storage/uploads/' . $package->image) : 'https://img.freepik.com/free-photo/freezing-wedding-couple-is-warming-up-together-winter-mountains-front-frozen-lake_8353-11090.jpg?w=1060&t=st=1706111603~exp=1706112203~hmac=e313278e9f1ff6014daa22657be18c82f586b444faab52ffa95c602c56101ed0' }}"
            alt="Tour Image">
        <div class="px-3 flex-1">
            <h3 class="text-2xl font-serif font-bold">{{ $package->name }}</h3>
            <h4 class="text-xl font-semibold">{{ $package->duration }}</h4>
            <div class="flex justify-between text-2xl py-3">
                <i class="fas fa-hotel"></i>
                <i class="fas fa-utensils"></i>
                <i class="fas fa-taxi"></i>
                <i class="fas fa-binoculars"></i>
            </div>
            <p class="text-lg mb-3">{{Str::words($package->description, 20, ' ...')}}</p>
        </div>
        <div class="p-3 flex justify-between items-center">
            <p class="text-2xl font-bold">Starts@ {{ $package->price }}/-</p>
            <button class="py-2 px-4 bg-indigo-500 text-white font-extrabold"
                onclick="openLeadForm({{ $package->toJson() }})">Get Free Quote!</button>
                <button class="py-2 px-4 bg-blue-500 text-white font-extrabold"
            onclick="openItineraryModal('{{ $package->name }}', '{{ $package->itineraries }}')">View Itinerary</button>
        </div>
    </div>
</div>
