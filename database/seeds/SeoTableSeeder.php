<?php

use Illuminate\Database\Seeder;

class SeoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seo')->insert(['tag'=>'keywords','value'=>'kenneth,pilgrim,kenneth pilgrim,belgium,full-stack,full,stack,developer,php,javascript,back,end,back-end,laravel,jquery,belgie,vlaanderen,mechelen,antwerpen',]);
        DB::table('seo')->insert(['tag'=>'name','value'=>'kenneth pilgrim',]);
        DB::table('seo')->insert(['tag'=>'description','value'=>'I\'m a full-stack developer from Belgium.',]);
        DB::table('seo')->insert(['tag'=>'url','value'=>'https://kennethpilgrim.be',]);
        DB::table('seo')->insert(['tag'=>'icon','value'=>'/img/k.png',]);
        DB::table('seo')->insert(['tag'=>'image','value'=>'/img/kenneth-pilgrim.png',]);
        DB::table('seo')->insert(['tag'=>'copyright','value'=>'copyright &copy;2017 kenneth pilgrim.',]);
        DB::table('seo')->insert(['tag'=>'themecolor','value'=>'RGB(140,60,25,1)',]);
        DB::table('seo')->insert(['tag'=>'twitter','value'=>'@kenneth_pilgrim',]);
        DB::table('seo')->insert(['tag'=>'sameas','value'=>'"https://www.linkedin.com/in/kennethpilgrim-eu","https://plus.google.com/u/0/111340358723834568911","https://www.facebook.com/kennethpilgrim.eu","https://www.instagram.com/kennethpilgrim/","https://www.pinterest.com/kenneth_pilgrim/","https://twitter.com/kenneth_pilgrim","https://gitlab.com/kennethpilgrim","https://github.com/rootland"',]);

    }
}
