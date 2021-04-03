<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $countLadang = DB::table('ladang')->count();                    //Penambhan fitur count row data pada table
        $sumPendapatan = DB::table('pendapatan')->sum('pendapatan.amount');            //Penambhan fitur sum row data pada table
        $sumPengeluaran = DB::table('pengeluaran')->sum('pengeluaran.amount');         //Penambhan fitur sum row data pada table
        $labaBersih = DB::table('laba_bersih')->get();                        //Penambhan fitur select pada view database laba_bersih
        return view('v_home', ['labaBersih'=> $labaBersih], compact('countLadang','sumPendapatan', 'sumPengeluaran')); //Penambhan fitur  row data pada table home
    }
}
