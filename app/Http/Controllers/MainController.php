<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $data['page'] = 'index';
        return view('pages.first', $data);
    }
    public function about()
    {
        $data['page'] = 'about';
        return view('pages.about', $data);
    }
    public function services()
    {
        $data['page'] = 'services';
        return view('pages.services', $data);
    }
    public function team()
    {
        $data['page'] = 'team';

        return view('pages.team', $data);
    }
    public function blog()
    {
        $data['page'] = 'blog';

        return view('pages.blog', $data);
    }
    public function contact_us()
    {
        $data['page'] = 'contact';

        return view('pages.contact', $data);
    }
}
