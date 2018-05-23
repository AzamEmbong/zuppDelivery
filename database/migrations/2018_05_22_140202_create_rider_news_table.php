<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiderNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rider_news', function (Blueprint $table) {
            $table->increments('id');
            $table->String('name');
            $table->String('email');
            $table->String('password');
            $table->String('noTel');
            $table->String('IC');
            $table->String('zipcode');
            $table->String('vehicle');
            $table->String('plateNo');
            $table->String('license');
            $table->String('ICFile');
            $table->String('profile_pic');
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
        Schema::dropIfExists('rider_news');
    }
}
