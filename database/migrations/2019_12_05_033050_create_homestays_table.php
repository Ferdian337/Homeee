<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomestaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homestays', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_pengelola')->nullable();
            $table->string('nama_homestay');
            $table->string('jenis_homestay');
            $table->integer('banyak_kmrtdr');
            $table->integer('banyak_kmrmndi');
            $table->integer('maks_perkamar');
            $table->string('alamat');
            $table->string('kota');
            $table->char('kodepos',4);
            $table->string('foto')->nullable();
            $table->text('deskripsi');
            $table->char('harga_permalam');
            $table->date('tanggal_mulai_beroperasi');
            $table->date('tanggal_berakhir_beroperasi');
            $table->integer('kapasitas');
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
        Schema::dropIfExists('homestays');
    }
}
