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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id'); // Kolom untuk ID barang yang dibeli
            $table->date('tanggal_pembelian'); // Kolom untuk tanggal pembelian
            $table->decimal('total_harga', 10, 3); // Kolom untuk total harga pembelian
            $table->integer('jumlah_barang'); // Kolom untuk jumlah barang yang dibeli

            
            // Menambahkan kunci asing (foreign key) untuk menghubungkan dengan tabel barang
            $table->foreign('product_id')
                ->references('id')
                ->on('barang')
                ->onDelete('cascade');
            
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
        Schema::dropIfExists('transactions');
    }
};