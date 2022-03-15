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
        DB::table('home_cards')->insert([
            'image' =>'1.png',
            'heading' =>'LLC',
            'link'=>'#',

        ]);
        DB::table('home_cards')->insert([
            'image' =>'1.png',
            'heading' =>'LLC',
            'link'=>'#',

        ]);
        DB::table('home_cards')->insert([
            'image' =>'1.png',
            'heading' =>'LLC',
            'link'=>'#',

        ]);
        DB::table('home_cards')->insert([
            'image' =>'1.png',
            'heading' =>'LLC',
            'link'=>'#',

        ]);
        DB::table('launch_bussinesses')->insert([
            'image' =>'1.png',
            'heading' =>'lorem',
            'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'button_name'=>'Get Started',

            'button_link'=>'#',

        ]);
        DB::table('corporations')->insert([
            'heading' =>'lorem',
            'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',


        ]);
        DB::table('logos')->insert([
            'image' =>'logo.png',



        ]);
        DB::table('table_headings')->insert([
            'Heading' =>'Lorem ipsum dolor sit amet.',
            'Heading1' =>'Lorem ipsum',
            'Heading2' =>'Lorem ipsum',
            'Heading3' =>'Lorem ipsum',
            'Heading4' =>'Lorem ipsum',
            'Heading5' =>'Lorem ipsum',





        ]);
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
        DB::table('s_rows')->insert([
            'Title' =>'LOREM',
            'Sub_heading' =>'Lorem ipsum',
            'Sub_heading2' =>'Lorem ipsum',
            'status1' =>'1',
            'status2' =>'1',
            'status3' =>'1',
            'status4' =>'1',
            'status5' =>'1',
             'status6' =>'1',
              'status7' =>'1',
                'status8' =>'1',


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

            'heading5' =>'LOREM',
            'detail5' =>'Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the industry',

            'heading6' =>'LOREM',
            'detail6' =>'Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the industry',

            'heading7' =>'LOREM',
            'detail7' =>'Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the industry',

            'heading8' =>'LOREM',
            'detail8' =>'Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the industry',



        ]);



        DB::table('trows')->insert([
            'Title' =>'LOREM',
            'Sub_heading' =>'Lorem ipsum',
            'Sub_heading2' =>'Lorem ipsum',
            'Sub_heading3' =>'Lorem ipsum',
            'Sub_heading4' =>'Lorem ipsum',
            'status1' =>'1',
            'status2' =>'1',
            'status3' =>'1',
            'status4' =>'1',
            'status5' =>'1',
             'status6' =>'1',
              'status7' =>'1',
                'status8' =>'1',

                'status9' =>'1',
                'status10' =>'1',
                 'status11' =>'1',
                   'status12' =>'1',


                   'status13' =>'1',
                   'status14' =>'1',
                    'status15' =>'1',
                      'status16' =>'1',



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

            'heading5' =>'LOREM',
            'detail5' =>'Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the industry',

            'heading6' =>'LOREM',
            'detail6' =>'Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the industry',

            'heading7' =>'LOREM',
            'detail7' =>'Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the industry',

            'heading8' =>'LOREM',
            'detail8' =>'Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the industry',




            'heading9' =>'LOREM',
            'detail9' =>'Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the industry',

            'heading10' =>'LOREM',
            'detail10' =>'Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the industry',

            'heading11' =>'LOREM',
            'detail11' =>'Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the industry',

            'heading12' =>'LOREM',
            'detail12' =>'Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the industry',




            'heading13' =>'LOREM',
            'detail13' =>'Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the industry',

            'heading14' =>'LOREM',
            'detail14' =>'Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the industry',

            'heading15' =>'LOREM',
            'detail15' =>'Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the industry',

            'heading16' =>'LOREM',
            'detail16' =>'Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the industry',



        ]);


        DB::table('four_rows')->insert([
            'Title' =>'LOREM',
            'Sub_heading' =>'Lorem ipsum',
            'Sub_heading2' =>'Lorem ipsum',
            'Sub_heading3' =>'Lorem ipsum',

            'status1' =>'1',
            'status2' =>'1',
            'status3' =>'1',
            'status4' =>'1',
            'status5' =>'1',
             'status6' =>'1',
              'status7' =>'1',
                'status8' =>'1',

                'status9' =>'1',
                'status10' =>'1',
                 'status11' =>'1',
                   'status12' =>'1',






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

            'heading5' =>'LOREM',
            'detail5' =>'Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the industry',

            'heading6' =>'LOREM',
            'detail6' =>'Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the industry',

            'heading7' =>'LOREM',
            'detail7' =>'Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the industry',

            'heading8' =>'LOREM',
            'detail8' =>'Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the industry',




            'heading9' =>'LOREM',
            'detail9' =>'Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the industry',

            'heading10' =>'LOREM',
            'detail10' =>'Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the industry',

            'heading11' =>'LOREM',
            'detail11' =>'Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the industry',

            'heading12' =>'LOREM',
            'detail12' =>'Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the industry',








        ]);



    }
}
