<?php

namespace App\Helpers;

use Illuminate\Http\UploadedFile;

class Image{

    public static function upload(?UploadedFile $image, string $folder)
    {
        $imagePath = $image->store($folder, 'public');

        return $imagePath;
    }

    public static function get(string $path): string
    {
        return asset("storage/{$path}");
    }
}
