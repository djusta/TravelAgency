<?php

namespace Database\Seeders;

use App\Models\Destination;
use App\Models\Package;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create some sample packages
        $packages = [
            [
                'name' => 'Shimla Adventure Retreat',
                'slug' => 'shimla-adventure-retreat',
                'duration' => '3 days',
                'price' => 400.00,
                'description' => 'Embark on an adventurous journey amidst the scenic beauty of Shimla.',
            ],
            [
                'name' => 'Romantic Getaway in Shimla',
                'slug' => 'romantic-getaway-shimla',
                'duration' => '2 days',
                'price' => 300.00,
                'description' => 'Indulge in a romantic escape with your loved one amidst the serene landscapes of Shimla.',
            ],
            [
                'name' => 'Family Fun in Shimla',
                'slug' => 'family-fun-shimla',
                'duration' => '4 days',
                'price' => 500.00,
                'description' => 'Enjoy a fun-filled family vacation exploring the attractions of Shimla.',
            ],
            [
                'name' => 'Manali Adventure Expedition',
                'slug' => 'manali-adventure-expedition',
                'duration' => '5 days',
                'price' => 600.00,
                'description' => 'Embark on an adrenaline-pumping adventure in the breathtaking landscapes of Manali.',
            ],
            [
                'name' => 'Romantic Getaway in Manali',
                'slug' => 'romantic-getaway-manali',
                'duration' => '3 days',
                'price' => 450.00,
                'description' => 'Rekindle your romance amidst the snow-capped mountains and serene valleys of Manali.',
            ],
            [
                'name' => 'Family Fun in Manali',
                'slug' => 'family-fun-manali',
                'duration' => '4 days',
                'price' => 550.00,
                'description' => 'Create lasting memories with your family while exploring the enchanting beauty of Manali.',
            ],
            [
                'name' => 'Panaji Heritage Tour',
                'slug' => 'panaji-heritage-tour',
                'duration' => '2 days',
                'price' => 250.00,
                'description' => 'Explore the rich heritage and cultural landmarks of Panaji on this guided tour.',
            ],
            [
                'name' => 'Beach Getaway in Panaji',
                'slug' => 'beach-getaway-panaji',
                'duration' => '3 days',
                'price' => 350.00,
                'description' => 'Relax on the pristine beaches of Panaji and soak in the sun, sand, and sea.',
            ],
            [
                'name' => 'Foodie Delight in Panaji',
                'slug' => 'foodie-delight-panaji',
                'duration' => '2 days',
                'price' => 300.00,
                'description' => 'Indulge in the culinary delights of Panaji with this gastronomic adventure.',
            ],
            [
                'name' => 'Margao Cultural Tour',
                'slug' => 'margao-cultural-tour',
                'duration' => '2 days',
                'price' => 300.00,
                'description' => 'Discover the rich cultural heritage and traditions of Margao on this guided tour.',
            ],
            [
                'name' => 'Beach Retreat in Margao',
                'slug' => 'beach-retreat-margao',
                'duration' => '4 days',
                'price' => 500.00,
                'description' => 'Relax and unwind on the stunning beaches of Margao, surrounded by scenic beauty.',
            ],
            [
                'name' => 'Adventure Escape in Margao',
                'slug' => 'adventure-escape-margao',
                'duration' => '3 days',
                'price' => 400.00,
                'description' => 'Embark on an exciting adventure in the picturesque landscapes of Margao.',
            ],
            [
                'name' => 'Kochi Backwater Cruise',
                'slug' => 'kochi-backwater-cruise',
                'duration' => '2 days',
                'price' => 350.00,
                'description' => 'Experience the tranquility of the backwaters with a cruise in Kochi.',
            ],
            [
                'name' => 'Kochi Heritage Walk',
                'slug' => 'kochi-heritage-walk',
                'duration' => '1 day',
                'price' => 200.00,
                'description' => 'Explore the rich history and cultural landmarks of Kochi on foot.',
            ],
            [
                'name' => 'Kochi Culinary Tour',
                'slug' => 'kochi-culinary-tour',
                'duration' => '3 days',
                'price' => 500.00,
                'description' => 'Indulge in the flavors of Kerala with a culinary tour in Kochi.',
            ],
            [
                'name' => 'Thiruvananthapuram Temple Tour',
                'slug' => 'thiruvananthapuram-temple-tour',
                'duration' => '2 days',
                'price' => 300.00,
                'description' => 'Visit the famous temples and religious landmarks of Thiruvananthapuram.',
            ],
            [
                'name' => 'Thiruvananthapuram Beach Retreat',
                'slug' => 'thiruvananthapuram-beach-retreat',
                'duration' => '3 days',
                'price' => 450.00,
                'description' => 'Relax and rejuvenate on the beautiful beaches of Thiruvananthapuram.',
            ],
            [
                'name' => 'Thiruvananthapuram City Tour',
                'slug' => 'thiruvananthapuram-city-tour',
                'duration' => '1 day',
                'price' => 200.00,
                'description' => 'Explore the vibrant cityscape and cultural attractions of Thiruvananthapuram.',
            ],
        ];

        // Insert packages into the database
        foreach ($packages as $packageData) {
            Package::create($packageData);
        }

        $this->assignDestinations();
    }

    public function assignDestinations()
    {
        // Assign packages to destinations based on their names
        $packagesByDestination = [
            // Packages for Shimla
            'Shimla' => [
                'Shimla Adventure Retreat',
                'Romantic Getaway in Shimla',
                'Family Fun in Shimla',
            ],
            // Packages for Manali
            'Manali' => [
                'Manali Adventure Expedition',
                'Romantic Getaway in Manali',
                'Family Fun in Manali',
            ],
            // Packages for Panaji
            'Panaji' => [
                'Panaji Heritage Tour',
                'Beach Getaway in Panaji',
                'Foodie Delight in Panaji',
            ],
            // Packages for Margao
            'Margao' => [
                'Margao Cultural Tour',
                'Beach Retreat in Margao',
                'Adventure Escape in Margao',
            ],
            // Packages for Kochi
            'Kochi' => [
                'Kochi Backwater Cruise',
                'Kochi Heritage Walk',
                'Kochi Culinary Tour',
            ],
            // Packages for Thiruvananthapuram
            'Thiruvananthapuram' => [
                'Thiruvananthapuram Temple Tour',
                'Thiruvananthapuram Beach Retreat',
                'Thiruvananthapuram City Tour',
            ],
        ];

        // Assign packages to destinations
        foreach ($packagesByDestination as $destinationName => $packageNames) {
            $destination = Destination::where('name', $destinationName)->first();

            if ($destination) {
                foreach ($packageNames as $packageName) {
                    $package = Package::where('name', $packageName)->first();

                    if ($package) {
                        $destination->packages()->attach($package);
                    }
                }
            }
        }
    }
}
