<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Services\FileUploadController;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;
use PHPOpenSourceSaver\JWTAuth\Contracts\Providers\Storage;

class ProductController extends Controller
{
    // create product
    public function create(Request $request)
    {

        try {
            $validatedData      = $request->validate ([
                'name'          =>  'required|string',
                'size'          =>  'required|string',
                'category_id'   =>  'required|integer|exists:categories,id', 
                'pricing'       =>  'required|numeric',
                'image'         =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048',
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

    // view product
    public function getAll()
    {
        $products = Product::paginate(8);
        return response()->json($products, Response::HTTP_OK);
    }

    // update product
    public function update(Request $request, $id){
        try {
            $product            = $request->validate ([
                'name'          => 'required|string',
                'size'          => 'required|string',
                'category_id'   => 'required|integer|exists:categories,id', 
                'pricing'       => 'required|numeric', 
                'image'         => 'required|image|mimes:jpeg,png,jpg,gif,|max:2048'
            ]);

            $productUpdated = Product::find($id);
            if(!$productUpdated){
                return response()->json(['message' => 'Product not found.'], Response::HTTP_NOT_FOUND);
            }
            
           // Handle Image Upload
            if ($request->hasFile('image')) {
                $image              = $request->file('image');
                $imageName          = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('storage/uploads/products'), $imageName);
                $product['image']   = 'storage/uploads/products/' . $imageName;
            }
            
            $productUpdated->update($product);
            return response()->json($productUpdated, Response::HTTP_CREATED);
        } catch (ValidationException $e) {
            return $this->handleValidationException($e);
        } catch (\Exception $e) {
            return $this->handleUnexpectedException($e);
        }
    }

    // delete product
    public function delete(Request $request, $id){
        try {
            $productDeleted = Product::find($id);
            if($productDeleted){
                return response()->json(['message' => 'Product not found.'], Response::HTTP_NOT_FOUND);
            }
            
            // Delete associated image using Storage facade
            // Storage::delete($productDeleted->image);

            $productDeleted->delete();
            return response()->json(['message' => 'Product deleted successfully.'], Response::HTTP_CREATED);
        } catch (ValidationException $e) {
            return $this->handleValidationException($e);
        } catch (\Exception $e) {
            return $this->handleUnexpectedException($e);
        }
    }

    // to handle error from user input
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
