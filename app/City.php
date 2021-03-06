<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $guarded = ['id'];

    public function deliveryDates(){
        return $this->hasMany(DeliveryDates::class);
    }

    public function getDeliveryTimes(){
        $data = City::alias('c')
            ->jointWith('')
        ->select(['*']);

        return $data;
    }
}
