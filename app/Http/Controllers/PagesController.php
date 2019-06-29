<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home ()
    {
        return view('welcome', [
                'foo' => 'Page'
            ]);
    }

    public function contact()
    {
        return view('contact', [
            'offices' => [
                'CBD Office',
                'Liaison Office',
                'Chancery Office',
                'Westlands Office'
            ]]);
    }

    public function about()
    {
        return view('about');
    }
}
