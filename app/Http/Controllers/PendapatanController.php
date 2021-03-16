<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PendapatanModel;

class PendapatanController extends Controller
{
    public function __construct()
    {
        $this->PendapatanModel = new PendapatanModel();
    }
    public function index()
    {
        $dataPendapatan = ['pendapatan'=> $this -> PendapatanModel -> allDataPendapatan()];
        return view('pendapatan', $dataPendapatan);
    }

    public function detail($id_pendapatan)
    {
        if (!$this -> PendapatanModel -> detailData($id_pendapatan)){
            abort(404); 
        }

        $dataPendapatan = ['pendapatan'=> $this -> PendapatanModel -> detailData($id_pendapatan)];
        return view('detailpendapatan', $dataPendapatan);
    }

    public function add()
    {
        return view('addpendapatan');
    }

    public function insert()
    {
        Request()-> validate([
            //'id_pendapatan' => 'required|unique:pendapatan,id_pendapatan|min:1|max:5',
            'id_ladang' => 'required',
            'nama' => 'required',
            'amount' => 'required',
            'create_date' => 'required',
            'update_date' => 'required'
        ],[
            //'id_pendapatan.required' => 'Kolom Wajib Diisi!',
           'id_pendapatan.unique' => 'Id Ini Sudah Ada!',
           'id_pendapatan.min' => 'Minimal 1 Karakter!',
           'id_pendapatan.max' => 'Maksimal 5 Karakter!',
            'id_ladang.required' => 'Kolom Wajib Diisi!',
           'nama.required' => 'Kolom Wajib Diisi!',
           'amount.required' => 'Kolom Wajib Diisi!',
           'create_date.required' => 'Kolom Wajib Diisi!',
           'update_date.required' => 'Kolom Wajib Diisi!'
        ]);
        

        //sourcecode add data
        $data = [
            //'id_pendapatan' => Request()-> id_pendapatan,
            'id_ladang' => Request()-> id_ladang,
            'nama' => Request()-> nama,
            'amount' => Request()-> amount,
            'create_date' => Request()-> create_date,
            'update_date' => Request()-> update_date
        ];

        $this->PendapatanModel->addData($data);
        return redirect()->route('pendapatan')->with('pesan', 'Data Berhasil DItambahkan!');
    }

    public function edit($id_pendapatan)
    {
        if (!$this -> PendapatanModel -> detailData($id_pendapatan)){
            abort(404); 
        }

        $dataPendapatan = [
            'pendapatan'=> $this -> PendapatanModel -> detailData($id_pendapatan)
        ];

        return view('editpendapatan', $dataPendapatan);
    }

    public function update($id_pendapatan)
    {
        Request()-> validate([
            'id_pendapatan' => 'required|min:1|max:5',
            'id_ladang' => 'required',
            'nama' => 'required',
            'amount' => 'required',
            'create_date' => 'required',
            'update_date' => 'required'
        ],[
            'id_pendapatan.required' => 'Kolom Wajib Diisi!',
           'id_pendapatan.min' => 'Minimal 1 Karakter!',
           'id_pendapatan.max' => 'Maksimal 5 Karakter!',
            'id_ladang.required' => 'Kolom Wajib Diisi!',
           'nama.required' => 'Kolom Wajib Diisi!',
           'amount.required' => 'Kolom Wajib Diisi!',
           'create_date.required' => 'Kolom Wajib Diisi!',
           'update_date.required' => 'Kolom Wajib Diisi!'
        ]);
        

        //sourcecode add data
        $data = [
            //'id_pendapatan' => Request()-> id_pendapatan,
            'id_ladang' => Request()-> id_ladang,
            'nama' => Request()-> nama,
            'amount' => Request()-> amount,
            'create_date' => Request()-> create_date,
            'update_date' => Request()-> update_date
        ];

        $this->PendapatanModel->editData($id_pendapatan, $data);
        return redirect()->route('pendapatan')->with('pesan', 'Data Berhasil Di Update!');
    }

    public function delete($id_pendapatan)
    {
        $this->PendapatanModel->deleteData($id_pendapatan);
        return redirect()->route('pendapatan')->with('pesan', 'Data Berhasil Di Hapus!');   
    }
}
