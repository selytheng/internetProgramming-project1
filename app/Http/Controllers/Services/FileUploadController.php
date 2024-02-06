<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class FileUploadController extends Controller
{
    public static function storeImage($image, $directory = "uploads")
    {
        return "storage/" . $image->store($directory, "public");
    }
    public static function DeleteImage($imageUrl)
    {
        $filePath = 'public/' . str_replace('storage/', '', $imageUrl);
        Storage::delete($filePath);
    }
}
