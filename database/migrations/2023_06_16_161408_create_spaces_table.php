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
        Schema::create('spaces', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('id_category');
            $table->string('nama');
            $table->string('foto')->nullable();
            $table->longText('deskripsi');
            $table->string('alamat');
            $table->string('titik_koordinat');
            $table->string('jam_buka');
            $table->integer('harga_weekday');
            $table->integer('harga_weekend');
            $table->string('kontak');
            $table->string('sosmed');
            $table->unsignedBigInteger('id_marker');
            $table->timestamps();

            $table->foreign('id_category')->references('id')->on('category');
            $table->foreign('id_marker')->references('id')->on('marker');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spaces');
    }
};
