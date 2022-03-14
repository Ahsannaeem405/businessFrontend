<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        DB::table('banners')->insert([
            'image' =>'1.jpg',
            'heading' =>'Welcome to LOREM IPSUM',
            'sub_heading'=>'Risk-taking is the cornerstone of empires.',
            'button_name'=>'Get Started',
            'button_link'=>'#',

        ]);
        DB::table('banners')->insert([
            'image' =>'2.jpg',
            'heading' =>'Welcome to LOREM IPSUM',
            'sub_heading'=>'Risk-taking is the cornerstone of empires.',
            'button_name'=>'Get Started',
            'button_link'=>'#',

        ]);
        DB::table('banners')->insert([
            'image' =>'3.jpg',
            'heading' =>'Welcome to LOREM IPSUM',
            'sub_heading'=>'Risk-taking is the cornerstone of empires.',
            'button_name'=>'Get Started',
            'button_link'=>'#',

        ]);
    }
}
