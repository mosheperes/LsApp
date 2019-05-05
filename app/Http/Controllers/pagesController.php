<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index() {
        $title = 'Welcome to laravel 2';
        return view ('pages.index', compact('title'));
    }
    public function about() {
        $title = 'About me!!!';
        return view ('pages.about', compact('title'));
    }

    public function services() {
        $data = array (
            'title'=>'My Amazing Services',
            'services'=> ['web design', 'Programming', 'SEO' , 'Bored!' ]
        );
        //$title = 'My Amazing Services!!';
        return view ('pages.services')->with($data);
    }
}
