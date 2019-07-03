<?php

namespace App\Http\Controllers;

use App\Offices;
use Illuminate\Http\Request;
use App\Projects;
use App\Contacts;

class PagesController extends Controller
{
    public function home()
    {
        return view('welcome', [
                'foo' => 'Page',
            ]);
    }

    public function contact()
    {
        $offices= Offices::all();
        return view('contact', compact('offices'));
    }

    public function about()
    {
        return view('about');
    }

    public function media()
    {
        return view('media');
    }

    public function foundation()
    {
        return view('foundation', [
            'some' => 'Page'
        ]);
    }
}
