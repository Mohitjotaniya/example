<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWritersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('writers', function (Blueprint $table) {
            $table->increments('u_id');
            $table->string('u_name');
            $table->string('lname');
            $table->string('email')->unique();
            $table->string('password');
            $table->Integer('phone');
            $table->date('bod');
            $table->string('gender');
            $table->string('address');
            $table->string('city');
            $table->string('county');
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
        Schema::dropIfExists('writers');
    }
}
