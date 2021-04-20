<?php

namespace App\Exports;


use App\Models\PendapatanModel;
use Maatwebsite\Excel\Concerns\FromCollection;

class PendapatanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PendapatanModel::all();
    }
}
