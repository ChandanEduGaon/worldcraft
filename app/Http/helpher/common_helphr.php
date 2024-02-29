<?php

use Illuminate\Support\Str;

if(!function_exists('upload_file')){
    function upload_file($file){
        $main_file_url = '/home/worldcra/storage.worldcraft.in/world_craft/';

        $new_file_name = Str::random(6) . now()->timestamp.$file->getClientOriginalName();

//        print_r($file);
//        die();
        $destinationUrl = $main_file_url.$new_file_name;

        if (!file_exists($destinationUrl)) {

            $fileContents = '';

            // Upload the file contents to the destination URL
            $result = file_put_contents($destinationUrl, file_get_contents($file->getRealPath()));

            if ($result !== false) {
                // File uploaded successfully
                echo "File uploaded successfully.";
            } else {
                // Error uploading file
                echo "Failed to upload file.";
            }
        } else {
            // File does not exist locally
            echo "File does not exist.";
        }

    }
}
