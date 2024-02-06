<?php

namespace Database\Seeders;

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
        // Seed travel packages
        $packages = [
            [
                'name' => 'Mountain Retreat',
                'description' => 'Enjoy a peaceful retreat in the mountains with breathtaking views.',
                'price' => 1500.00,
            ],
            [
                'name' => 'Beach Getaway',
                'description' => 'Relax on the sandy beaches and soak up the sun in this beachside getaway.',
                'price' => 2000.00,
            ],
            [
                'name' => 'City Explorer',
                'description' => 'Experience the hustle and bustle of the city with guided tours and cultural experiences.',
                'price' => 1800.00,
            ],
            // Add more packages here
            [
                'name' => 'Desert Adventure',
                'description' => 'Embark on an exciting desert adventure with camel rides and starlit camping.',
                'price' => 2200.00,
            ],
            [
                'name' => 'Tropical Paradise',
                'description' => 'Discover a tropical paradise with lush rainforests, waterfalls, and exotic wildlife.',
                'price' => 2500.00,
            ],
            [
                'name' => 'Historical Journey',
                'description' => 'Explore ancient ruins and historical landmarks on this enlightening journey.',
                'price' => 1900.00,
            ],
            [
                'name' => 'Wildlife Safari',
                'description' => 'Embark on a thrilling wildlife safari and encounter majestic creatures in their natural habitat.',
                'price' => 2200.00,
            ],
            [
                'name' => 'Cultural Immersion',
                'description' => 'Immerse yourself in the rich culture and traditions of a vibrant destination.',
                'price' => 2100.00,
            ],
            [
                'name' => 'Adventure Expedition',
                'description' => 'Satisfy your adrenaline cravings with an action-packed adventure expedition.',
                'price' => 2300.00,
            ],
            [
                'name' => 'Luxury Escapade',
                'description' => 'Indulge in opulence and luxury with a lavish escapade in exotic locales.',
                'price' => 3000.00,
            ],
            [
                'name' => 'Family Fun Retreat',
                'description' => 'Create unforgettable memories with your loved ones on a fun-filled family retreat.',
                'price' => 2700.00,
            ],
            [
                'name' => 'Romantic Getaway',
                'description' => 'Rekindle the romance and passion on a dreamy escape with your significant other.',
                'price' => 2600.00,
            ],
            [
                'name' => 'Adventure Cruise',
                'description' => 'Sail the seas and explore exotic destinations aboard a thrilling adventure cruise.',
                'price' => 2800.00,
            ],
            [
                'name' => 'Wellness Retreat',
                'description' => 'Revitalize your mind, body, and soul on a rejuvenating wellness retreat.',
                'price' => 2400.00,
            ],
            [
                'name' => 'Foodie Expedition',
                'description' => 'Embark on a culinary journey and savor the flavors of diverse cuisines.',
                'price' => 2200.00,
            ],
            [
                'name' => 'Photography Tour',
                'description' => 'Capture stunning landscapes and cultural portraits on an enriching photography tour.',
                'price' => 2800.00,
            ],
            [
                'name' => 'Art and Architecture Tour',
                'description' => 'Admire masterpieces of art and marvel at architectural wonders on a cultural tour.',
                'price' => 2500.00,
            ],
            [
                'name' => 'Spiritual Pilgrimage',
                'description' => 'Embark on a spiritual journey and visit sacred sites of profound significance.',
                'price' => 2600.00,
            ],
            [
                'name' => 'Off-the-Grid Adventure',
                'description' => 'Escape the crowds and discover hidden gems on an off-the-grid adventure.',
                'price' => 2300.00,
            ],
            [
                'name' => 'Luxury Safari Experience',
                'description' => 'Indulge in luxury accommodations and exclusive wildlife encounters on a safari experience.',
                'price' => 3200.00,
            ],
            [
                'name' => 'Island Hopping',
                'description' => 'Hop from one stunning island to another and experience tropical paradise like never before.',
                'price' => 2900.00,
            ],
        ];

        // Seed packages
        foreach ($packages as $packageData) {
            Package::create($packageData);
        }
    }
}
