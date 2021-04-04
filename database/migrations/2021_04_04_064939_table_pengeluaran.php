<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablePengeluaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengeluaran', function (Blueprint $table) {
            $table->bigIncrements('id_pengeluaran');
            $table->integer('id_pendapatan');
            $table->string('nama');
            $table->decimal('amount');
            $table->date('create_date');
            $table->date('update_date');
            $table->foreign('id_pendapatan')->references('id_pendapatan')->on('pendapatan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pengeluaran');
    }
}
