<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class postseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'title'=>'book1',
            'descriptions'=>'this is good book',
            'author'=>'helal',
            'price'=>'150',
            'image'=>'myimage'
        ]);
    }
}
