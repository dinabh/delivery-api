<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_dates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('day_name')->nullable();
            $table->date('date')->nullable();

            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('id')
                ->on('cities')->onDelete('cascade');

            $table->unsignedBigInteger('delivery_times_id');
            $table->foreign('delivery_times_id')->references('id')
                ->on('delivery_times')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('delivery_dates');
    }
}
