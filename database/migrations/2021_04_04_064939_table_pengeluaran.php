<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class TablePengeluaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
           CREATE table PENGELUARAN (
            id_pengeluaran serial  primary key,
            id_pendapatan int REFERENCES PENDAPATAN ON DELETE CASCADE,
            nama text,
            amount money,
            create_date date,
            update_date date,
            CONSTRAINT fk_pendapatan FOREIGN KEY(id_pendapatan) REFERENCES pendapatan(id_pendapatan))
            ");
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
