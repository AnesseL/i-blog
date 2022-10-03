<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Post::factory(5)->create();
        // Post::factory(5)->suspended()->create();
        
        foreach(range(1,10) as $i)
        {
            if($i % 2 === 0)
            {
                Post::factory()->suspended()->create();
            }else {
                Post::factory()->create();
            }
        }
    }
}
