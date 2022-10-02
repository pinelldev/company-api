<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\CreateRequest;
use App\Http\Requests\Product\DeleteRequest;
use App\Http\Requests\Product\IndexRequest;
use App\Http\Requests\Product\ShowRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth:sanctum');
    }

    public function index(IndexRequest $request)
    {
        return ProductResource::collection(Product::all());
    }

    public function create(CreateRequest $request)
    {
        $product = new Product;

        $product = $product->createModel($request);

        return new ProductResource($product);
    }

    public function show(ShowRequest $request)
    {
        $product = Product::findOrFail($request->product_id);

        return new ProductResource($product);
    }

    public function update(UpdateRequest $request)
    {
        $product = Product::findOrFail($request->product_id);

        $product = $product->updateModel($request);

        return new ProductResource($product);
    }

    public function delete(DeleteRequest $request)
    {
        $product = Product::findOrFail($request->product_id);

        $status = $product->deleteModel($request);

        return response()->json([
            'status' => $status,
            'product' => $product
        ]);
    }
}
