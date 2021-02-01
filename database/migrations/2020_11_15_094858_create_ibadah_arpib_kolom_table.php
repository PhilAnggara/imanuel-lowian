<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIbadahArpibKolomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ibadah_arpib_kolom', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('arpib_kolom');
            $table->date('tanggal');
            $table->string('giliran');
            $table->string('tempat');
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
        Schema::dropIfExists('ibadah_arpib_kolom');
    }
}
