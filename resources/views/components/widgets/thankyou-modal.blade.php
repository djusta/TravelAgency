<!-- Thank you modal -->
<div id="thankYouModal"
    class="fixed top-0 left-0 w-full h-full bg-gray-800 bg-opacity-50 flex justify-center items-center">
    <div class="bg-neutral-200 bg-cover bg-blend-overlay p-8 rounded-lg shadow-lg relative max-w-md"
    style="background-image: url('https://img.freepik.com/free-photo/merry-christmas-card-perfect-you-text_1361-3601.jpg?w=1060&t=st=1708103637~exp=1708104237~hmac=d7d3259876afdb75a90760f766a361a877149e0c3f50d36a4cecb922591c892b')">
        <button id="closeTravelLeadBtn" class="absolute top-0 right-0 p-2 cursor-pointer">
            <svg class="h-6 w-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        <h2 class="text-2xl font-semibold font-serif mb-4 text-center">Thank You!</h2>
        <p class="text-lg font-medium">Rest assured, your inquiry is important to us! We'll be in contact shortly to assist you with your travel plans.</p>
    </div>
</div>

@push('scripts')
    <script>
        $(document).ready(function() {
            // Close button functionality
            $('#closeTravelLeadBtn').click(function() {
                $('#thankYouModal').addClass('hidden');
            });
        });
    </script>
@endpush
