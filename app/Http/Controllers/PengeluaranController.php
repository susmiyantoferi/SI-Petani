<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengeluaranModel;

class PengeluaranController extends Controller
{
    public function __construct()
    {
        $this->PengeluaranModel = new PengeluaranModel();
    }
    public function index()
    {
        $dataPengeluaran = ['pengeluaran'=> $this -> PengeluaranModel -> allDataPengeluaran()];
        return view('pengeluaran', $dataPengeluaran);
    }

    public function detail($id_pengeluaran)
    {
        if (!$this -> PengeluaranModel -> detailData($id_pengeluaran)){
            abort(404);
        }

        $dataPengeluaran = ['pengeluaran'=> $this -> PengeluaranModel -> detailData($id_pengeluaran)];
        return view('detailpengeluaran', $dataPengeluaran);
    }

    public function add()
    {
        return view('addpengeluaran');
    }

    public function insert()
    {
        Request()-> validate([
           // 'id_pengeluaran' => 'required|unique:pengeluaran,id_pengeluaran|min:1|max:5',
            'id_pendapatan' => 'required',
            'nama' => 'required',
            'amount' => 'required',
            'create_date' => 'required',
            'update_date' => 'required'
        ],[
            //'id_pengeluaran.required' => 'Kolom Wajib Diisi!',
           'id_pengeluaran.unique' => 'Id Ini Sudah Ada!',
           'id_pengeluaran.min' => 'Minimal 1 Karakter!',
           'id_pengeluaran.max' => 'Maksimal 5 Karakter!',
            'id_pendapatan.required' => 'Kolom Wajib Diisi!',
           'nama.required' => 'Kolom Wajib Diisi!',
           'amount.required' => 'Kolom Wajib Diisi!',
           'create_date.required' => 'Kolom Wajib Diisi!',
           'update_date.required' => 'Kolom Wajib Diisi!'
        ]);

        //sourcecode add data
        $data =[
            //'id_pengeluaran' => Request()-> id_pengeluaran,
            'id_pendapatan' => Request()-> id_pendapatan,
            'nama' => Request()-> nama,
            'amount' => Request()-> amount,
            'create_date' => Request()-> create_date,
            'update_date' => Request()-> update_date
        ];

        $this->PengeluaranModel->addData($data);
        return redirect()->route('pengeluaran')->with('pesan', 'Data Berhasil DItambahkan!');
    }

    public function edit($id_pengeluaran)
    {
        if (!$this -> PengeluaranModel -> detailData($id_pengeluaran)){
            abort(404);
        }

        $dataPengeluaran = [
            'pengeluaran'=> $this -> PengeluaranModel -> detailData($id_pengeluaran)
        ];

        return view('editpengeluaran', $dataPengeluaran);
    }

    public function update($id_pengeluaran)
    {
        Request()-> validate([
            'id_pengeluaran' => 'required|min:1|max:5',
            'id_pendapatan' => 'required',
            'nama' => 'required',
            'amount' => 'required',
            'create_date' => 'required',
            'update_date' => 'required'
        ],[
            'id_pengeluaran.required' => 'Kolom Wajib Diisi!',
           'id_pengeluaran.min' => 'Minimal 1 Karakter!',
           'id_pengeluaran.max' => 'Maksimal 5 Karakter!',
            'id_pendapatan.required' => 'Kolom Wajib Diisi!',
           'nama.required' => 'Kolom Wajib Diisi!',
           'amount.required' => 'Kolom Wajib Diisi!',
           'create_date.required' => 'Kolom Wajib Diisi!',
           'update_date.required' => 'Kolom Wajib Diisi!'
        ]);

        //sourcecode add data
        $data =[
            'id_pengeluaran' => Request()-> id_pengeluaran,
            'id_pendapatan' => Request()-> id_pendapatan,
            'nama' => Request()-> nama,
            'amount' => Request()-> amount,
            'create_date' => Request()-> create_date,
            'update_date' => Request()-> update_date
        ];

        $this->PengeluaranModel->editData($id_pengeluaran, $data);
        return redirect()->route('pengeluaran')->with('pesan', 'Data Berhasil Di Update!');
    }

    public function delete($id_pengeluaran)
    {
        $this->PengeluaranModel->deleteData($id_pengeluaran);
        return redirect()->route('pengeluaran')->with('pesan', 'Data Berhasil Di Hapus!');   
    }


}
