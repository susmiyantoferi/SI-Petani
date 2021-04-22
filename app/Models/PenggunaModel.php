<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PenggunaModel extends Model
{
    protected $table = "pengguna"; //penambahan fitur export excel
    protected $fillable = ['nama','create_date','update_date']; //penambahan fitur export excel

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

   public function editData($id_pengguna, $data)
   {
        DB::table('pengguna')->where('id_pengguna', $id_pengguna)->update($data);
   }

   public function deleteData($id_pengguna)
   {
        DB::table('pengguna')->where('id_pengguna', $id_pengguna)->delete();
   }
}
