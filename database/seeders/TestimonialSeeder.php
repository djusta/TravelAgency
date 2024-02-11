<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'content' => 'Amazing experience! The trip was well-organized and exceeded my expectations.',
                'author' => 'John Doe',
                'from' => 'New York, USA',
                'status' => true,
            ],
            [
                'content' => 'I had a fantastic time exploring new cultures and sights. Highly recommend this agency!',
                'author' => 'Jane Smith',
                'from' => 'London, UK',
                'status' => true,
            ],
            [
                'content' => 'Unforgettable journey with breathtaking landscapes. Thank you for the memories!',
                'author' => 'Michael Johnson',
                'from' => 'Sydney, Australia',
                'status' => true,
            ],
            // Add more testimonials as needed
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
