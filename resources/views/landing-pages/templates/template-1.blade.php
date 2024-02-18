<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins/fontawesome-free/css/all.min.css') }}">
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>

<body class="">
    <nav class="bg-indigo-500 p-1">
        <div class="container mx-auto flex items-center justify-between">
            <!-- Left side: Logo and Name -->
            <div class="flex items-center">
                <img src="{{ asset('logo.png') }}" alt="Site Logo" class="h-16 w-auto mr-2">
                <h1 class="text-white text-2xl font-semibold">{{ config('app.name', 'Travel Agency') }}</h1>
            </div>

            <!-- Right side: Contact Details -->
            <div class="flex items-center">
                <p class="text-white mr-4 hidden md:block">Phone: {{ config('app.primary_contact', '1234567890') }}</p>
                <p class="text-white hidden md:block">Email: {{ config('app.leads_email', 'info@mail.com') }}</p>
                <!-- Hamburger menu for mobile -->
                <button class="md:hidden focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- Banner section with enquiry form -->
    <section class="bg-gray-700 py-12 bg-cover bg-blend-overlay" style="background-image: url('https://img.freepik.com/free-photo/landscape-morning-fog-mountains-with-hot-air-balloons-sunrise_335224-794.jpg?w=1060&t=st=1708099962~exp=1708100562~hmac=b518936367f62f78589342cfa766a93aaa000f1830e29ef7e8827ef4be4aef1f')">
        <div class="container mx-auto px-3">
          {{-- <div class="max-w-lg">
            <h2 class="text-5xl font-serif font-bold text-white text-center">If Travelling is Your Dream, We Can Make Your Dream Come True</h2>
          </div> --}}
            <div class="max-w-lg ms-auto bg-indigo-500 text-neutral-100 bg-opacity-85 rounded-lg shadow-lg p-8">
                <h2 class="text-3xl font-semibold mb-4">Plan Your Dream Vacation</h2>
                <p class="text-gray-100 mb-6">Fill out the form below to get started.</p>
                <form action="{{ route('landingPage.storeLead') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block font-semibold">Your Name</label>
                        <input type="text" id="name" name="name" class="text-black w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block font-semibold">Your Email</label>
                        <input type="email" id="email" name="email" class="text-black w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500">
                    </div>
                    <div class="mb-6">
                        <label for="message" class="block font-semibold">Your Message</label>
                        <textarea id="message" name="message" rows="4" class="text-black w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500"></textarea>
                    </div>
                    <button type="submit" class="bg-indigo-900 block mx-auto text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Submit</button>
                </form>
            </div>
        </div>
    </section>

    <section class="py-16">
        <div class="container mx-auto">
            <h2 class="text-4xl text-center font-serif font-bold mb-2">Best Selling Packages</h2>
            <div class="mx-auto h-1 w-36 bg-indigo-100 mb-5"></div>

            <div class="flex flex-wrap">
                @foreach ($packages as $package)
                <x-packages.card2 :package="$package" />
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-indigo-500 text-neutral-100 py-16">
        <div class="container mx-auto">
            <h2 class="text-center text-4xl font-serif font-bold mb-2">Why {{ config('app.name') }}</h2>
            <div class="mx-auto h-1 w-36 bg-neutral-100 mb-10"></div>

            <div class="grid grid-cols-3">
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="white" id="Filled" viewBox="0 0 24 24" class="h-16 mx-auto"><path d="M5,22a2,2,0,0,0,2-2V14a2,2,0,0,0-2-2V11a7,7,0,0,1,14,0v1a2,2,0,0,0-2,2v6H14a1,1,0,0,0,0,2h5a5,5,0,0,0,2-9.576V11A9,9,0,0,0,3,11v1.424A5,5,0,0,0,5,22Z"/></svg>
                <p class="text-center text-xl font-bold">Top Class Customer Support</p>
              </div>
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="white" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" class="h-16 mx-auto">
                  <path d="m17.829,10.762c-.141,0-.282-.045-.4-.133-.227-.17-.321-.464-.236-.734l.627-2.011-1.585-1.29c-.213-.181-.291-.476-.194-.738.096-.262.346-.437.626-.437h2.001l.708-1.987c.097-.261.346-.434.625-.434s.528.173.625.434l.708,1.987h2.001c.28,0,.53.175.626.438s.017.558-.197.739l-1.577,1.285.652,1.987c.089.269-.001.565-.226.738-.225.173-.534.185-.771.031l-1.836-1.196-1.805,1.208c-.112.075-.242.113-.371.113Zm-8-3c-.141,0-.282-.045-.4-.133-.227-.17-.321-.464-.236-.734l.627-2.011-1.585-1.29c-.213-.181-.291-.476-.194-.738.096-.262.346-.437.626-.437h2.001l.708-1.987c.097-.261.346-.434.625-.434s.528.173.625.434l.708,1.987h2.001c.28,0,.53.175.626.438s.017.558-.197.739l-1.577,1.285.652,1.987c.089.269-.001.565-.226.738-.225.173-.534.185-.771.031l-1.836-1.196-1.805,1.208c-.112.075-.242.113-.371.113ZM1.829,10.762c-.141,0-.282-.045-.4-.133-.227-.17-.321-.464-.236-.734l.627-2.011L.235,6.595c-.213-.181-.291-.476-.194-.738.096-.262.346-.437.626-.437h2.001l.708-1.987c.097-.261.346-.434.625-.434s.528.173.625.434l.708,1.987h2.001c.28,0,.53.175.626.438s.017.558-.197.739l-1.577,1.285.652,1.987c.089.269-.001.565-.226.738-.225.173-.534.185-.771.031l-1.836-1.196-1.805,1.208c-.112.075-.242.113-.371.113Zm15.17,3.238h-4.183l.58-3.265c.057-.334.029-.519.007-.599-.188-.69-.75-1.136-1.432-1.136-.213,0-.428.044-.64.132-.254.105-.503.367-.682.719l-2.193,4.149h-1.456c-1.657,0-3,1.343-3,3v4c0,1.657,1.343,3,3,3h0v-7c0-.552.448-1,1-1s1,.448,1,1v7h6.379c1.907,0,3.548-1.346,3.922-3.216l.639-3.196c.371-1.856-1.049-3.588-2.942-3.588Z"/>
                </svg>
                <p class="text-center text-xl font-bold">Top Rated on Google</p>
              </div>
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="white" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" class="w-16 mx-auto"><path d="M13.569,6l1.964,5H8.477l2-5Zm4.112,5h6.248a3.013,3.013,0,0,0-.476-.979L21.406,7.228A3.009,3.009,0,0,0,18.986,6H15.717Zm-2.067,2H8.386L12,23.879Zm2.108,0-2.743,8.255,8.167-7.332A3.045,3.045,0,0,0,23.78,13ZM6.278,13H.23a3.144,3.144,0,0,0,.661.957l8.13,7.3Zm.045-2,2-5H5.014a3.009,3.009,0,0,0-2.42,1.228L.547,10.021A3.01,3.01,0,0,0,.072,11ZM13,0H11V4h2Zm6.844,1.652L18.156.578l-2,3.142,1.688,1.074Zm-12,2.068-2-3.142L4.156,1.652l2,3.142Z"/></svg>
                <p class="text-center text-xl font-bold">Best Value for Money</p>
              </div>
            </div>
        </div>
    </section>

    <footer class="text-gray-600 body-font">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
          <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl">{{ config('app.name', 'Travel Agency') }}</span>
          </a>
          <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© {{ date('Y') }}  — All Rights Reserved</p>
          <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
            <a class="text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
              </svg>
            </a>
            <a class="ml-3 text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
              </svg>
            </a>
            <a class="ml-3 text-gray-500">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
              </svg>
            </a>
            <a class="ml-3 text-gray-500">
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                <circle cx="4" cy="4" r="2" stroke="none"></circle>
              </svg>
            </a>
          </span>
        </div>
      </footer>

    @if(session('success'))
    <x-widgets.thankyou-modal />
    @endif

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    @stack('scripts')
</body>

</html>
