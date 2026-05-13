<?php

namespace App\utils;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Self_;

class ImageManger
{


    public function uploadSingleImage($path,$image,$disk)
    {
        $file_name = self::generateImageName($image);
        self::storeImageInLocal($image, $path, $file_name, $disk);
        return $file_name;
    }

    public static function uploadImages($request, $post = null, $user = null)
    {
        if ($request->hasFile('images')) {
            foreach ($request->images as $image) {
                $file = Self::generateImageName($image);
                $path = $path = self::storeImageInLocal($image, 'posts', $file);;
                $post->images()->create([
                    'path' => $path,
                ]);
            }
        }
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            if (File::exists(public_path($user->image))) {
                File::delete(public_path($user->image));
            }
            $file = Self::generateImageName($image);
            $path = self::storeImageInLocal($image, 'users', $file);
            $user->update(['image' => $path]);
        }

    }


    public static function deleteImages($post)
    {

        if ($post->images->count() > 0) {
            foreach ($post->images as $image) {
                if (File::exists(public_path($image->path))) {
                    File::delete(public_path($image->path));
                }
            }
        }
    }

    public static function generateImageName($image)
    {

        $file = str::uuid() . '-' . time() . '.' . $image->getClientOriginalExtension();
        return $file;

    }

    public static function storeImageInLocal($image, $path, $file_name,$disk)
    {

        $path = $image->storeAs($path, $file_name, ['disk' => $disk]);
        return $path;


    }

    public static function deleteImagesFromLocal($image_path)
    {


        if (File::exists(public_path($image_path))) {
            File::delete(public_path($image_path));
        }


    }


}
