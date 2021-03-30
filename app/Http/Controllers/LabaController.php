<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\LabaModel;
// use App\Models\PendapatanModel; //menggunakan model Ladang utk tambah select combo box
use App\Models\PengeluaranModel; //menggunakan model Ladang utk tambah select combo box
use Illuminate\Support\Facades\DB; //Penambahan fitur paginate

class LabaController extends Controller
{
    public function __construct()
    {
        $this->LabaModel = new LabaModel();
        $this->middleware('auth');
    }

    public function index()
    {

        $dataLaba = ['laba' => $this->LabaModel->allDataLaba()];
        return view('laba', [ 'laba' => DB::table('laba')->paginate(5)]); //Penambahan fitur paginate
        //return view('laba', $dataLaba);
    }

    public function detail($id_laba) 
    {
        if (!$this->LabaModel->detailData($id_laba)) {
            abort(404);
        }

        $dataLaba = ['laba' => $this->LabaModel->detailData($id_laba)];
        return view('detaillaba', $dataLaba);
    }

    public function add()
    {
        return view('addlaba');
        // $dataPendapatan = ['pendapatan'=> $this -> PendapatanModel -> allDataPendapatan()];//tambah select combo box
        // return view('addlaba', $dataPendapatan);//tambah select combo box

        // $dataPengeluaran = ['pengeluaran'=> $this -> PengeluaranModel -> allDataPengeluaran()];//tambah select combo box
        // return view('addlaba', $dataPengeluaran);//tambah select combo box
    }

    public function insert()
    {
        Request()-> validate([
            //'id_pendapatan' => 'required|unique:pendapatan,id_pendapatan|min:1|max:5',
            'id_pendapatan' => 'required',
            'id_pengeluaran' => 'required',
            'nama' => 'required',
            'hasil' => 'required',
            'create_date' => 'required',
            'update_date' => 'required'
        ],[
            //'id_pendapatan.required' => 'Kolom Wajib Diisi!',
           'id_pendapatan.required' => 'Pilihan Wajib Diisi!',
           'id_pengeluaran.required' => 'Pilihan Wajib Diisi!',
           'nama.required' => 'Kolom Wajib Diisi!',
           'hasil.required' => 'Kolom Wajib Diisi!',
           'create_date.required' => 'Kolom Wajib Diisi!',
           'update_date.required' => 'Kolom Wajib Diisi!'
        ]);

        //sourcecode add data
        $data = [
            'id_pendapatan' => Request()-> id_pendapatan,
            'id_pengeluaran' => Request()-> id_pengeluaran,
            'nama' => Request()-> nama,
            'hasil' => Request()-> hasil,
            'create_date' => Request()-> create_date,
            'update_date' => Request()-> update_date
        ];

        $this->LabaModel->addData($data);
        return redirect()->route('laba')->with('pesan', 'Data Berhasil DItambahkan!');
    }

    public function edit($id_laba)
    {
        if (!$this->LabaModel->detailData($id_laba)) {
            abort(404);
        }

        $dataLaba = [
            'laba' => $this->LabaModel->detailData($id_laba)
        ];

        return view('editlaba', $dataLaba);
    }

    public function update($id_laba)
    {
        Request()->validate([
            'nama' => 'required',
            'hasil' => 'required',
            'create_date' => 'required',
            'update_date' => 'required'
        ], [
            'nama.required' => 'Kolom Wajib Diisi!',
            'hasil.required' => 'Kolom Wajib Diisi!',
            'create_date.required' => 'Kolom Wajib Diisi!',
            'update_date.required' => 'Kolom Wajib Diisi!'
        ]);

         //sourcecode update data
         $data = [
            'id_laba' => Request()->id_laba,
            'id_pendapatan' => Request()->id_pendapatan,
            'id_pengeluaran' => Request()->id_pengeluaran,
            'nama' => Request()->nama,
            'hasil' => Request()->hasil,
            'create_date' => Request()->create_date,
            'update_date' => Request()->update_date
        ];

        $this->LabaModel->editData($id_laba, $data);
        return redirect()->route('laba')->with('pesan', 'Data Berhasil Di Update!');
    }

    public function delete($id_laba)
    {
        $this->LabaModel->deleteData($id_laba);
        return redirect()->route('laba')->with('pesan', 'Data Berhasil Di Hapus!');
    }

}