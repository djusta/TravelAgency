<!-- Travel Lead Form Modal -->
<div id="leadModal" class="fixed top-0 left-0 w-full p-2 h-full flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white p-6 rounded-md shadow-md relative">
        <button id="closeTravelLeadBtn" class="absolute top-0 right-0 p-2 cursor-pointer">
            <svg class="h-6 w-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        <h2 class="text-2xl font-bold mb-1">Book Your Adventure!</h2>
        <p class="mb-4">Please provide your information to book this amazing travel package:</p>
        <form id="travelLeadForm" action="{{ route('storeLead') }}" method="post">
            @csrf
            <div class="flex flex-wrap">
                <div class="px-2 mb-4 w-full">
                    <label for="package" class="block text-sm font-medium text-gray-600">Package Name:</label>
                    <input type="text" id="package" name="package" placeholder="Package"
                        class="mt-1 p-2 border rounded-md w-full">
                </div>
                <div class="px-2 mb-4 w-full">
                    <label for="name" class="block text-sm font-medium text-gray-600">Full Name:</label>
                    <input type="text" id="name" name="name" placeholder="Enter Your Full Name"
                        class="mt-1 p-2 border rounded-md w-full">
                </div>
                <div class="px-2 mb-4 w-1/2">
                    <label for="email" class="block text-sm font-medium text-gray-600">Email Address:</label>
                    <input type="email" id="email" name="email" placeholder="Enter Your Email Address"
                        class="mt-1 p-2 border rounded-md w-full">
                </div>
                <div class="px-2 mb-4 w-1/2">
                    <label for="contact" class="block text-sm font-medium text-gray-600">Phone Number:</label>
                    <input type="text" id="contact" name="contact" placeholder="Enter Your Contact Number"
                        class="mt-1 p-2 border rounded-md w-full">
                </div>
                <div class="px-2 mb-4 w-full">
                    <label for="message" class="block text-sm font-medium text-gray-600">Message:</label>
                    <textarea id="message" name="message" placeholder="Enter Your Message"
                        class="mt-1 p-2 border rounded-md w-full"></textarea>
                </div>
                <div class="px-2 w-full mt-3">
                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md block mx-auto">Book
                        Now</button>
                </div>
            </div>
        </form>
    </div>
</div>

@push('scripts')
    <script>
        $(document).ready(function() {

            // Close button functionality
            $('#closeTravelLeadBtn').click(function() {
                $('#leadModal').addClass('hidden');
            });
        });
    </script>
@endpush
