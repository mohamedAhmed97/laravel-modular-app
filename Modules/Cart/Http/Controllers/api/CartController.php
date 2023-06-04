<?php

namespace Modules\Cart\Http\Controllers\api;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Cart\Entities\Cart;
use Modules\Cart\Http\Requests\CartRequest;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $carts = Cart::with('customer', 'product')->get();
        return response()->json($carts);
    }

    public function store(CartRequest $request)
    {
        $cart = Cart::create($request);
        return response()->json($cart, 201);
    }

    public function show(Request $request, $id)
    {
        $cart = Cart::with('customer', 'product')->find($id);
        if (!$cart) {
            return response()->json(['message' => 'Cart not found'], 404);
        }
        return response()->json($cart);
    }

    public function update(Request $request, $id)
    {
        $cart = Cart::findOrFail($id);
        $cart = $cart->update($request);
        return response()->json($cart);
    }

    public function destroy(Request $request, $id)
    {
        $cart = Cart::find($id);
        if (!$cart) {
            return response()->json(['message' => 'Cart not found'], 404);
        }
        $cart->delete();
        return response()->json(['message' => 'Cart deleted']);
    }
}
