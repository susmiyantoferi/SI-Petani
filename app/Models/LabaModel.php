<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabaModel extends Model
{
    protected $table = "laba"; //penambahan fitur export excel
    protected $fillable = ['nama','hasil','create_date','update_date']; //penambahan fitur export excel

   public function allDataLaba()
   {
       return DB::table('laba')->get();
   }

   public function detailData($id_laba)
   {
       return DB::table('laba')-> where ('id_laba', $id_laba)->first();
   }

   public function addData($data)
   {
      DB::table('laba')->insert($data);
   }

   public function editData($id_laba, $data)
   {
        DB::table('laba')->where('id_laba', $id_laba)->update($data);
   }

   public function deleteData($id_laba)
   {
        DB::table('laba')->where('id_laba', $id_laba)->delete();
   }
}
