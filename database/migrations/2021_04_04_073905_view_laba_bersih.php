<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class ViewLabaBersih extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement
        (" create or replace view laba_bersih  as (
select
	sum(p1.amount) - sum(p2.amount) as laba_bersih
from
	pendapatan as p1
	full join pengeluaran as p2
	on p1.id_pendapatan = p2.id_pengeluaran
	)
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS LABA_BERSIH');
    }
}
