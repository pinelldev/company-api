<?php

namespace App\Http\Controllers;

use App\Http\Requests\Customer\CreateRequest;
use App\Http\Requests\Customer\DeleteRequest;
use App\Http\Requests\Customer\IndexRequest;
use App\Http\Requests\Customer\ShowRequest;
use App\Http\Requests\Customer\UpdateRequest;
use App\Http\Resources\CustomerResource;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');   
    }

    public function index(IndexRequest $request)
    {
        return CustomerResource::collection(Customer::all());
    }

    public function create(CreateRequest $request)
    {
        $customer = new Customer;

        $customer = $customer->createModel($request);

        return new CustomerResource($customer);
    }

    public function show(ShowRequest $request)
    {
        $customer = Customer::findOrFail($request->customer_id);

        return new CustomerResource($customer);
    }

    public function update(UpdateRequest $request)
    {
        $customer = Customer::findOrFail($request->customer_id);

        $customer = $customer->updateModel($request);

        return new CustomerResource($customer);
    }

    public function delete(DeleteRequest $request)
    {
        $customer = Customer::findOrFail($request->customer_id);

        $status = $customer->deleteModel();

        return response()->json([
            'status' => $status,
            'customer' => $customer
        ]);
    }
}
