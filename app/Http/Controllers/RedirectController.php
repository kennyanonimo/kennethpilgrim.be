<?php

namespace App\Http\Controllers;
/* To return to a view. */
use Illuminate\Http\Request;
/* To work with databases. */
use DB;
use App\Quotation;

/* TODO: get view from DB */

class RedirectController extends Controller {

    public function __construct() {
        //$sociallinkArray = sociallinks();
    }

    public function home() {
        $sociallinkArray = $this->sociallinks();
        return view(
            'pages.home',[
                'page' => 'home',
                'keywords' => $this->values('keywords'),
                'name' => $this->values('name'),
                'description' => $this->values('description'),
                'url' => $this->values('url'),
                'icon' => $this->values('icon'),
                'image' => $this->values('image'),
                'copyright' => $this->values('copyright'),
                'themecolor' => $this->values('themecolor'),
                'twitter' => $this->values('twitter'),
                'sameas' => $this->values('sameas')
            ],compact(
                'sociallinkArray'
            )
        );
    }


    public function skills() {
        $sociallinkArray = $this->sociallinks();
        $devList = $this->skillLists('Development');
        $cmsList = $this->skillLists('CMS');
        $devopsList = $this->skillLists('DevOps');
        $osList = $this->skillLists('OS');
        $linuxList = $this->skillLists('Linux');
        $windowsList = $this->skillLists('Windows');
        return View(
            'pages.skills',[
                'page' => 'skills',
                'keywords' => $this->values('keywords'),
                'name' => $this->values('name'),
                'description' => $this->values('description'),
                'url' => $this->values('url'),
                'icon' => $this->values('icon'),
                'image' => $this->values('image'),
                'copyright' => $this->values('copyright'),
                'themecolor' => $this->values('themecolor'),
                'twitter' => $this->values('twitter'),
                'sameas' => $this->values('sameas')
            ],compact(
                'devList',
                'cmsList',
                'devopsList',
                'osList',
                'linuxList',
                'windowsList',
                'sociallinkArray'
            )
        );
    }


    public function contact() {
        $sociallinkArray = $this->sociallinks();
        return view(
            'pages.contact',[
                'page' => 'contact',
                'messages' => array(''),
                'keywords' => $this->values('keywords'),
                'name' => $this->values('name'),
                'description' => $this->values('description'),
                'url' => $this->values('url'),
                'icon' => $this->values('icon'),
                'image' => $this->values('image'),
                'copyright' => $this->values('copyright'),
                'themecolor' => $this->values('themecolor'),
                'twitter' => $this->values('twitter'),
                'sameas' => $this->values('sameas')
            ],compact(
                'sociallinkArray'
            )
        );
    }


    public function portfolio() {
        $sociallinkArray = $this->sociallinks();
        return view(
            'pages.portfolio',[
                'page' => 'portfolio',
                'keywords' => $this->values('keywords'),
                'name' => $this->values('name'),
                'description' => $this->values('description'),
                'url' => $this->values('url'),
                'icon' => $this->values('icon'),
                'image' => $this->values('image'),
                'copyright' => $this->values('copyright'),
                'themecolor' => $this->values('themecolor'),
                'twitter' => $this->values('twitter'),
                'sameas' => $this->values('sameas')
            ],compact(
                'sociallinkArray'
            )
        );
    }


    public function mit() {
        $sociallinkArray = $this->sociallinks();
        return view(
            'legal.mit',[
                'page' => 'mit',
                'keywords' => $this->values('keywords'),
                'name' => $this->values('name'),
                'description' => $this->values('description'),
                'url' => $this->values('url'),
                'icon' => $this->values('icon'),
                'image' => $this->values('image'),
                'copyright' => $this->values('copyright'),
                'themecolor' => $this->values('themecolor'),
                'twitter' => $this->values('twitter'),
                'sameas' => $this->values('sameas')
            ],compact(
                'sociallinkArray'
            )
        );
    }


    public function privacy() {
        $sociallinkArray = $this->sociallinks();
        return view(
            'legal.privacy',[
                'page' => 'privacy',
                'keywords' => $this->values('keywords'),
                'name' => $this->values('name'),
                'description' => $this->values('description'),
                'url' => $this->values('url'),
                'icon' => $this->values('icon'),
                'image' => $this->values('image'),
                'copyright' => $this->values('copyright'),
                'themecolor' => $this->values('themecolor'),
                'twitter' => $this->values('twitter'),
                'sameas' => $this->values('sameas')
            ],compact(
                'sociallinkArray'
            )
        );
    }


    public function terms() {
        $sociallinkArray = $this->sociallinks();
        return view(
            'legal.terms',[
                'page' => 'terms',
                'keywords' => $this->values('keywords'),
                'name' => $this->values('name'),
                'description' => $this->values('description'),
                'url' => $this->values('url'),
                'icon' => $this->values('icon'),
                'image' => $this->values('image'),
                'copyright' => $this->values('copyright'),
                'themecolor' => $this->values('themecolor'),
                'twitter' => $this->values('twitter'),
                'sameas' => $this->values('sameas')
            ],
            compact(
                'sociallinkArray'
            )
        );
    }

    public function test() {
        return view(
            'mail_templates.newcomment',[
                'title' => 'Mr.',
                'firstName' => 'Kenneth',
                'lastName' => 'Pilgrim',
                'email' => 'kenneth@kennethpilgrim.eu',
                'phone' => '+3215606069',
                'subject' => 'Test Comment',
                'comment' => 'Dit is de text van het testcomment!',
            ]
        );
    }

    public function dashboard() {
        $sociallinkArray = $this->sociallinks();
        return view(
            'backend.dashboard',[
                'page' => 'dashboard',
                'keywords' => $this->values('keywords'),
                'name' => $this->values('name'),
                'description' => $this->values('description'),
                'url' => $this->values('url'),
                'icon' => $this->values('icon'),
                'image' => $this->values('image'),
                'copyright' => $this->values('copyright'),
                'themecolor' => $this->values('themecolor'),
                'twitter' => $this->values('twitter'),
                'sameas' => $this->values('sameas')
            ],compact(
                'sociallinkArray'
            )
        );
    }

    public function comments() {
        $sociallinkArray = $this->sociallinks();
        $commentArray = $this->commentList();
        return view(
            'backend.comments',[
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
                'sameas' => $this->values('sameas')
            ],compact(
                'commentArray',
                'sociallinkArray'
            )
        );
    }
    public function notes() {
        $sociallinkArray = $this->sociallinks();
        $notesArray = $this->notesList();
        $notesCategoriesArray = $this->notesCategoriesList();
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
                'sameas' => $this->values('sameas')
            ],compact(
                'sociallinkArray',
                'notesArray',
                'notesCategoriesArray'
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
    protected function skillLists($skill) {
        $list = DB::table('skills')->where('group',$skill)->get();
        return $list;
    }
    protected function commentList() {
        $list = DB::table('comments')->get();
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
    
}