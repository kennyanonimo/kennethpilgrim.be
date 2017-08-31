<?php

namespace App\Http\Controllers;
/* To return to a view. */
use Illuminate\Http\Request;
/* To use the database. */
use DB;
use App\Quotation;
/* To send email. */
use Illuminate\Support\Facades\Mail;




class NotesController extends Controller {




    public function submit(Request $request) {

        $cat = $request->noteCategory;
        $notes = $this->getNotes($cat);

        $notesArray = $this->notesList();
        $notesCategoriesArray = $this->notesCategoriesList();

        $sociallinkArray = $this->sociallinks();

        return view(
            'backend.notes',[
                'page' => 'comments',
                'keywords' => $this->values('keywords'),
                'name' => $this->values('name'),
                'description' => $this->values('description'),
                'url' => $this->values('url'),
                'icon' => $this->values('icon'),
                'image' => $this->values('image'),
                'copyright' => $this->values('copyright'),
                'themecolor' => $this->values('themecolor'),
                'twitter' => $this->values('twitter'),
                'sameas' => $this->values('sameas'),
            ],compact(
                'sociallinkArray',
                'notesArray',
                'notesCategoriesArray',
                'notes'
            )
        );

    }




    protected function values($tag) {
        $value = DB::table('seo')->select('value')->where('tag',$tag)->first();
        return $value->value;
    }    
    protected function socialLinks() {
        $list = DB::table('sociallinks')->get();
        return $list;
    }
    protected function notesList() {
        $list = DB::table('notes')->get();
        return $list;
    }
    protected function notesCategoriesList() {
        $list = DB::table('notes_categories')->get();
        return $list;
    }
    protected function getNotes($cat) {
        $catId = DB::table('notes_categories')->where('name',$cat)->pluck('id');
        $list = DB::table('notes')->where('category_id',$catId)->get();
        return $list;
    }
}