<?php

namespace App\Http\Controllers;

use App\City;
use App\DeliveryDates;
use App\DeliveryTime;
use App\Repository\CityRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;

class DeliveryDatesController extends Controller
{
    private $cityRepository;

    public function __construct(CityRepository $cityRepository)
    {
        $this->cityRepository = $cityRepository;

    }

    /**
     * Display a listing of the resource.
     *
     * @return Collection
     */
    public function index(City $city)
    {
        return $city->deliveryDates()->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param City $city
     * @param DeliveryTime $deliveryTimes
     * @return void
     */
    public function attacheCityToDeliveryTime(City $city, DeliveryTime $deliveryTimes)
    {
        $newOne = DeliveryDates::create([
            'city_id' => $city->id,
            'delivery_times_id' => $deliveryTimes->id,
        ]);

        return $newOne;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DeliveryDates  $deliveryDates
     * @return \Illuminate\Http\Response
     */
    public function show(DeliveryDates $deliveryDates)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param City $city
     * @param $numberOfDays
     * @return array
     */
    public function getTheNumberOfDays(City $city, $numberOfDays)
    {
        $deliveryDates = $city->deliveryDates()
            ->limit($numberOfDays)
            //->with('deliveryTimes')
            ->get(['day_name', 'date']);
        $data = [
            'dates' => $deliveryDates,
        ];

        return $data;
    }

}
