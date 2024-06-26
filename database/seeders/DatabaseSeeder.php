<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Listing;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;
use Database\Factories\ListingFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com'
        ]);


       // \App\Models\User::factory()->create([
         //    'name' => 'Test User',
         //    'email' => 'test@example.com',
        // ]);

         Listing::factory(6)-> create([
            'user_id' => $user->id
         ]);
    }
}
