<?php

use Illuminate\Database\Seeder;

class DeliveryDatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\DeliveryDates::class,   7)->create();
    }
}
