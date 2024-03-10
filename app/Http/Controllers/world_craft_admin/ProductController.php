<?php

namespace App\Http\Controllers\world_craft_admin;

use App\Http\Controllers\Controller;
use App\Models\world_craft_admin\HomeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $data['page'] = 'world_craft_admin.our_products';
        $data['tab'] = 'home';
        $data['home_data'] =  \DB::table('our_products')->where('status', '0')->get();
        return view('admin.pages.worldcraft_cms.our_products', $data);

    }

    public function add_products(Request $request){
        // dd(Storage::disk('local')->put('example.txt', 'images'));
        // dd($request->all());

        $file = $request->file('product_files');

        $fileName = $file->getClientOriginalName();
        $filePath = $file->store('uploads', 'public');
        $fileType = $file->getClientOriginalExtension();
        $fileSizeTmp = $file->getSize();
        $fileSize = $fileSizeTmp > 0 ? round($fileSizeTmp / 1024, 2) . ' KB' : '0 KB';


        $row = [
            "product_name" => $request->product_name,
            "product_description" => $request->product_des,
            "product_docs" => $request->product_doc,
            "product_price" => $request->product_price
        ];
        $last_id = \DB::table('our_products')->insertGetId($row);

        $image_row = [
            "product_id" => $last_id,
            "file_url" => $filePath,
            "file_size" => $fileSize,
            "file_type" => $fileType
        ];
        \DB::table('our_products_files')->insert($image_row);

        $data['page'] = 'world_craft_admin.our_products';
        $data['tab'] = 'home';
        $data['home_data'] =  \DB::table('our_products')->where('status', '0')->get();

        return view('admin.pages.worldcraft_cms.our_products', $data);

    }
}