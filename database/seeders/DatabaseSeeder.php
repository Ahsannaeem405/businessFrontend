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

        // DB::table('banners')->insert([
        //     'image' =>'1.jpg',
        //     'heading' =>'Welcome to LOREM IPSUM',
        //     'sub_heading'=>'Risk-taking is the cornerstone of empires.',
        //     'button_name'=>'Get Started',
        //     'button_link'=>'#',

        // ]);
        // DB::table('banners')->insert([
        //     'image' =>'2.jpg',
        //     'heading' =>'Welcome to LOREM IPSUM',
        //     'sub_heading'=>'Risk-taking is the cornerstone of empires.',
        //     'button_name'=>'Get Started',
        //     'button_link'=>'#',

        // ]);
        // DB::table('banners')->insert([
        //     'image' =>'3.jpg',
        //     'heading' =>'Welcome to LOREM IPSUM',
        //     'sub_heading'=>'Risk-taking is the cornerstone of empires.',
        //     'button_name'=>'Get Started',
        //     'button_link'=>'#',

        // ]);
        // DB::table('home_cards')->insert([
        //     'image' =>'1.png',
        //     'heading' =>'LLC',
        //     'link'=>'#',

        // ]);
        // DB::table('home_cards')->insert([
        //     'image' =>'1.png',
        //     'heading' =>'LLC',
        //     'link'=>'#',

        // ]);
        // DB::table('home_cards')->insert([
        //     'image' =>'1.png',
        //     'heading' =>'LLC',
        //     'link'=>'#',

        // ]);
        // DB::table('home_cards')->insert([
        //     'image' =>'1.png',
        //     'heading' =>'LLC',
        //     'link'=>'#',

        // ]);
        // DB::table('launch_bussinesses')->insert([
        //     'image' =>'1.png',
        //     'heading' =>'lorem',
        //     'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
        //     'button_name'=>'Get Started',

        //     'button_link'=>'#',

        // ]);
        // DB::table('corporations')->insert([
        //     'heading' =>'lorem',
        //     'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',


        // ]);
        // DB::table('logos')->insert([
        //     'image' =>'logo.png',



        // ]);
        // DB::table('table_headings')->insert([
        //     'Heading' =>'Lorem ipsum dolor sit amet.',
        //     'Heading1' =>'Lorem ipsum',
        //     'Heading2' =>'Lorem ipsum',
        //     'Heading3' =>'Lorem ipsum',
        //     'Heading4' =>'Lorem ipsum',
        //     'Heading5' =>'Lorem ipsum',





        // ]);
        DB::table('f_rows')->insert([
            'Title' =>'LOREM',
            'Sub_heading' =>'Lorem ipsum',
            'status1' =>'1',
            'status2' =>'1',
            'status3' =>'1',
            'status4' =>'1',


            'heading1' =>'LOREM',
            'detail1' =>'Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the industry',
            'heading2' =>'LOREM',
            'detail2' =>'Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the industry',

            'heading3' =>'LOREM',
            'detail3' =>'Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the industry',
            'heading4' =>'LOREM',
            'detail4' =>'Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the industry',


        ]);




    }
}
