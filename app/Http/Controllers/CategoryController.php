<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class CategoryController extends Controller
{
    //create category
    public function create(Request $request){
        try {
            $item = $request->validate([
                'name'          => ['required', 'string', Rule::unique('categories')],
                'description'   => 'nullable|string',
            ]);
            Category::create($item);
            return response()->json($item, Response::HTTP_CREATED);
        } catch (ValidationException $e) {
            return $this->handleValidationException($e);
        } catch (\Exception $e) {
            return $this->handleUnexpectedException($e);
        }
    }

    // view all category
    public function getAll()
    {
        $categories = Category::all();
        return response()->json($categories, Response::HTTP_OK);
    }

    //update  category
    public function update(Request $request, $id){
        try {
            $item = $request->validate([
                'name'          => ['nullable', 'string', Rule::unique('categories')],
                'description'   => 'nullable|string',
            ]);
            $categoryUpdated = Category::find($id);
            if (!$categoryUpdated){
                return response()->json(['message' => 'not found'], Response::HTTP_NOT_FOUND);
            }
            $categoryUpdated->update($item);
            return response()->json($categoryUpdated, Response::HTTP_CREATED);

        } catch (ValidationException $e) {
            return $this->handleValidationException($e);
        } catch (\Exception $e) {
            return $this->handleUnexpectedException($e);
        }
    }

    // delete category
    public function delete($id){
        try {
            $categoryDeleted = Category::find($id);
            if (!$categoryDeleted){
                return response()->json(['message' => 'not found'], Response::HTTP_NOT_FOUND);
            }
            $categoryDeleted->delete();
            return response()->json(['message' => 'Deleted successfully.'], Response::HTTP_CREATED);

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
            'message'   => 'Validation Error',
            'errors'    => $e->errors(),
        ], Response::HTTP_BAD_REQUEST);
    }

    protected function handleUnexpectedException(\Exception $e)
    {
        return response()->json([
            'message' => 'Server Error',
        ], Response::HTTP_INTERNAL_SERVER_ERROR);
    }
}
