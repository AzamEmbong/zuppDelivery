<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliveryDetails2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_details_2s', function (Blueprint $table) {
            $table->increments('delivery_id');
            $table->String('senderName');
            $table->String('senderAddress');
            $table->String('senderEmail');
            $table->String('senderNoTel');
            $table->String('receiverName');
            $table->String('receiverAddress');
            $table->String('receiverEmail');
            $table->String('receiverNoTel');
            $table->String('itemType');
            $table->double('itemSize');
            $table->String('itemNote');
            $table->timestamps();
            $table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('delivery_details_2s');
    }
}
