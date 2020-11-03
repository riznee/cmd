<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('categories')->insert([
            'slug' => 'products-reviews',
            'title' => 'Product Reviews',
            'description' => 'personal opinion and so expressing this on your own platform allows your readers to gain an insight into what you may personally think of a product.',
            'color' => 'is-primary',
        ]);

        DB::table('categories')->insert([
            'slug' => 'how-to-guides',
            'title' => 'How to Guide',
            'description' => 'These can range from topic to topic and can be simple or complicated.',
            'color' => 'is-warning',
        ]);

        DB::table('categories')->insert([
            'slug' => 'q-and-a',
            'title' => 'Q&A',
            'description' => 'Question and answer sessions can be as formal and informal',
            'color' => 'is-info',
        ]);
        
        DB::table('categories')->insert([
            'slug' => 'follow-ups',
            'title' => 'Follow up to Q&A',
            'description' => 'This could be insightful to those who missed the live event or still want more detail.',
            'color' => 'is-link',
        ]);

        DB::table('categories')->insert([
            'slug' => 'interviews',
            'title' => 'Interviews ',
            'description' => 'Similar to a Q&A session, however this is done one on one with the interviewee, asking a particular series of questions. ',
            'color' => 'is-link',
        ]);
        
        DB::table('categories')->insert([
            'slug' => 'research-and-data',
            'title' => 'Research & Data ',
            'description' => 'Does what is says on the tin; a whole load of statistics that might aid your readers in the future.',
            'color' => 'is-link',
        ]);

        DB::table('categories')->insert([
            'slug' => 'public-service-announcements',
            'title' => 'Public Service Announcements ',
            'description' => 'Does what is says on the tin; a whole load of statistics that might aid your readers in the future.',
            'color' => 'is-link',
        ]);

        DB::table('categories')->insert([
            'slug' => 'disclaimers',
            'title' => 'Disclaimers',
            'description' => 'This will also be where copyright topics will be spoken about.',
            'color' => 'is-link',
        ]);

        DB::table('categories')->insert([
            'slug' => 'press-releases',
            'title' => 'Press releases',
            'description' => 'Announcements of new products and services can be a great way to expand brand awareness on the web',
            'color' => 'is-link',
        ]);

        DB::table('categories')->insert([
            'slug' => 'white-papers',
            'title' => 'White papers',
            'description' => 'An authoritative report or guide that informs readers concisely about a complex issue and presents the issuing body is philosophy on the matter.',
            'color' => 'is-link',
        ]);

    }
}
