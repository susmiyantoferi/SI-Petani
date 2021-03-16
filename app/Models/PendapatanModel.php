<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendapatanModel extends Model
{
   public function allDataPendapatan()
   {
       return DB::table('pendapatan')->get();
   }

   public function detailData($id_pendapatan)
   {
        return DB::table('pendapatan')-> where ('id_pendapatan', $id_pendapatan)->first();
   }

   public function addData($data)
   {
        DB::table('pendapatan')->insert($data);
   }

   public function editData($id_pendapatan, $data)
   {
      DB::table('pendapatan')->where('id_pendapatan', $id_pendapatan)->update($data);
   }

   public function deleteData($id_pendapatan)
   {
      DB::table('pendapatan')->where('id_pendapatan', $id_pendapatan)->delete();
   }
}