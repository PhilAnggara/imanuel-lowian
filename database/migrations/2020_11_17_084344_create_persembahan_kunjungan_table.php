<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersembahanKunjunganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persembahan_kunjungan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('keluarga');
            $table->string('kolom');
            $table->integer('jumlah');
            $table->string('keterangan')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('persembahan_kunjungan');
    }
}
