<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(5)->create();

        $user= User::factory()->create([
            'name'=> 'John Doe',
            'email'=> 'john@gmail.com'
        ]);


        Listing::factory(6)->create([
            'user_id'=> $user->id
        ]);
        
        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags'=> 'laravel,javascript',
        //     'company'=> 'Acme Corp',
        //     'location'=>'Boston, Ma',
        //     'email'=> 'email@gmail.com',
        //     'website'=> 'http://www.acme.com',
        //     'description'=> " Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet tenetur qui placeat voluptas nulla, illo voluptatum numquam quasi in quidem dolores blanditiis possimus voluptates, explicabo magni praesentium? Ab, sapiente laborum!" 

        // ]);

        // Listing::create([
        //     'title' => 'Full-Stack Engineer',
        //     'tags'=> 'laravel,backend,api',
        //     'company'=> 'Stark Industies',
        //     'location'=>'New York, NY',
        //     'email'=> 'email12@gmail.com',
        //     'website'=> 'http://www.stark.com',
        //     'description'=> " Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet tenetur qui placeat voluptas nulla, illo voluptatum numquam quasi in quidem dolores blanditiis possimus voluptates, explicabo magni praesentium? Ab, sapiente laborum!" 

        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
