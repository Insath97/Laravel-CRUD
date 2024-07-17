<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

trait FileUploadTrait
{
    public function handleFile(Request $request, string $image_name, string $oldpath = null, ?string $dir = 'uploads'): ?string
    {
        /* check request has file */
        if (!$request->has($image_name)) {
            return null;
        }

        /* delete existing image if have */
        if ($oldpath && File::exists(public_path($oldpath))) {
            File::delete(public_path($oldpath));
        }

        $file = $request->file($image_name);
        $extention = $file->getClientOriginalExtension();
        $file_name = Str::random(30) . '.' . $extention;
        $file_new_path = $dir . '/' . $file_name;

        $file->move(public_path($dir), $file_name);

        return $file_new_path;
    }

    /* Delete image */
    public function deleteFile(string $path)
    {
        if ($path && File::exists(public_path($path))) {
            File::delete(public_path($path));
        }
    }
}
