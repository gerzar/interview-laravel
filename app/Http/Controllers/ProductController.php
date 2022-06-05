<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param Product $product
     * @return View
     */
    public function __invoke(Request $request, Product $product): view
    {
        return view('ui.product.index', ['products' => $product->all()]);
    }
}
