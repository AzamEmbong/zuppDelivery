<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riders', function (Blueprint $table) {
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
            $table->rememberToken();
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
        Schema::dropIfExists('riders');
    }
}
