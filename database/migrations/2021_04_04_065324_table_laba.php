<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableLaba extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laba', function (Blueprint $table) {
            $table->bigIncrements('id_laba');
            $table->integer('id_pendapatan');
            $table->integer('id_pengeluaran');
            $table->string('nama');
            $table->decimal('hasil');
            $table->date('create_date');
            $table->date('update_date');
            $table->foreign('id_pendapatan')->references('id_pendapatan')->on('pendapatan');
            $table->foreign('id_pengeluaran')->references('id_pengeluaran')->on('pengeluaran');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('laba');
    }
}
