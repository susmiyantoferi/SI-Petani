<?php

namespace App\Exports;


use App\Models\LadangModel;
use Maatwebsite\Excel\Concerns\FromCollection;

class LadangExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return LadangModel::all();
    }
}
