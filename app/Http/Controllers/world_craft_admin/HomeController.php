<?php

namespace App\Http\Controllers\world_craft_admin;

use App\Http\Controllers\Controller;
use App\Models\world_craft_admin\HomeModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['page'] = 'home.list';
        $data['tab'] = 'home';
        $data['home_data'] = HomeModel::all();

        return view('admin.pages.worldcraft_cms.home_page', $data);

    }

    public function create()
    {
        $data['page'] = 'home.list';
        $data['tab'] = 'home';
        $data['home_data'] = HomeModel::all();

        return view('admin.pages.worldcraft_cms.home_page_add', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        upload_file($request->file('file'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
