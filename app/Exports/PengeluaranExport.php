<?php

namespace App\Exports;


use App\Models\PengeluaranModel;
use Maatwebsite\Excel\Concerns\FromCollection;

class PengeluaranExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PengeluaranModel::all();
    }
}
