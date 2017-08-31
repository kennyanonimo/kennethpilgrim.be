<?php

use Illuminate\Database\Seeder;

class NotesCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notes_categories')->insert(['name'=>'todo']);
        DB::table('notes_categories')->insert(['name'=>'to bookmark','underneath'=>'todo']);
        DB::table('notes_categories')->insert(['name'=>'to do','underneath'=>'todo']);
        DB::table('notes_categories')->insert(['name'=>'to document','underneath'=>'todo']);
        DB::table('notes_categories')->insert(['name'=>'to read','underneath'=>'todo']);
        DB::table('notes_categories')->insert(['name'=>'to study','underneath'=>'todo']);
        DB::table('notes_categories')->insert(['name'=>'snippets']);
        DB::table('notes_categories')->insert(['name'=>'php','underneath'=>'snippets']);
        DB::table('notes_categories')->insert(['name'=>'js','underneath'=>'snippets']);
        DB::table('notes_categories')->insert(['name'=>'css','underneath'=>'snippets']);
        DB::table('notes_categories')->insert(['name'=>'bash','underneath'=>'snippets']);
        DB::table('notes_categories')->insert(['name'=>'perl','underneath'=>'snippets']);
        DB::table('notes_categories')->insert(['name'=>'powershell','underneath'=>'snippets']);
        DB::table('notes_categories')->insert(['name'=>'c','underneath'=>'snippets']);
        DB::table('notes_categories')->insert(['name'=>'c#','underneath'=>'snippets']);
    }
}
