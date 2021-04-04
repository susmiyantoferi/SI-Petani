<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class InsertDataLaba extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        DB::statement("

insert into laba( id_pendapatan, id_pengeluaran, nama, hasil, create_date, update_date)
values
 ('1','1','ladang 1','1300000',current_timestamp, current_timestamp),
 ('2','2','ladang 1','1800000',current_timestamp, current_timestamp),
 ('3','3','ladang 2','2200000',current_timestamp, current_timestamp),
 ('4','4','ladang 2','2700000',current_timestamp, current_timestamp),
 ('4','5','ladang 3','2700000',current_timestamp, current_timestamp),
 ('4','6','ladang 3','2700000',current_timestamp, current_timestamp);

"); // data laba
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
