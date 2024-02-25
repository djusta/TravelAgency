<div class="w-full md:w-1/2 lg:w-1/3 mx-auto p-3 relative">
    <div class="card min-h-full bg-neutral-800 hover:bg-neutral-900 text-neutral-200 py-16 px-4 rounded-xl bg-cover bg-center bg-blend-overlay hover:shadow-lg hover:shadow-blue-200 hover:-translate-x-1 hover:-translate-y-1 relative"
        style="background-image: url('{{ $destination->image ? asset('storage/uploads/' . $destination->image) : 'https://img.freepik.com/free-photo/group-man-woman-enjoy-camping-picnic-barbecue-lake-with-tents-background-young-mixed-race-asian-woman-man-young-people-s-hands-toasting-cheering-bottles-beer_1253-1041.jpg?w=1060&t=st=1707243870~exp=1707244470~hmac=5babe2247df2250b31ff2aa3a3862d751653ba2c083db090a449728a246bfdac' }}')">
        <h3 class="text-3xl text-center mb-5 font-bold">{{ $destination->name }}</h3>
        <p class="text-center">{{ $destination->excerpt ?? 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis saepe beatae dignissimos eligendi sapiente dolorum, laboriosam perferendis animi facere sint.' }}</p>
        <p class="text-center my-5">
            <a href="{{ route('showDestination', ['slug' => $destination->slug]) }}" class="text-blue-300 font-semibold">Explore
                Packages</a>
        </p>
        <!-- Badge for package count -->
        <span
            class="absolute top-0 right-0 bg-blue-500 text-white rounded px-2 py-1 text-sm transition-all duration-300">{{ $destination->packages_count }}
            Packages Available</span>
    </div>
</div>
