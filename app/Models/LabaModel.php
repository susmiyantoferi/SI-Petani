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
}
