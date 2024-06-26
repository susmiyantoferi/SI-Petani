<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class TablePendapatan extends Migration
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
        CREATE table PENDAPATAN (
            id_pendapatan serial primary key,
            id_ladang int REFERENCES ladang ON DELETE CASCADE,
            nama text,
            amount money,
            create_date date,
            update_date date,
            CONSTRAINT fk_ladang FOREIGN KEY(id_ladang) REFERENCES ladang(id_ladang))
        ");
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
