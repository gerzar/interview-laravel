<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductCategoryRequest;
use App\Models\ProductCategory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): view
    {
        return view('admin.category.index', [
            'categories' => ProductCategory::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): view
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProductCategoryRequest $request
     * @return RedirectResponse
     */
    public function store(ProductCategoryRequest $request): RedirectResponse
    {

        $category = ProductCategory::create($request->validated());

        if ($category) {
            return redirect(route('admin.categories.edit', $category))->with( 'message',  'Category successfully created' );
        }

        return back()->with('error', 'Something went wrong');

    }

    /**
     * Display the specified resource.
     *
     * @param ProductCategory $category
     * @return View
     */
    public function show(ProductCategory $category): view
    {
        return view('admin.category.show',
            [
                'category' => $category
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param ProductCategory $category
     * @return View
     */
    public function edit(ProductCategory $category): view
    {
        return view('admin.category.edit',
            [
                'category' => $category
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProductCategoryRequest $request
     * @param ProductCategory $category
     * @return RedirectResponse
     */
    public function update(ProductCategoryRequest $request, ProductCategory $category): RedirectResponse
    {
        $updatedCategory = $request->validated();

        $category->fill($updatedCategory);


        if ($category->save()){
            return back()->with('message', 'Category was successfully updated');
        }

        return back()->with('error', 'Something went wrong');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ProductCategory $category
     * @return JsonResponse
     */
    public function destroy(ProductCategory $category): JsonResponse
    {
        try {
            $category->delete();
            return response()->json(['status' => 'ok']);
        }catch(\Exception) {
            return response()->json(['status' => 'error'], 400);
        }
    }
}
