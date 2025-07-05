<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'post ke-1' ,
            'content' => Str::random(100) ,
            'created_at' => now() ,
            'updated_at' => now() 
        ]);

        Post::factory()->count(15)->create() ;
    }
}
