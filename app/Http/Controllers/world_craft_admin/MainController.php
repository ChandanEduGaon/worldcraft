<?php

namespace App\Http\Controllers\world_craft_admin;

use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index(){
        die('ok');
    }
    function admin()
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
