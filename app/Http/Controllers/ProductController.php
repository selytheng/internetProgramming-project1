<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Services\FileUploadController;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class ProductController extends Controller
{
    public function create(Request $request)
    {

        try {
            $validatedData = $request->validate([
                'name' => 'required|string',
                'size' => 'required|string',
                'category_id' => 'required|integer|exists:categories,id', // Validate category_id existence
                'pricing' => 'required|numeric', // Validate pricing as numeric
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
            $image = FileUploadController::storeImage($request->file('image'), 'uploads/products');
            $validatedData["image"] = $image;
            Product::create($validatedData);
    
            return response()->json(['message' => 'Product created successfully']);

        } catch (ValidationException $e) {
            return $this->handleValidationException($e);
        } catch (\Exception $e) {
            return $this->handleUnexpectedException($e);
        }
    }

    public function getAll()
    {
        $products = Product::paginate(8);
        return response()->json($products, Response::HTTP_OK);
    }


    //:::::::::::::::::::::>
    protected function handleValidationException(ValidationException $e)
    {
        return response()->json([
            'message' => 'Validation Error',
            'errors' => $e->errors(),
        ], Response::HTTP_BAD_REQUEST);
    }

    protected function handleUnexpectedException(\Exception $e)
    {
        return response()->json([
            'message' => 'Server Error',
        ], Response::HTTP_INTERNAL_SERVER_ERROR);
    }
}
