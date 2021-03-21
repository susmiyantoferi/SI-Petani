<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LabaModel;
use Illuminate\Support\Facades\DB;

class LabaController extends Controller
{
    public function __construct()
    {
        $this->LabaModel = new LabaModel();
    }

    public function index()
    {
        $dataLaba = ['laba'=> $this->LabaModel->allDataLaba()];
        return view('laba', $dataLaba);
    }
}
