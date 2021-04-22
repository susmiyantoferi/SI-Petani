<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use App\Models\PenggunaModel;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel; // penambahan fitur export excel
use App\Exports\PenggunaExport; // penambahan fitur export excel

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
        return view('pengguna', [ 'pengguna' => DB::table('pengguna')->paginate(5)]); //paginate
        //return view ('pengguna', $dataPengguna);
    }

    public function penggunaexcel() // penambahan fitur export excel
	{
		return Excel::download(new PenggunaExport, 'Data_Pengguna.xlsx');
	}

    public function print()
    {
        $data = [
            'pengguna' => $this->PenggunaModel->allDataPengguna() //print printer
        ];
        return view('printPengguna', $data);//print printer
    }

    //start penambahan fitur pencarian atau search
    public function searchPengguna(request $request)
    {
        $searchPengguna =  $request -> get('searchPengguna');
        $cari = DB::table('pengguna')->where('nama', 'ilike', '%'.$searchPengguna.'%')->paginate(5);
        return view('pengguna', ['pengguna' => $cari]);
    }
    //End penambahan fitur pencarian atau search

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

    public function edit($id_pengguna)
    {
        if (!$this->PenggunaModel->detailData($id_pengguna)) {
            abort(404);
        }

        $dataPengguna = [
            'pengguna' => $this->PenggunaModel->detailData($id_pengguna)
        ];

        return view('editpengguna', $dataPengguna);
    }

    public function update($id_pengguna)
    {
        Request()->validate([
            'nama' => 'required',
            'create_date' => 'required',
            'update_date' => 'required'
        ], [
            'nama.required' => 'Kolom Wajib Diisi!',
            'create_date.required' => 'Kolom Wajib Diisi!',
            'update_date.required' => 'Kolom Wajib Diisi!'
        ]);


        //sourcecode update data
        $data = [
            'id_pengguna' => Request()->id_pengguna,
            'nama' => Request()->nama,
            'create_date' => Request()->create_date,
            'update_date' => Request()->update_date
        ];

        $this->PenggunaModel->editData($id_pengguna, $data);
        return redirect()->route('pengguna')->with('pesan', 'Data Berhasil Di Update!');
    }

    public function delete($id_pengguna)
    {
        $this->PenggunaModel->deleteData($id_pengguna);
        return redirect()->route('pengguna')->with('pesan', 'Data Berhasil Di Hapus!');
    }
}
