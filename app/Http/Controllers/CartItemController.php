<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;

class CartItemController extends Controller
{

    /**
     * @param int $product_id
     * @return JsonResponse
     */

    public function addToCart(int $product_id): JsonResponse
    {

        $cartItem = CartItem::create(['product_id' => $product_id]);

        if ($cartItem) {
            return response()->json(['status' => 'ok']);
        }

        return response()->json(['status' => 'error'], 400);

    }

    /**
     * @return View
     */

    public function viewCartItems(): view
    {
        return view('ui.cart.index', ['cartItems' => CartItem::with('Category')->get()]);
    }

    /**
     * @param int $cartItemID
     * @return JsonResponse
     */
    public function removeFromCart(int $cartItemID): JsonResponse
    {
        $cartItem = CartItem::find($cartItemID);

        try {
            $cartItem->delete();
            return response()->json(['status' => 'ok']);
        }catch(\Exception) {
            return response()->json(['status' => 'error'], 400);
        }
    }


}
