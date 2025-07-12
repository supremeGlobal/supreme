<?php
namespace App\Traits;

use Illuminate\Support\Facades\File;

trait HandlesImageUpload
{
    public function uploadImage($image, $folder = 'general')
    {
		$date  = date('Y-m-d');
        $path = "images/$folder/$date";

        // Ensure the directory exists
        if (!File::exists(public_path($path))) {
            File::makeDirectory(public_path($path), 0755, true);
        }

        $filename = time(). '_' .uniqid(). '.' .$image->getClientOriginalExtension();
        $image->move(public_path($path), $filename);
		
        return "$path/$filename";
    }
}