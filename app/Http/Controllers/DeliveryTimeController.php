<?php

namespace App\Http\Controllers;

use App\City;
use App\DeliveryTime;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DeliveryTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return DeliveryTime[]|Collection|Response
     */
    public function index()
    {
        return DeliveryTime::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $data =  $request->validate([
            'span' => 'required',
        ]);

        return DeliveryTime::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param DeliveryTime $deliveryTime
     * @return DeliveryTime
     */
    public function show(DeliveryTime $deliveryTime)
    {
        return $deliveryTime;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param DeliveryTime $deliveryTime
     * @return DeliveryTime
     */
    public function update(Request $request, DeliveryTime $deliveryTime)
    {
        $data =  $request->validate([
            'span' => 'required',
        ]);

        $deliveryTime->update($data);

        return $deliveryTime->refresh();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DeliveryTime $deliveryTime
     * @return DeliveryTime[]|Collection
     * @throws \Exception
     */
    public function destroy(DeliveryTime $deliveryTime)
    {
        $deliveryTime->delete();

        return DeliveryTime::all();
    }

}
