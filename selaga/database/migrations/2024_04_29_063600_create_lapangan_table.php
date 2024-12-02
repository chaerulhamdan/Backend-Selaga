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
        Schema::create('lapangan', function (Blueprint $table) {
            $table->id('id_lapangan');
            $table->string('name_lapangan');
            $table->string('address_lapangan');
            $table->string('price_lapangan');
            $table->text('decs_lapangan');
            $table->unsignedBigInteger('id_mitra');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_mitra')->references('id_mitra')->on('mitra');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lapangan');
    }
};
