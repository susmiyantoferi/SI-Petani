<?php

namespace App\Exports;


use App\Models\LabaModel;
use Maatwebsite\Excel\Concerns\FromCollection;

class LabaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return LabaModel::all();
    }
}
