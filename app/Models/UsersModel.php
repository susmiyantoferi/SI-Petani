<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Facades\Excel; // penambahan fitur export excel
use App\Exports\UsersExport; // penambahan fitur export excel

class UsersModel extends Model
{
    public function allDataUsers()
    {
        return DB::table('users')->get();
    }

    public function detailData($id_users)
    {
        return DB::table('users')-> where ('id', $id_users)->first();
    }

    public function addData($data)
   {
      DB::table('users')->insert($data);
   }

   public function editData($id_users, $data)
   {
        DB::table('users')->where('id', $id_users)->update($data);
   }

   public function deleteData($id_users)
   {
        DB::table('users')->where('id', $id_users)->delete();
   }
}
