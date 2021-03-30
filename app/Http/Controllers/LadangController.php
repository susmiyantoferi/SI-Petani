<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LadangModel;
use Illuminate\Support\Facades\DB; //Penambahan fitur paginate

class LadangController extends Controller
{
    public function __construct()
    {
        $this->LadangModel = new LadangModel();
        $this->middleware('auth'); //login
    }

    public function index()
    {

        $dataLadang = ['ladang' => $this->LadangModel->allDataLadang()];
        return view('ladang', [ 'ladang' => DB::table('ladang')->paginate(5)]); //Penambahan fitur paginate
        //return view('ladang', $dataLadang);
    }

    public function detail($id_ladang)
    {
        if (!$this->LadangModel->detailData($id_ladang)) {
            abort(404);
        }

        $dataLadang = ['ladang' => $this->LadangModel->detailData($id_ladang)];
        return view('detailladang', $dataLadang);
    }

    public function add()
    {
        return view('addladang');
    }

    public function insert()
    {
        Request()->validate([
            //'id_ladang' => 'required|unique:ladang,id_ladang|min:1|max:5',
            'nama' => 'required',
            'create_date' => 'required',
            'update_date' => 'required'
        ], [
            'id_ladang.required' => 'Kolom Wajib Diisi!',
            'id_ladang.unique' => 'Id Ini Sudah Ada!',
            'id_ladang.min' => 'Minimal 1 Karakter!',
            'id_ladang.max' => 'Maksimal 5 Karakter!',
            'nama.required' => 'Kolom Wajib Diisi!',
            'create_date.required' => 'Kolom Wajib Diisi!',
            'update_date.required' => 'Kolom Wajib Diisi!'
        ]);


        //sourcecode add data
        $data = [
            //'id_ladang' => Request()-> id_ladang,
            'nama' => Request()->nama,
            'create_date' => Request()->create_date,
            'update_date' => Request()->update_date
        ];

        $this->LadangModel->addData($data);
        return redirect()->route('ladang')->with('pesan', 'Data Berhasil DItambahkan!');
    }

    public function edit($id_ladang)
    {
        if (!$this->LadangModel->detailData($id_ladang)) {
            abort(404);
        }

        $dataLadang = [
            'ladang' => $this->LadangModel->detailData($id_ladang)
        ];

        return view('editladang', $dataLadang);
    }

    public function update($id_ladang)
    {
        Request()->validate([
            'id_ladang' => 'required|min:1|max:5',
            'nama' => 'required',
            'create_date' => 'required',
            'update_date' => 'required'
        ], [
            'id_ladang.required' => 'Kolom Wajib Diisi!',
            'id_ladang.min' => 'Minimal 1 Karakter!',
            'id_ladang.max' => 'Maksimal 5 Karakter!',
            'nama.required' => 'Kolom Wajib Diisi!',
            'create_date.required' => 'Kolom Wajib Diisi!',
            'update_date.required' => 'Kolom Wajib Diisi!'
        ]);


        //sourcecode update data
        $data = [
            'id_ladang' => Request()->id_ladang,
            'nama' => Request()->nama,
            'create_date' => Request()->create_date,
            'update_date' => Request()->update_date
        ];

        $this->LadangModel->editData($id_ladang, $data);
        return redirect()->route('ladang')->with('pesan', 'Data Berhasil Di Update!');
    }

    public function delete($id_ladang)
    {
        $this->LadangModel->deleteData($id_ladang);
        return redirect()->route('ladang')->with('pesan', 'Data Berhasil Di Hapus!');
    }
}
