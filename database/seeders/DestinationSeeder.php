<?php

namespace Database\Seeders;

use App\Models\Destination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
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
            'excerpt' => 'Discover the diverse culture and landscapes of India.',
            'description' => 'India is a vast and diverse country known for its rich culture, history, and natural beauty.',
        ]);

        // Seed states for India
        $states = [
            ['name' => 'Himachal Pradesh', 'slug' => 'himachal-pradesh', 'excerpt' => 'Explore the Himalayas in Himachal Pradesh.', 'description' => 'Himachal Pradesh is a northern Indian state in the Himalayas known for its scenic beauty and adventure activities.'],
            ['name' => 'Goa', 'slug' => 'goa', 'excerpt' => 'Relax on the beaches of Goa.', 'description' => 'Goa is a coastal state in western India known for its stunning beaches, vibrant nightlife, and Portuguese heritage.'],
            ['name' => 'Kerala', 'slug' => 'kerala', 'excerpt' => 'Experience the backwaters of Kerala.', 'description' => 'Kerala, located on the southwestern coast of India, is famous for its tranquil backwaters, lush greenery, and Ayurvedic treatments.'],
        ];

        foreach ($states as $stateData) {
            $state = $india->childDestinations()->create(array_merge($stateData, ['type' => 'state']));

            // Seed cities for each state
            if ($state->name === 'Himachal Pradesh') {
                $state->childDestinations()->createMany([
                    ['name' => 'Shimla', 'type' => 'city', 'slug' => 'shimla', 'excerpt' => 'Explore the capital city of Himachal Pradesh.', 'description' => 'Shimla, the capital city of Himachal Pradesh, is famous for its colonial architecture, scenic beauty, and adventure sports.'],
                    ['name' => 'Manali', 'type' => 'city', 'slug' => 'manali', 'excerpt' => 'Experience adventure sports in Manali.', 'description' => 'Manali is a popular hill station in Himachal Pradesh known for its scenic beauty, snow-capped mountains, and adventure sports opportunities.'],
                ]);
            } elseif ($state->name === 'Goa') {
                $state->childDestinations()->createMany([
                    ['name' => 'Panaji', 'type' => 'city', 'slug' => 'panaji', 'excerpt' => 'Explore the capital city of Goa.', 'description' => 'Panaji, the capital city of Goa, is known for its Portuguese colonial architecture, vibrant markets, and scenic riverfront.'],
                    ['name' => 'Margao', 'type' => 'city', 'slug' => 'margao', 'excerpt' => 'Discover the culture of South Goa in Margao.', 'description' => 'Margao is a bustling town in South Goa known for its rich cultural heritage, historic buildings, and bustling markets.'],
                ]);
            } elseif ($state->name === 'Kerala') {
                $state->childDestinations()->createMany([
                    ['name' => 'Kochi', 'type' => 'city', 'slug' => 'kochi', 'excerpt' => 'Explore the historic city of Kochi.', 'description' => 'Kochi, also known as Cochin, is a historic port city in Kerala known for its rich cultural heritage, ancient landmarks, and bustling markets.'],
                    ['name' => 'Thiruvananthapuram', 'type' => 'city', 'slug' => 'thiruvananthapuram', 'excerpt' => 'Experience the capital city of Kerala.', 'description' => 'Thiruvananthapuram, the capital city of Kerala, is known for its colonial architecture, vibrant culture, and beautiful beaches.'],
                ]);
            }
        }
    }
}
