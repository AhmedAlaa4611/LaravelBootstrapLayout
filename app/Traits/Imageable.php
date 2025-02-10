<?php

namespace App\Traits;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

trait Imageable
{
    public function uploadImage(string $folder): string
    {
        $image = request()->file('image');

        $image_name = Str::random(10).'.'.$image->extension();

        $relative_path = 'uploads/images/'.$folder;

        $image->move(public_path($relative_path), $image_name);

        return $relative_path.'/'.$image_name;
    }

    public function deleteImage(string $image_path): void
    {
        $relative_path = public_path($image_path);

        if (File::exists($relative_path)) {
            File::delete($relative_path);
        } else {
            info('can not find this image: '.$image_path);
        }
    }
}
