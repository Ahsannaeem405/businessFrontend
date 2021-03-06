<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            stateseeder::class,

        ]);

        DB::table('users')->insert([
            'name' =>'Admin',
            'role' =>'admin',
            'email'=>'admin@gmail.com',
            'password' => Hash::make('12345678'),


        ]);

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


                DB::table('annualllcs')->insert([

                    'heading' =>'What is an annual report?',
                    'detail' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',









                ]);

                DB::table('formals')->insert([

                    'heading' =>'What is an annual report?',
                    'detail' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',









                ]);

                DB::table('annualreports')->insert([
                    'link' =>'#',
                    'heading' =>'What is an annual report?',
                    'detail' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',









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

                DB::table('howtofiles')->insert([

                        'heading' =>'What is an annual report?',
                        'detail' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',









                    ]);
                    DB::table('duedates')->insert([

                        'heading' =>'What is an annual report?',
                        'Sub_heading' =>'What is an annual report?',

                        'detail' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
                        'point1' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
                        'point2' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

                        'point3' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',










                    ]);


                DB::table('helpfile_amendments')->insert([

                    'heading' =>'What is an annual report?',
                    'Sub_heading' =>'What is an annual report?',



                    'detail' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

                    'point1' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

                    'point2' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

                    'point3' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

                    'point4' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',










                ]);


                DB::table('changellcs')->insert([

                    'heading' =>'What is an annual report?',


                    'detail' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',










                ]);
                DB::table('help_lines')->insert([

                    'heading' =>'What is an annual report?',
                    'Sub_heading' =>'What is an annual report?',


                    'detail' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',










                ]);

                    DB::table('bussinesses')->insert([

                        'heading1' =>'What is an annual report?',
                        'heading2' =>'What is an annual report?',


                        'detail1' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
                        'detail2' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

                        'point1' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
                        'point2' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

                        'point3' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
                        'point4' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',











                    ]);

                    DB::table('faq_amendments')->insert([




                        'q1' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

                        'q2' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

                        'q3' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

                        'q4' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

                        'q5' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

                        'a1' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

                        'a2' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

                        'a3' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

                        'a4' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

                        'a5' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',










                    ]);

                    DB::table('desc_dissolutons')->insert([




                        'detail' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',









                    ]);

                    DB::table('usages')->insert([

                        'q1'=>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                        'a1'=>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                        'q2'=>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                        'a2'=>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.',

                                    ]);

                    DB::table('obtains')->insert([

                        'heading'=>'An Lorem Ipsum is simply',
                        'Sub_heading'=>'An Lorem Ipsum is simply',
                        'Sub_heading2'=>'An Lorem Ipsum is simply',
                        'detail'=>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                       'image'=>'1.png',
                       'price'=>'20',
                       'button_name'=>'Go',
                       'button_link'=>'#',





                                    ]);



                    DB::table('federals')->insert([
                        'heading' =>'Lorem Ipsum?',
                        'point_heading' =>'Lorem Ipsum?',

                        'detail'=>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.',

                        'p1'=>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                        'p2'=>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                        'p3'=>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                        'p4'=>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                        'p5'=>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.',

                                    ]);
                    DB::table('employers')->insert([
                        'question' =>'Lorem Ipsum?',
                        'answer'=>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.'

                                    ]);

                    DB::table('tax_descriptions')->insert([
                        'detail' =>'Lorem Ipsum',
                        'video_link'=>' <iframe width="560" height="315" src="https://www.youtube.com/embed/iJhuXzqvzGU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'

                                    ]);





                    DB::table('faq_dissolutions')->insert([
        'heading' =>'Lorem Ipsum',
                        'q1' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

                            'q2' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

                            'q3' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

                            'q4' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

                            'q5' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

                            'a1' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

                            'a2' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

                            'a3' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

                            'a4' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

                            'a5' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',








                    ]);


                    DB::table('helpfile_dissolutions')->insert([

                        'heading' =>'What is an annual report?',
                    'Sub_heading' =>'What is an annual report?',


                    'detail' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',











                    ]);


                    DB::table('step_dissolutions')->insert([

                        'heading1' =>'What is an annual report?',
                        'detail1' =>'What is an annual report?',
                        'heading2' =>'What is an annual report?',
                        'detail2' =>'What is an annual report?',
                         'heading3' =>'What is an annual report?',
                        'detail3' =>'What is an annual report?',









                    ]);


                    DB::table('closellcs')->insert([

                        'heading' =>'What is an annual report?',
                        'detail' =>'What is an annual report?',

                        'video_heading' =>'What is an annual report?',


                        'video_link' =>'<iframe width="560" height="315" src="https://www.youtube.com/embed/yIj2lu8Rv0M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',









                    ]);

                    DB::table('faq_taxes')->insert([


                        'heading' =>'Lorem Ipsum',
                                        'q1' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

                                            'q2' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

                                            'q3' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

                                            'q4' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

                                            'q5' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

                                            'a1' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

                                            'a2' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

                                            'a3' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

                                            'a4' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

                                            'a5' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',





                                    ]);


        DB::table('entities')->insert([


            'heading' =>'Lorem Ipsum',
                            'image1' =>'1.png',
                            'image2' =>'2.png',
                            'image3' =>'3.png',
                            'image4' =>'4.png',
                            'title1' =>'LLC',
                            'title2' =>'LLC',
                            'title3' =>'LLC',
                            'title4' =>'LLC',
                            'link1' =>'#',
                            'link2' =>'#',
                            'link3' =>'#',
                            'link4' =>'#',
                            'Button_name'=>'Get Started',
                            'Button_link'=>'#',











                        ]);

        DB::table('goods')->insert([


            'heading1' => 'Lorem Ipsum',
            'heading2' => 'Lorem Ipsum',
            'heading3' => 'Lorem Ipsum',

            'certificate1' => 'Lorem Ipsum',
            'certificate2' => 'Lorem Ipsum',
            'certificate3' => 'Lorem Ipsum',
            'detail1' => 'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'detail2' => 'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'detail3' => 'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.',













        ]);


        DB::table('reasons')->insert([


                'heading1' => 'Lorem Ipsum',
                'heading2' => 'Lorem Ipsum',



                'detail1' => 'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'detail2' => 'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.',

                'point1' => 'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'point2' => 'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'point3' => 'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'point4' => 'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'point5' => 'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'point6' => 'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'point7' => 'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'point8' => 'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.',













            ]);
        DB::table('helpline_certificates')->insert([


            'heading' => 'Lorem Ipsum',
            'Sub_heading' => 'Lorem Ipsum',



            'detail' => 'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'link_text' => 'An Lorem Ipsum is simply dummy text of the printing ',
            'link' => '#',












        ]);


        DB::table('faq_certificates')->insert([


            'heading' => 'Lorem Ipsum',
            'q1' => 'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

            'q2' => 'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

            'q3' => 'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

            'q4' => 'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

            'q5' => 'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

            'a1' => 'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

            'a2' => 'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

            'a3' => 'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

            'a4' => 'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

            'a5' => 'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',















        ]);


                    DB::table('formations')->insert([

                        'heading' =>'What is an annual report?',
                        'detail' =>'What is an annual report?',

                        'image' =>'girl.png',









                    ]);



                    DB::table('annual_sliders')->insert([

                        'image1' =>'1.jpg',
                        'image2' =>'1.jpg',
                        'image3' =>'1.jpg',
                        'image4' =>'1.jpg',

                        'heading' =>' Lorem Ipsum
                        is simply dummy text',
                        'detail' =>'    Lorem Ipsum is simply dummy text
                        Lorem Ipsum has been the industry standard dummy text ever since the 1500s,',

                        'link1' =>'#',
                        'link2' =>'#',
                        'link3' =>'#',
                        'link4' =>'#',

                        'link_text1' =>'#',
                        'link_text2' =>'#',
                        'link_text3' =>'#',
                        'link_text4' =>'#',


















                   ]);




                    DB::table('launches')->insert([

                        'image' =>'1.png',
                        'heading' =>' Lorem Ipsum
                        is simply dummy text',
                        'detail' =>'    Lorem Ipsum is simply dummy text
                        Lorem Ipsum has been the industry standard dummy text ever since the 1500s,',
                        'button_name' =>'Get Started',
                        'button_link' =>'#',















                   ]);






                    DB::table('faq_whychooses')->insert([

                        'heading' =>'Lorem Ipsum',
                        'q1' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

                            'q2' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

                            'q3' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

                            'q4' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',


                            'a1' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

                            'a2' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

                            'a3' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',

                            'a4' =>'An Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',














                    ]);

                    DB::table('legals')->insert([

                        'heading' =>'Legal Disclaimer',
                        'detail' =>"A legal disclaimer is a statement intended to protect the services, information, and property (both physical and intellectual) of your business or organization. It limits the legal liability of the entity presenting the disclaimer and also protects the entity's legal rights in its work.",











                    ]);


                    DB::table('copies')->insert([

                        'heading' =>'?? 2022. Browntech.com All Rights Reserved.',









                    ]);



    }
}
