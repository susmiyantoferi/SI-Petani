<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablePendapatan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendapatan', function (Blueprint $table) {
            $table->bigIncrements('id_pendapatan');
            $table->integer('id_ladang');
            $table->string('nama');
            $table->decimal('amount');
            $table->date('create_date');
            $table->date('update_date');
            $table->foreign('id_ladang')->references('id_ladang')->on('ladang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pendapatan');
    }
}
