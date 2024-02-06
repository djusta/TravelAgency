<div class="w-full md:w-1/2 lg:w-1/3 mx-auto p-3">
    <div class="rounded overflow-hidden shadow-lg bg-white hover:shadow-lg hover:shadow-pink-200 hover:-translate-x-1 hover:-translate-y-1">
        <img class="w-full h-52 object-cover"
            src="{{ $ftImage }}"
            alt="Tour Image">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">{{ $name }}</div>
            <p class="text-gray-700 text-base">
                Explore the hidden gems of exotic destinations with our adventure tour package. Experience breathtaking
                landscapes, vibrant cultures, and thrilling activities.
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
                <div class="text-xl font-bold text-gray-800">&#x20B9;{{ $cost }}</div>
                <p class="text-gray-600">per couple</p>
            </div>
            <div class="px-6 py-4">
                <button class="bg-pink-500 hover:bg-pink-700 text-white font-bold py-2 px-4 rounded-full" onclick="openLeadForm('{{ $name }}')">
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