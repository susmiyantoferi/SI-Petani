<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PenggunaModel extends Model
{
    public function allDataPengguna()
    {
        return DB::table('pengguna')->get();
    }

    public function detailData($id_pengguna)
   {
       return DB::table('pengguna')-> where ('id_pengguna', $id_pengguna)->first();
   }

   public function addData($data)
   {
      DB::table('pengguna')->insert($data);
   }
}
