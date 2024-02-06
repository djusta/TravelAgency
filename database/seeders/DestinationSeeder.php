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
        ]);

        // Seed states for India
        $states = [
            ['name' => 'Himachal Pradesh'],
            ['name' => 'Goa'],
            ['name' => 'Kerala'],
        ];

        foreach ($states as $stateData) {
            $state = $india->childDestinations()->create(array_merge($stateData, ['type' => 'state']));

            // Seed cities for each state
            if ($state->name === 'Himachal Pradesh') {
                $state->childDestinations()->createMany([
                    ['name' => 'Shimla', 'type' => 'city'],
                    ['name' => 'Manali', 'type' => 'city'],
                ]);
            } elseif ($state->name === 'Goa') {
                $state->childDestinations()->createMany([
                    ['name' => 'Panaji', 'type' => 'city'],
                    ['name' => 'Margao', 'type' => 'city'],
                ]);
            } elseif ($state->name === 'Kerala') {
                $state->childDestinations()->createMany([
                    ['name' => 'Kochi', 'type' => 'city'],
                    ['name' => 'Thiruvananthapuram', 'type' => 'city'],
                ]);
            }
        }
    }
}
