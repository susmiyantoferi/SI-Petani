<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class TableLaba extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement
        ("
            CREATE table laba (
             id_laba serial primary key,
             id_pendapatan int REFERENCES pendapatan ON DELETE SET NULL,
             id_pengeluaran int REFERENCES pengeluaran ON DELETE SET NULL ,
             nama text,
             hasil money,
             create_date date,
             update_date date,
             CONSTRAINT fk_pendapatan FOREIGN KEY(id_pendapatan) REFERENCES pendapatan(id_pendapatan),
             CONSTRAINT fk_pengeluaran FOREIGN KEY(id_pengeluaran) REFERENCES pengeluaran(id_pengeluaran))
                   ");
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
