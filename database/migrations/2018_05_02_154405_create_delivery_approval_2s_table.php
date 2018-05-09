<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliveryApproval2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_approval_2s', function (Blueprint $table) {
            $table->increments('approval_id');
            $table->integer('delivery_id')->unsigned();
            $table->foreign('delivery_id')->references('delivery_id')->on('delivery_details_2s');
            $table->integer('rider_id')->unsigned();
            $table->foreign('rider_id')->references('id')->on('riders');
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('delivery_approval_2s');
    }
}
