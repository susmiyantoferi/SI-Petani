<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LadangModel;
use Illuminate\Support\Facades\DB; //Penambahan fitur paginate
use Dompdf\Dompdf;
use Maatwebsite\Excel\Facades\Excel; // penambahan fitur export excel
use App\Exports\LadangExport; // penambahan fitur export excel
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
    
    public function ladangexcel() // penambahan fitur export excel
	{
		return Excel::download(new LadangExport, 'Data_Ladang.xlsx');
	}

    public function print()
    {
        $data = [
            'ladang' => $this->LadangModel->allData() //print printer
        ];
        return view('printLadang', $data);//print printer
    }

    public function printpdf()
    {
        $data = [
            'ladang' => $this->LadangModel->allData() //print pdf
        ];
        $html = view('printpdf', $data);//print pdf

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'potrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();
    }

    //start penambahan fitur pencarian atau search
    public function searchLadang(request $request)
    {
        $searchLadang =  $request -> get('searchLadang');
        $cari = DB::table('ladang')->where('nama', 'ilike', '%'.$searchLadang.'%')->paginate(5);
        return view('ladang', ['ladang' => $cari]);
    }
    //End penambahan fitur pencarian atau search


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
