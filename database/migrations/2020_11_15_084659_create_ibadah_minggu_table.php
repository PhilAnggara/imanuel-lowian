<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIbadahMingguTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ibadah_minggu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->date('tanggal');
            $table->string('khadim');
            $table->string('pengantar');
            $table->string('pem_acara');
            $table->string('pembacaan');
            $table->string('doa_persembahan');
            $table->string('pujian');
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
        Schema::dropIfExists('ibadah_minggu');
    }
}
