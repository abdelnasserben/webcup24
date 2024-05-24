<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CategoryFormRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController
{
    /**
     * Display a listing of categories.
     */
    public function index()
    {
        return view('admin.categories.index', [
            'category' => new Category()
        ]);
    }

    /**
     * Show the form for creating a new category.
     */
    public function create()
    {
        return view('admin.categories.form', [
            'category' => new Category()
        ]);
    }

    /**
     * Store a newly created category in storage.
     */
    public function store(CategoryFormRequest $request)
    {
        Category::create($request->validated());
        return to_route('admin.category.index')->with('success', 'la catégorie a bien été créée');
    }

    /**
     * Show the form for editing the specified category.
     */
    public function edit(Category $category)
    {
        return view('admin.categories.form', [
            'category' => $category
        ]);
    }

    /**
     * Update the specified course in storage.
     */
    public function update(CategoryFormRequest $request, Category $category)
    {
        $category->update($request->validated());
        return to_route('admin.category.index')->with('success', 'la catégorie a bien été modifiée');
    }

    /**
     * Remove the specified category from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return to_route('admin.category.index')->with('success', 'la catégorie a bien été supprimée');
    }
}
