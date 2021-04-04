<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class InsertDataPendapatan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        insert into pendapatan (id_ladang, nama, amount, create_date, update_date) values
('1', 'Periode 1 2020' , '3000000', current_timestamp,current_timestamp),
('1', 'Periode 2 2020' , '3500000', current_timestamp,current_timestamp),
('2', 'Periode 1 2020' , '4000000', current_timestamp,current_timestamp),
('2', 'Periode 2 2020' , '4500000', current_timestamp,current_timestamp);

        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
