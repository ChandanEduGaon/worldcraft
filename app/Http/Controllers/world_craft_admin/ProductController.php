<?php

namespace App\Http\Controllers\world_craft_admin;

use App\Http\Controllers\Controller;
use App\Models\world_craft_admin\HomeModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['page'] = 'world_craft_admin.our_products';
        $data['tab'] = 'home';
        $data['home_data'] =  \DB::table('our_products')->where('status', '0')->get();
        return view('admin.pages.worldcraft_cms.our_products', $data);

    }
}