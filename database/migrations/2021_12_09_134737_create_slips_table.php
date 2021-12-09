<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slips', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('matakuliah_id');
            $table->string('img');
            $table->date('tgl_pembayaran');
            $table->integer('nominal');
            $table->string('nama_prodi');
            $table->foreign('fakultas_id')->references('id')->on('fakultas')->onDelete('cascade');
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
        Schema::dropIfExists('slips');
    }
}
