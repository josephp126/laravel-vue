<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryProductResource;
use App\Models\Category;

class CategoryProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Category $category
     * @return CategoryProductResource
     */
    public function index(Category $category)
    {
        return new CategoryProductResource($category);
    }
}
