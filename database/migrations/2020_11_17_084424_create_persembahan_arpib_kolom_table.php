<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersembahanArpibKolomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persembahan_arpib_kolom', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('arpib_kolom');
            $table->date('tanggal');
            $table->string('tempat')->nullable();
            $table->integer('jumlah')->nullable();
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
        Schema::dropIfExists('persembahan_arpib_kolom');
    }
}
