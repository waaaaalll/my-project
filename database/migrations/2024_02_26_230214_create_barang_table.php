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
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->string('img');
            $table->integer('stock');
            $table->unsignedBigInteger('qty_id');
            $table->decimal('harga', 10, 3); // Kolom harga dengan 10 digit sebelum koma dan 2 digit setelah koma
            $table->text('deskripsi');
            
            $table->timestamps();

            $table->foreign('qty_id')->references('id')->on('quantities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang');
    }
};