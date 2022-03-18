<?php
namespace App\Http\Traits;

trait ImageTrait
{
    private function uploadImage($file,$path)
    {
        $ext = explode('/',$file->getMimeType());
        $ext = end($ext);
        $file_name = time() . "_{$path}.$ext";
        $file->move(public_path("images/{$path}"),$file_name);
        return $file_name;
    }
}