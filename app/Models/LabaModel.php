<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabaModel extends Model
{
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
}
