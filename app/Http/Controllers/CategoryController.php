<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\CreateRequest;
use App\Http\Requests\Category\DeleteRequest;
use App\Http\Requests\Category\IndexRequest;
use App\Http\Requests\Category\ShowRequest;
use App\Http\Requests\Category\UpdateRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(IndexRequest $request)
    {
        return CategoryResource::collection(Category::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CreateRequest $request)
    {
        $category = new Category();

        $category = $category->createModel($request);

        return new CategoryResource($category);
    }

    public function show(ShowRequest $request)
    {
        $category = Category::findOrFail($request->category_id);

        return new CategoryResource($category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request)
    {
        $category = Category::findOrFail($request->category_id);

        $category = $category->updateModel($request);

        return new CategoryResource($category);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function delete(DeleteRequest $request)
    {
        $category = Category::findOrFail($request->category_id);

        $status = $category->deleteModel();

        return response()->json([
            'status' => $status,
            'category' => $category
        ]);
    }
}
