<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Services\BaseCrudController;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class CartController extends BaseCrudController
{
    protected $model = Cart::class;
    public function getAll(Request $request)
    {
        try {
            $perPage = $request->query('per_page', 10);
            $items = $this->model::paginate($perPage);

            return response()->json($items, Response::HTTP_OK);
        } catch (ValidationException $e) {
            return $this->handleValidationException($e);
        } catch (\Exception $e) {
            return $this->handleUnexpectedException($e);
        }
    }
    public function getByUser()
    {
        try {
            $userId = auth()->user()->id;

            $items = Cart::join('products', 'carts.product_id', '=', 'products.id')
                ->where('carts.user_id', $userId)
                ->select('products.id as product_id', 'products.name', 'products.pricing', 'carts.id as cart_id', 'products.image as image', 'carts.quantity')
                ->get();

            return response()->json($items, Response::HTTP_OK);
        } catch (ValidationException $e) {
            return $this->handleValidationException($e);
        } catch (\Exception $e) {
            return $this->handleUnexpectedException($e);
        }
    }
    public function create(Request $request)
    {
        try {
            $request->validate([
                'product_id' => 'required|integer',
                'quantity' => 'required|integer|min:1', // Validating quantity
            ]);
            
            $existingCartItem = $this->model::where('user_id', auth()->user()->id)
                ->where('product_id', $request->product_id)
                ->first();

            if ($existingCartItem) {
                // If the item exists, update the quantity
                $existingCartItem->quantity += $request->quantity;
                $existingCartItem->save();

                return response()->json($existingCartItem, Response::HTTP_OK);
            }

            // If the item does not exist, create a new cart item
            $data = [
                'user_id' => auth()->user()->id,
                'product_id' => $request->product_id,
                'quantity' => $request->quantity,
            ];
            $item = $this->model::create($data);
            return response()->json($item, Response::HTTP_CREATED);
        } catch (ValidationException $e) {
            return $this->handleValidationException($e);
        } catch (\Exception $e) {
            return $this->handleUnexpectedException($e);
        }
    }

    public function delete($id)
    {
        try {
            $userId = auth()->user()->id;
            $productId = $id;

            $cartItem = Cart::where('user_id', $userId)
                            ->where('product_id', $productId)
                            ->first();
            if (!$cartItem) {
                return response()->json(['message' => 'Cart item not found'], Response::HTTP_NOT_FOUND);
            }

            $cartItem->delete();
        } catch (ValidationException $e) {
            return $this->handleValidationException($e);
        } catch (\Exception $e) {
            return $this->handleUnexpectedException($e);
        }
    }
    public function update(Request $request, $id)
    {
        try {
            $userId = auth()->user()->id;
            $productId = $id;

            // Validate request data
            $request->validate([
                'quantity' => 'required|integer|min:1', // Validate quantity
            ]);

            // Find the cart item to update
            $cartItem = Cart::where('user_id', $userId)
                            ->where('product_id', $productId)
                            ->first();

            // Check if the cart item exists
            if (!$cartItem) {
                return response()->json(['message' => 'Cart item not found'], Response::HTTP_NOT_FOUND);
            }

            // Update the quantity of the cart item
            $cartItem->quantity = $request->quantity;
            $cartItem->save();

            // You might want to return the updated cart item here
            return response()->json($cartItem, Response::HTTP_OK);
        } catch (ValidationException $e) {
            return $this->handleValidationException($e);
        } catch (\Exception $e) {
            return $this->handleUnexpectedException($e);
        }
    }



}