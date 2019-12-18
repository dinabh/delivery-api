<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return City::all();
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
            'name' => 'required',
            'slug' => 'required',
        ]);

        return City::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param City $city
     * @return City
     */
    public function show(City $city)
    {
        return $city;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param City $city
     * @return City
     */
    public function update(Request $request, City $city)
    {
        $data =  $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        $city->update($data);

        return $city->refresh();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param City $city
     * @return City[]|Collection
     * @throws \Exception
     */
    public function destroy(City $city)
    {
        $city->delete();

        return City::all();
    }
}
