<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeliveryTime extends Model
{
    protected $guarded = ['id'];

    public function deliveryDate(){
        return $this->belongsToMany(DeliveryDates::class);
    }

}
