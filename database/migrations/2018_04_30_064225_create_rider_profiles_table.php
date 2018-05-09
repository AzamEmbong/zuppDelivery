<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiderProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rider_profiles', function (Blueprint $table) {
            $table->increments('profile_id');
            $table->integer('rider_id')->unsigned();
            $table->foreign('rider_id')->references('id')->on('users');
            $table->String('name');
            $table->String('dateOfBirth');
            $table->String('noTel');
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
        Schema::dropIfExists('rider_profiles');
    }
}
