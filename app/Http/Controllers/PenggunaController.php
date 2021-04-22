<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use App\Models\PenggunaModel;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel; // penambahan fitur export excel
use App\Exports\PendapatanExport; // penambahan fitur export excel

class PenggunaController extends Controller
{
    public function __construct()
    {
        $this->PenggunaModel = new PenggunaModel();
        //$this->middleware('auth'); //login
    }
    public function index()
    {
        $dataPengguna = ['pengguna' => $this->PenggunaModel->allDataPengguna()];
        return view ('pengguna', $dataPengguna);
    }

    public function detail($id_pengguna)
    {
        if (!$this->PenggunaModel->detailData($id_pengguna)) {
            abort(404);
        }

        $dataPengguna = ['pengguna' => $this->PenggunaModel->detailData($id_pengguna)];
        return view('detailpengguna', $dataPengguna);
    }

    public function add()
    {
        return view('addpengguna');
    }

    public function insert()
    {
        Request()->validate([
            //'id_ladang' => 'required|unique:ladang,id_ladang|min:1|max:5',
            'nama' => 'required',
            'jenis' => 'required',
            'create_date' => 'required',
            'update_date' => 'required'
        ], [
            'nama.required' => 'Kolom Wajib Diisi!',
            'jenis.required' => 'Kolom Wajib Diisi!',
            'create_date.required' => 'Kolom Wajib Diisi!',
            'update_date.required' => 'Kolom Wajib Diisi!'
        ]);


        //sourcecode add data
        $data = [
            //'id_ladang' => Request()-> id_ladang,
            'nama' => Request()->nama,
            'jenis' => Request()->jenis,
            'create_date' => Request()->create_date,
            'update_date' => Request()->update_date
        ];

        $this->PenggunaModel->addData($data);
        return redirect()->route('pengguna')->with('pesan', 'Data Berhasil Ditambahkan!');
    }
}
