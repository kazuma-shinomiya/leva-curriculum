<?php

namespace Database\Seeders;

use App\Models\Post;
use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory()->count(50)->create();
        // DB::table('posts')->insert([
        //     'title' => '命名の心得',
        //     'body' => '命名はデータを基準に考える',
        //     'created_at' => new DateTime(),
        //     'updated_at' => new DateTime(),
        //  ]);
    }
}
