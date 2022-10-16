<?php

namespace App\Http\Controllers;

use App\Http\Requests\Shipper\CreateRequest;
use App\Http\Requests\Shipper\DeleteRequest;
use App\Http\Requests\Shipper\IndexRequest;
use App\Http\Requests\Shipper\ShowRequest;
use App\Http\Requests\Shipper\UpdateRequest;
use App\Http\Resources\ShipperResource;
use App\Models\Shipper;
use Illuminate\Http\Request;

class ShipperController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index(IndexRequest $request)
    {
        return ShipperResource::collection(Shipper::all());
    }

    public function create(CreateRequest $request)
    {
        $shipper = new Shipper();

        $shipper = $shipper->createModel($request);

        return new ShipperResource($shipper);
    }

    public function show(ShowRequest $request)
    {
        $shipper = Shipper::findOrFail($request->shipper_id);

        return new ShipperResource($shipper);
    }

    public function update(UpdateRequest $request)
    {
        $shipper = Shipper::findOrFail($request->shipper_id);

        $shipper = $shipper->updateModel($request);

        return new ShipperResource($shipper);
    }

    public function delete(DeleteRequest $request)
    {
        $shipper = Shipper::findOrFail($request->shipper_id);

        $status = $shipper->deleteModel();

        return response()->json([
            'status' => $status,
            'shipper' => $shipper
        ]);
    }
}
