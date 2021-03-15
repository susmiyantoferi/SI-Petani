<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengeluaranModel extends Model
{
   public function allDataPengeluaran()
   {
       return DB::table('pengeluaran')->get();
   }
   
   public function detailData($id_pengeluaran)
   {
        return DB::table('pengeluaran')-> where ('id_pengeluaran', $id_pengeluaran)->first();
   }

   public function addData($data)
   {
        DB::table('pengeluaran')-> insert($data);  
   }

   public function editData($id_pengeluaran, $data)
   {
     DB::table('pengeluaran')->where('id_pengeluaran', $id_pengeluaran)->update($data);
   }
}