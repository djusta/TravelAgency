<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Destination;
use App\Models\Package;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            "name" => "Super Admin",
            "email" => "super@mail.com",
            "role_id" => 3,
            "password" => bcrypt("Pass@123")
        ]);

        $this->call([
            // DestinationSeeder::class,
            // PackageSeeder::class,
            // TestimonialSeeder::class,
            // RoleSeeder::class
        ]);

        
    }
}
