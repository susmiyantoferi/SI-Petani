<?php

namespace App\Http\Controllers;


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LabaModel;
use Illuminate\Support\Facades\DB; //Penambahan fitur paginate

class LabaController extends Controller
{
    public function __construct()
    {
        $this->LabaModel = new LabaModel();
    }

    public function index()
    {

        $dataLaba = ['laba' => $this->LabaModel->allDataLaba()];
        return view('laba', [ 'laba' => DB::table('laba')->paginate(5)]); //Penambahan fitur paginate
        //return view('laba', $dataLaba);
    }

}
