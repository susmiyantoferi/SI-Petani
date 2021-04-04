<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class InsertDataPengeluaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        DB::statement("

insert into pengeluaran (id_pendapatan, nama, amount, create_date, update_date) values
('1', 'Pupuk NPK', '300000', current_timestamp, current_timestamp),
('1', 'Bajak Ladang', '900000', current_timestamp, current_timestamp),
('1', 'Obat Anti Hama', '200000', current_timestamp, current_timestamp),
('1', 'Kuli Panggul', '300000', current_timestamp, current_timestamp),
('2', 'Pupuk NPK', '300000', current_timestamp, current_timestamp),
('2', 'Bajak Ladang', '900000', current_timestamp, current_timestamp),
('2', 'Obat Anti Hama', '200000', current_timestamp, current_timestamp),
('2', 'Kuli Panggul', '300000', current_timestamp, current_timestamp),
('3', 'Pupuk NPK', '300000', current_timestamp, current_timestamp),
('3', 'Bajak Ladang', '900000', current_timestamp, current_timestamp),
('3', 'Obat Anti Hama', '200000', current_timestamp, current_timestamp),
('3', 'Kuli Panggul', '400000', current_timestamp, current_timestamp),
('4', 'Pupuk NPK', '300000', current_timestamp, current_timestamp),
('4', 'Bajak Ladang', '900000', current_timestamp, current_timestamp),
('4', 'Obat Anti Hama', '200000', current_timestamp, current_timestamp),
('4', 'Kuli Panggul', '400000', current_timestamp, current_timestamp);
"); // data pengeluaran

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
