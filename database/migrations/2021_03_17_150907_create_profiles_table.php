<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            // $table->timestamps();
            $table->float('lat');
            $table->float('lon');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone_nb');
            $table->integer('age');
            $table->integer('gender');
            $table->bigInteger('user_id')->unsigned();
            $table->unique(['user_id']);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');


            $table->bigInteger('blood_type_id')->unsigned();
            $table->unique(['blood_type_id']);
            $table->foreign('blood_type_id')->references('id')->on('blood_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
