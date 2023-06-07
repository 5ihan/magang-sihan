<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('kategori_id');
            $table->integer('contact_id');
            $table->integer('harga');
            $table->string('foto');
            $table->string('type');
            $table->string('merk');
            $table->integer('km');
            $table->integer('cc');
            $table->string('warna');
            $table->text('deskripsi');
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
        Schema::dropIfExists('produk');
    }
}
