<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $data['page'] = 'index';
        $data['tab'] = '';

        return view('pages.first', $data);
    }
    public function about()
    {
        $data['page'] = 'about';
        $data['tab'] = '';

        return view('pages.about', $data);
    }
    public function services()
    {
        $data['page'] = 'services';
        $data['tab'] = '';

        return view('pages.services', $data);
    }
    public function team()
    {
        $data['page'] = 'team';
        $data['tab'] = '';


        return view('pages.team', $data);
    }
    public function blog()
    {
        $data['page'] = 'blog';
        $data['tab'] = '';


        return view('pages.blog', $data);
    }
    public function contact_us()
    {
        $data['page'] = 'contact';
        $data['tab'] = '';


        return view('pages.contact', $data);
    }
    public function our_products()
    {
        $data['page'] = 'contact';
        $data['tab'] = '';
        $data['home_data'] =  \DB::table('our_products')->where('status', '0')->get();
        // dd($data);
        return view('pages.our_products', $data);
    }
    public function admin()
    {
        $data['page'] = 'admin.dashboard';
        $data['tab'] = '';


        return view('admin.pages.dashboard', $data);
    }
    public function users()
    {
        $data['page'] = 'admin.users';
        $data['tab'] = '';


        return view('admin.pages.users', $data);
    }
    public function cms_header()
    {
        $data['page'] = 'admin.cms_header';
        $data['tab'] = 'cms_worldcraft';

        return view('admin.pages.worldcraft_cms.header', $data);
    }
}
