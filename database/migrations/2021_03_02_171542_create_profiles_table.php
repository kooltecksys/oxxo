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
            $table->boolean('active')->default(1);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name');
            $table->string('psurname');
            $table->string('msurname');
            $table->string('email');
            $table->string('employee');
            $table->string('phone');
            $table->string('birthday');
            // $table->unsignedBigInteger('points');
            $table->string('photo')->nullable();
            $table->unsignedBigInteger('oxxo_id');
            $table->foreign('oxxo_id')->references('id')->on('oxxos');
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
        Schema::dropIfExists('profiles');
    }
}
