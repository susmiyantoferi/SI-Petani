<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LadangModel extends Model
{
    protected $table = "ladang"; //penambahan fitur export excel
    protected $fillable = ['nama','create_date','update_date']; //penambahan fitur export excel

   public function allDataLadang()
   {
       return DB::table('ladang')->get();
   }

   public function allData()  //print pdf
   {
    return DB::table('ladang')->get();
   }

   public function detailData($id_ladang)
   {
       return DB::table('ladang')-> where ('id_ladang', $id_ladang)->first();
   }

   public function addData($data)
   {
      DB::table('ladang')->insert($data);
   }

   public function editData($id_ladang, $data)
   {
        DB::table('ladang')->where('id_ladang', $id_ladang)->update($data);
   }

   public function deleteData($id_ladang)
   {
        DB::table('ladang')->where('id_ladang', $id_ladang)->delete();
   }
}
