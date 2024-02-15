<div class="w-full md:w-1/2 lg:w-1/3 mx-auto p-3">
    <div class="rounded overflow-hidden shadow-lg bg-white hover:shadow-lg hover:shadow-pink-200 hover:-translate-x-1 hover:-translate-y-1">
        <img class="w-full h-52 object-cover"
            src="{{ $package->image ? asset('storage/uploads/' . $package->image) : 'https://img.freepik.com/free-photo/freezing-wedding-couple-is-warming-up-together-winter-mountains-front-frozen-lake_8353-11090.jpg?w=1060&t=st=1706111603~exp=1706112203~hmac=e313278e9f1ff6014daa22657be18c82f586b444faab52ffa95c602c56101ed0'}}"
            alt="Tour Image">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">{{ $package->name }}</div>
            <p class="text-gray-700 text-base">
                @if ($package->description)
                    {{ $package->description }}
                @else
                Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Labore tempore ullam animi officiis quasi laudantium consequuntur laborum. Enim omnis doloribus hic,
                quasi porro nesciunt sequi cupiditate nostrum vel dolores nemo animi officia rem illo quaerat necessitatibus
                velit corporis! Officiis libero debitis enim animi excepturi harum nostrum, cupiditate officia fugiat
                reiciendis?
                @endif
            </p>
        </div>
        <div class="px-6 py-4">
            <span
                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#Adventure</span>
            <span
                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#Explore</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#Nature</span>
        </div>
        <div class="flex justify-between">
            <div class="px-6 py-4">
                <div class="text-xl font-bold text-gray-800">&#x20B9;{{ $package->price }}</div>
                <p class="text-gray-600">per couple</p>
            </div>
            <div class="px-6 py-4">
                <a href="{{ route('package', ['slug' => $package->slug]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">View Details</a>
                <button class="bg-pink-500 hover:bg-pink-700 text-white font-bold py-2 px-4 rounded-full" onclick="openLeadForm({{ $package->toJson() }})">
                    Book Now
                </button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    {{-- <script>
            function openLeadForm(packageName) {
                openTravelLeadModal(packageName);
            }
    </script> --}}
@endpush