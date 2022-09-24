<?php

namespace App\Http\Controllers;

use App\Http\Requests\Suppleir\CreateRequest;
use App\Http\Requests\Suppleir\DeleteRequest;
use App\Http\Requests\Suppleir\IndexRequest;
use App\Http\Requests\Suppleir\ShowRequest;
use App\Http\Requests\Suppleir\UpdateRequest;
use App\Http\Resources\SuppleirResource;
use App\Models\Suppleir;
use Illuminate\Http\Request;

class SuppleirController extends Controller
{
    public function index(IndexRequest $request)
    {
        return SuppleirResource::collection(Suppleir::all());
    }

    public function create(CreateRequest $request)
    {
        $suppleir = new Suppleir;

        $suppleir = $suppleir->createModel($request);

        return new SuppleirResource($suppleir);
    }

    public function show(ShowRequest $request)
    {
        $suppleir = Suppleir::findOrFail($request->suppleir_id);

        return new SuppleirResource($suppleir);
    }

    public function update(UpdateRequest $request)
    {
        $suppleir = Suppleir::findOrFail($request->suppleir_id);

        $suppleir = $suppleir->updateModel($request);

        return new SuppleirResource($suppleir);
    }

    public function delete(DeleteRequest $request)
    {
        $suppleir = Suppleir::findOrFail($request->suppleir_id);

        $status = $suppleir->deleteModel();

        return response()->json([
            'status' => $status,
            'suppleir' => $suppleir
        ]);
    }
}
