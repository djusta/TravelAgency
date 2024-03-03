<?php

namespace Database\Seeders;

use App\Models\Itinerary;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItinerarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // Shimla Manali 5 Nights 6 Days
    // public function run(): void
    // {
    //     $packageId = 20; // Change this to match the package ID

    //     // Itinerary for Day 1: Arrival at Shimla
    //     Itinerary::create([
    //         'package_id' => $packageId,
    //         'order' => 1,
    //         'title' => 'Arrival at Shimla',
    //         'description' => 'Arrive at Shimla and check into your hotel. Spend the day at leisure, exploring the local markets and enjoying the scenic beauty of Shimla.'
    //     ]);

    //     // Itinerary for Day 2: Shimla Local Sightseeing
    //     Itinerary::create([
    //         'package_id' => $packageId,
    //         'order' => 2,
    //         'title' => 'Shimla Local Sightseeing',
    //         'description' => 'After breakfast, proceed for a full day of sightseeing in Shimla. Visit popular attractions like Mall Road, Jakhoo Temple, Christ Church, and the Ridge. Return to the hotel for an overnight stay.'
    //     ]);

    //     // Itinerary for Day 3: Travel to Manali
    //     Itinerary::create([
    //         'package_id' => $packageId,
    //         'order' => 3,
    //         'title' => 'Travel to Manali',
    //         'description' => 'After breakfast, check out from the hotel and travel to Manali. En route, enjoy the scenic beauty of Kullu Valley. Upon arrival in Manali, check into your hotel and relax.'
    //     ]);

    //     // Itinerary for Day 4: Manali Sightseeing
    //     Itinerary::create([
    //         'package_id' => $packageId,
    //         'order' => 4,
    //         'title' => 'Manali Sightseeing',
    //         'description' => 'After breakfast, proceed for a local sightseeing tour of Manali. Visit Hadimba Devi Temple, Vashisht Temple, Club House, and Tibetan Monastery. Enjoy the evening at leisure or explore the local markets.'
    //     ]);

    //     // Itinerary for Day 5: Excursion to Solang Valley
    //     Itinerary::create([
    //         'package_id' => $packageId,
    //         'order' => 5,
    //         'title' => 'Excursion to Solang Valley',
    //         'description' => 'After breakfast, embark on an excursion to Solang Valley. Enjoy adventure activities like paragliding, zorbing, and skiing (subject to snowfall). Return to Manali in the evening for overnight stay.'
    //     ]);

    //     // Itinerary for Day 6: Departure from Manali
    //     Itinerary::create([
    //         'package_id' => $packageId,
    //         'order' => 6,
    //         'title' => 'Departure from Manali',
    //         'description' => 'After breakfast, check out from the hotel and proceed for your onward journey. End of tour.'
    //     ]);
    // }

    // Manali 3 Nights 4 Days
    // public function run()
    // {
    //     $packageId = 21; // Update with your package ID

    //     // Itinerary for Day 1: Arrival in Manali
    //     Itinerary::create([
    //         'package_id' => $packageId,
    //         'order' => 1,
    //         'title' => 'Arrival in Manali',
    //         'description' => 'Arrive in Manali and check into your hotel. Spend the day relaxing and acclimatizing to the weather. You can explore the nearby areas or take a leisurely stroll around the town.'
    //     ]);

    //     // Itinerary for Day 2: Manali Local Sightseeing
    //     Itinerary::create([
    //         'package_id' => $packageId,
    //         'order' => 2,
    //         'title' => 'Manali Local Sightseeing',
    //         'description' => 'After breakfast, proceed for local sightseeing in Manali. Visit Hadimba Temple, a serene wooden temple surrounded by cedar forests. Explore the Manu Temple dedicated to the sage Manu, believed to be the creator of the world. Visit the Club House to enjoy various recreational activities like indoor games and river crossing. In the evening, stroll around Mall Road, known for its bustling market and delicious street food.'
    //     ]);

    //     // Itinerary for Day 3: Excursion to Solang Valley
    //     Itinerary::create([
    //         'package_id' => $packageId,
    //         'order' => 3,
    //         'title' => 'Excursion to Solang Valley',
    //         'description' => 'After breakfast, embark on an excursion to Solang Valley, known for its breathtaking views and adventure activities. Enjoy thrilling activities like paragliding, zorbing, and horse riding amidst the stunning landscape. You can also take a cable car ride to enjoy panoramic views of the surrounding mountains. Return to Manali in the evening and spend some leisure time exploring the local markets.'
    //     ]);

    //     // Itinerary for Day 4: Departure from Manali
    //     Itinerary::create([
    //         'package_id' => $packageId,
    //         'order' => 4,
    //         'title' => 'Departure from Manali',
    //         'description' => 'After breakfast, check out from the hotel and proceed for your onward journey. End of the memorable trip to Manali.'
    //     ]);
    // }

    //
    // public function run()
    // {
    //     $packageId = 22; // Update with your package ID

    //     // Itinerary for Day 1: Arrival in Shimla
    //     Itinerary::create([
    //         'package_id' => $packageId,
    //         'order' => 1,
    //         'title' => 'Arrival in Shimla',
    //         'description' => 'Arrive in Shimla and check into your hotel. Spend the day at leisure, exploring the local markets and enjoying the scenic beauty of Shimla.'
    //     ]);

    //     // Itinerary for Day 2: Shimla Local Sightseeing
    //     Itinerary::create([
    //         'package_id' => $packageId,
    //         'order' => 2,
    //         'title' => 'Shimla Local Sightseeing',
    //         'description' => 'After breakfast, proceed for a full day of sightseeing in Shimla. Visit popular attractions like Mall Road, Jakhoo Temple, Christ Church, and the Ridge. Return to the hotel for an overnight stay.'
    //     ]);

    //     // Itinerary for Day 3: Travel to Manali
    //     Itinerary::create([
    //         'package_id' => $packageId,
    //         'order' => 3,
    //         'title' => 'Travel to Manali',
    //         'description' => 'After breakfast, check out from the hotel and travel to Manali. En route, enjoy the scenic beauty of Kullu Valley. Upon arrival in Manali, check into your hotel and relax.'
    //     ]);

    //     // Itinerary for Day 4: Manali Local Sightseeing
    //     Itinerary::create([
    //         'package_id' => $packageId,
    //         'order' => 4,
    //         'title' => 'Manali Local Sightseeing',
    //         'description' => 'After breakfast, proceed for a local sightseeing tour of Manali. Visit Hadimba Devi Temple, Vashisht Temple, Club House, and Tibetan Monastery. Enjoy the evening at leisure or explore the local markets.'
    //     ]);

    //     // Itinerary for Day 5: Excursion to Solang Valley
    //     Itinerary::create([
    //         'package_id' => $packageId,
    //         'order' => 5,
    //         'title' => 'Excursion to Solang Valley',
    //         'description' => 'After breakfast, embark on an excursion to Solang Valley. Enjoy adventure activities like paragliding, zorbing, and skiing (subject to snowfall). Return to Manali in the evening for overnight stay.'
    //     ]);

    //     // Itinerary for Day 6: Travel to Dharamshala
    //     Itinerary::create([
    //         'package_id' => $packageId,
    //         'order' => 6,
    //         'title' => 'Travel to Dharamshala',
    //         'description' => 'After breakfast, check out from the hotel and proceed to Dharamshala. Upon arrival, check into your hotel and spend the day at leisure, exploring the local markets or visiting nearby attractions.'
    //     ]);

    //     // Itinerary for Day 7: Dharamshala Local Sightseeing
    //     Itinerary::create([
    //         'package_id' => $packageId,
    //         'order' => 7,
    //         'title' => 'Dharamshala Local Sightseeing',
    //         'description' => 'After breakfast, proceed for local sightseeing in Dharamshala. Visit the Bhagsunag Temple, Dal Lake, and Tibetan Monastery. Enjoy the serene surroundings and beautiful landscapes. Return to the hotel for an overnight stay.'
    //     ]);

    //     // Itinerary for Day 8: Travel to Dalhousie
    //     Itinerary::create([
    //         'package_id' => $packageId,
    //         'order' => 8,
    //         'title' => 'Travel to Dalhousie',
    //         'description' => 'After breakfast, check out from the hotel and proceed to Dalhousie. En route, enjoy the scenic drive and stop at attractions like Khajjiar, known as the "Mini Switzerland of India". Upon arrival in Dalhousie, check into your hotel and relax.'
    //     ]);

    //     // Itinerary for Day 9: Dalhousie Local Sightseeing
    //     Itinerary::create([
    //         'package_id' => $packageId,
    //         'order' => 9,
    //         'title' => 'Dalhousie Local Sightseeing',
    //         'description' => 'After breakfast, proceed for local sightseeing in Dalhousie. Visit attractions like Panchpula, Subhash Baoli, and St. John\'s Church. Enjoy the scenic views of the surrounding hills and valleys. Return to the hotel for an overnight stay.'
    //     ]);

    //     // Itinerary for Day 10: Departure from Dalhousie
    //     Itinerary::create([
    //         'package_id' => $packageId,
    //         'order' => 10,
    //         'title' => 'Departure from Dalhousie',
    //         'description' => 'After breakfast, check out from the hotel and proceed for your onward journey. End of the memorable tour of Shimla, Manali, Dharamshala, and Dalhousie.'
    //     ]);
    // }

    // public function run()
    // {
    //     $packageId = 23; // Update with your package ID

    //     // Itinerary for Day 1: Arrival in Manali
    //     Itinerary::create([
    //         'package_id' => $packageId,
    //         'order' => 1,
    //         'title' => 'Arrival in Manali',
    //         'description' => 'Arrive in Manali and check into your hotel. Spend the day relaxing and acclimatizing to the weather. You can explore the nearby areas or take a leisurely stroll around the town.'
    //     ]);

    //     // Itinerary for Day 2: Manali Local Sightseeing
    //     Itinerary::create([
    //         'package_id' => $packageId,
    //         'order' => 2,
    //         'title' => 'Manali Local Sightseeing',
    //         'description' => 'After breakfast, proceed for local sightseeing in Manali. Visit Hadimba Temple, a serene wooden temple surrounded by cedar forests. Explore the Manu Temple dedicated to the sage Manu, believed to be the creator of the world. Visit the Club House to enjoy various recreational activities like indoor games and river crossing. In the evening, stroll around Mall Road, known for its bustling market and delicious street food.'
    //     ]);

    //     // Itinerary for Day 3: Travel to Dharamshala
    //     Itinerary::create([
    //         'package_id' => $packageId,
    //         'order' => 3,
    //         'title' => 'Travel to Dharamshala',
    //         'description' => 'After breakfast, check out from the hotel and travel to Dharamshala. Enjoy the scenic drive through the mountains. Upon arrival, check into your hotel and relax.'
    //     ]);

    //     // Itinerary for Day 4: Dharamshala Local Sightseeing
    //     Itinerary::create([
    //         'package_id' => $packageId,
    //         'order' => 4,
    //         'title' => 'Dharamshala Local Sightseeing',
    //         'description' => 'After breakfast, proceed for local sightseeing in Dharamshala. Visit the famous McLeod Ganj, the residence of the 14th Dalai Lama. Explore the Bhagsunath Temple and Waterfall. Visit the Dalai Lama Temple Complex and the Tibetan Museum. In the evening, explore the local markets.'
    //     ]);

    //     // Itinerary for Day 5: Travel to Amritsar
    //     Itinerary::create([
    //         'package_id' => $packageId,
    //         'order' => 5,
    //         'title' => 'Travel to Amritsar',
    //         'description' => 'After breakfast, check out from the hotel and travel to Amritsar. Upon arrival, check into your hotel and relax. In the evening, visit the iconic Golden Temple, a spiritual and cultural landmark of Sikhism.'
    //     ]);

    //     // Itinerary for Day 6: Amritsar Local Sightseeing
    //     Itinerary::create([
    //         'package_id' => $packageId,
    //         'order' => 6,
    //         'title' => 'Amritsar Local Sightseeing',
    //         'description' => 'After breakfast, proceed for local sightseeing in Amritsar. Visit the historic Jallianwala Bagh, the site of the tragic massacre in 1919. Explore the vibrant markets around the temple. Later, visit the patriotic Wagah Border and witness the ceremonial border closing ceremony.'
    //     ]);

    //     // Itinerary for Day 7: Departure from Amritsar
    //     Itinerary::create([
    //         'package_id' => $packageId,
    //         'order' => 7,
    //         'title' => 'Departure from Amritsar',
    //         'description' => 'After breakfast, check out from the hotel and proceed for your onward journey. End of the memorable trip.'
    //     ]);
    // }

    // public function run()
    // {
    //     $packageId = 24; // Update with your package ID

    //     // Itinerary for Day 1: Arrival in Shimla
    //     Itinerary::create([
    //         'package_id' => $packageId,
    //         'order' => 1,
    //         'title' => 'Arrival in Shimla',
    //         'description' => 'Arrive in Shimla and check into your hotel. Spend the day at leisure, exploring the local markets and enjoying the scenic beauty of Shimla.'
    //     ]);

    //     // Itinerary for Day 2: Shimla Local Sightseeing
    //     Itinerary::create([
    //         'package_id' => $packageId,
    //         'order' => 2,
    //         'title' => 'Shimla Local Sightseeing',
    //         'description' => 'After breakfast, proceed for a full day of sightseeing in Shimla. Visit popular attractions like Mall Road, Jakhoo Temple, Christ Church, and the Ridge. Return to the hotel for an overnight stay.'
    //     ]);

    //     // Itinerary for Day 3: Travel to Manali
    //     Itinerary::create([
    //         'package_id' => $packageId,
    //         'order' => 3,
    //         'title' => 'Travel to Manali',
    //         'description' => 'After breakfast, check out from the hotel and travel to Manali. En route, enjoy the scenic beauty of Kullu Valley. Upon arrival in Manali, check into your hotel and relax.'
    //     ]);

    //     // Itinerary for Day 4: Manali Local Sightseeing
    //     Itinerary::create([
    //         'package_id' => $packageId,
    //         'order' => 4,
    //         'title' => 'Manali Local Sightseeing',
    //         'description' => 'After breakfast, proceed for a local sightseeing tour of Manali. Visit Hadimba Devi Temple, Vashisht Temple, Club House, and Tibetan Monastery. Enjoy the evening at leisure or explore the local markets.'
    //     ]);

    //     // Itinerary for Day 5: Travel to Dharamshala
    //     Itinerary::create([
    //         'package_id' => $packageId,
    //         'order' => 5,
    //         'title' => 'Travel to Dharamshala',
    //         'description' => 'After breakfast, check out from the hotel and travel to Dharamshala. Enjoy the scenic drive through the mountains. Upon arrival, check into your hotel and relax.'
    //     ]);

    //     // Itinerary for Day 6: Dharamshala Local Sightseeing
    //     Itinerary::create([
    //         'package_id' => $packageId,
    //         'order' => 6,
    //         'title' => 'Dharamshala Local Sightseeing',
    //         'description' => 'After breakfast, proceed for local sightseeing in Dharamshala. Visit the famous McLeod Ganj, the residence of the 14th Dalai Lama. Explore the Bhagsunath Temple and Waterfall. Visit the Dalai Lama Temple Complex and the Tibetan Museum. In the evening, explore the local markets.'
    //     ]);

    //     // Itinerary for Day 7: Travel to Dalhousie
    //     Itinerary::create([
    //         'package_id' => $packageId,
    //         'order' => 7,
    //         'title' => 'Travel to Dalhousie',
    //         'description' => 'After breakfast, check out from the hotel and travel to Dalhousie. Enjoy the scenic drive through the mountains. Upon arrival, check into your hotel and relax.'
    //     ]);

    //     // Itinerary for Day 8: Dalhousie Local Sightseeing
    //     Itinerary::create([
    //         'package_id' => $packageId,
    //         'order' => 8,
    //         'title' => 'Dalhousie Local Sightseeing',
    //         'description' => 'After breakfast, proceed for local sightseeing in Dalhousie. Visit popular attractions like Khajjiar, also known as Mini Switzerland of India. Explore St. John’s Church, Subhash Baoli, and Satdhara Falls. In the evening, enjoy leisure time at Mall Road.'
    //     ]);

    //     // Itinerary for Day 9: Travel to Agra
    //     Itinerary::create([
    //         'package_id' => $packageId,
    //         'order' => 9,
    //         'title' => 'Travel to Agra',
    //         'description' => 'After breakfast, check out from the hotel and travel to Agra. En route, visit the iconic Taj Mahal in Agra, one of the Seven Wonders of the World. Upon arrival in Agra, check into your hotel and relax.'
    //     ]);

    //     // Itinerary for Day 10: Agra Local Sightseeing
    //     Itinerary::create([
    //         'package_id' => $packageId,
    //         'order' => 10,
    //         'title' => 'Agra Local Sightseeing',
    //         'description' => 'After breakfast, proceed for local sightseeing in Agra. Visit the majestic Agra Fort, a UNESCO World Heritage Site. Explore the historic Fatehpur Sikri, known for its stunning architecture and rich history. In the evening, explore the local markets.'
    //     ]);

    //     // Itinerary for Day 11: Departure from Agra
    //     Itinerary::create([
    //         'package_id' => $packageId,
    //         'order' => 11,
    //         'title' => 'Departure from Agra',
    //         'description' => 'After breakfast, check out from the hotel and proceed for your onward journey. End of the memorable trip.'
    //     ]);
    // }

    // public function run()
    // {
    //     $packageId = 25; // Update with your package ID

    //     // Itinerary for Day 1: Arrival in Manali
    //     Itinerary::create([
    //         'package_id' => $packageId,
    //         'order' => 1,
    //         'title' => 'Arrival in Manali',
    //         'description' => 'Arrive in Manali and check into your hotel. Spend the day at leisure, exploring the local markets and enjoying the scenic beauty of Manali.'
    //     ]);

    //     // Itinerary for Day 2: Manali Local Sightseeing
    //     Itinerary::create([
    //         'package_id' => $packageId,
    //         'order' => 2,
    //         'title' => 'Manali Local Sightseeing',
    //         'description' => 'After breakfast, proceed for local sightseeing in Manali. Visit Hadimba Devi Temple, a serene wooden temple surrounded by cedar forests. Explore the Vashisht Hot Water Springs, known for their medicinal properties. Enjoy a stroll along the Mall Road and explore the local handicrafts. In the evening, return to the hotel for an overnight stay.'
    //     ]);

    //     // Itinerary for Day 3: Departure from Manali
    //     Itinerary::create([
    //         'package_id' => $packageId,
    //         'order' => 3,
    //         'title' => 'Departure from Manali',
    //         'description' => 'After breakfast, check out from the hotel and proceed for your onward journey. End of the memorable trip to Manali.'
    //     ]);
    // }
}
