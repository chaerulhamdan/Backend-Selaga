<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->id('id_booking');
            $table->string('name_pemesan');
            $table->string('date_booking');
            $table->string('payment');
            $table->unsignedBigInteger('id_pemesan');
            $table->unsignedBigInteger('id_lapangan');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_pemesan')->references('id_users')->on('users');
            $table->foreign('id_lapangan')->references('id_lapangan')->on('lapangan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking');
    }
};
