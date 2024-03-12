<?php

namespace Database\Seeders;

use App\Models\Destination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed country (India)
        $india = Destination::create([
            'name' => 'India',
            'type' => 'country',
            'slug' => 'india',
            'excerpt' => 'Explore India\'s cultural richness, historical significance, and breathtaking landscapes on an unforgettable journey of discovery.',
            'description' => 'India is renowned for its rich culture, diverse history, and stunning natural beauty. From the majestic Himalayas to the serene backwaters of Kerala, India offers a tapestry of experiences. Explore ancient temples, bustling cities, and vibrant festivals in this captivating country.',
        ]);

        // Seed states for India
        $states = [
            [
                'name' => 'Himachal Pradesh', 'slug' => 'himachal-pradesh',
                'excerpt' => 'Explore the Himalayas in Himachal Pradesh.',
                'description' => 'Himachal Pradesh is a northern Indian state in the Himalayas known for its scenic beauty and adventure activities.'
            ],

            [
                'name' => 'Goa', 'slug' => 'goa',
                'excerpt' => 'Relax on the beaches of Goa.',
                'description' => 'Goa is a coastal state in western India known for its stunning beaches, vibrant nightlife, and Portuguese heritage.'
            ],

            [
                'name' => 'Kerala', 'slug' => 'kerala',
                'excerpt' => 'Experience the backwaters of Kerala.',
                'description' => 'Kerala, located on the southwestern coast of India, is famous for its tranquil backwaters, lush greenery, and Ayurvedic treatments.'
            ],
        ];

        foreach ($states as $stateData) {
            $state = $india->childDestinations()->create(array_merge($stateData, ['type' => 'state']));

            // Seed cities for each state
            if ($state->name === 'Himachal Pradesh') {
                $state->childDestinations()->createMany([
                    ['name' => 'Shimla', 'type' => 'city', 'slug' => 'shimla', 'excerpt' => 'Explore the capital city of Himachal Pradesh.', 'description' => 'Shimla, the capital city of Himachal Pradesh, is famous for its colonial architecture, scenic beauty, and adventure sports.'],
                    ['name' => 'Manali', 'type' => 'city', 'slug' => 'manali', 'excerpt' => 'Experience adventure sports in Manali.', 'description' => 'Manali is a popular hill station in Himachal Pradesh known for its scenic beauty, snow-capped mountains, and adventure sports opportunities.'],
                    ['name' => 'Dharamshala', 'type' => 'city', 'slug' => 'dharamshala', 'excerpt' => 'Explore the serene town of Dharamshala.', 'description' => 'Dharamshala is a serene town in Himachal Pradesh known for its Tibetan culture, picturesque landscapes, and spiritual atmosphere.'],
                    ['name' => 'Dalhousie', 'type' => 'city', 'slug' => 'dalhousie', 'excerpt' => 'Discover the tranquility of Dalhousie.', 'description' => 'Dalhousie is a charming hill station in Himachal Pradesh known for its colonial architecture, scenic beauty, and pleasant climate.'],
                ]);
            }
        }
    }
}
