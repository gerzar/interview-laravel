<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Services\UploadImageService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): view
    {

        return view('admin.product.index', [
            'products' => Product::with('ProductCategory')->paginate(10)
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): view
    {
        return view('admin.product.create', [
            'categories' => ProductCategory::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProductRequest $request
     * @param UploadImageService $uploadImage
     * @return RedirectResponse
     */
    public function store(ProductRequest $request, UploadImageService $uploadImage): RedirectResponse
    {
        $product = $request->validated();

        if ($request->hasFile('image')) {
            $uploaded_path = $uploadImage->uploadFile($product["image"], 'products');
            $product["image"] = $uploaded_path;
        }

        $product = Product::create($product);
        if ($product) {
            return redirect(route('admin.products.edit', $product))->with( 'message',  'Product successfully created' );
        }

        return back()->with('error', 'Something went wrong');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function show(Product $product): view
    {
        return view('admin.product.show',
            [
                'product' => $product
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return View
     */
    public function edit(Product $product): view
    {
        return view('admin.product.edit', [
            'product' => $product,
            'categories' => ProductCategory::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProductRequest $request
     * @param Product $product
     * @return RedirectResponse
     */
    public function update(ProductRequest $request, Product $product, UploadImageService $uploadImage): RedirectResponse
    {
        $updatedProduct = $request->validated();
        $product->fill($updatedProduct);

        if ($request->hasFile('image')) {
            $uploaded_path = $uploadImage->uploadFile($product["image"], 'products');
            $product["image"] = $uploaded_path;
        }

        if ($product->save()){
            return back()->with('message', 'Product was successfully updated');
        }

        return back()->with('error', 'Something went wrong');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return JsonResponse
     */
    public function destroy(Product $product): JsonResponse
    {
        try {
            $product->delete();
            return response()->json(['status' => 'ok']);
        }catch(\Exception) {
            return response()->json(['status' => 'error'], 400);
        }
    }
}
