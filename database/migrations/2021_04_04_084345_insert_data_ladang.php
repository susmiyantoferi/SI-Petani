<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class InsertDataLadang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            insert into ladang (nama, create_date, update_date)
            values
            ('Ladang 1', current_timestamp, current_timestamp),
            ('Ladang 2', current_timestamp, current_timestamp);

        "); // data ladang

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
