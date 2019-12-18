<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeliveryDates extends Model
{
    protected $guarded = ['id'];

    public function deliveryTimes(){
        return $this->hasMany(DeliveryTime::class);
    }
}
