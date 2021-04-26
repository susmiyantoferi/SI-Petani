<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersModel;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->UsersModel = new UsersModel();
        $this->middleware('auth'); //login
    }

    public function index()
    {
        $dataUsers = ['users' => $this->UsersModel->allDataUsers()];
        return view('users', [ 'users' => DB::table('users')->paginate(5)]); //paginate
        //return view ('users', $dataUsers);
    }

    public function print()
    {
        $data = [
            'users' => $this->UsersModel->allDataUsers() //print printer
        ];
        return view('printUsers', $data);//print printer
    }

      //start penambahan fitur pencarian atau search
      public function searchUsers(request $request)
      {
          $searchUsers =  $request -> get('searchUsers');
          $cari = DB::table('users')->where('name', 'ilike', '%'.$searchUsers.'%')->paginate(5);
          return view('users', ['users' => $cari]);
      }
      //End penambahan fitur pencarian atau search

    public function detail($id_users)
    {
        if (!$this->UsersModel->detailData($id_users)) {
            abort(404);
        }

        $dataUsers = ['users' => $this->UsersModel->detailData($id_users)];
        return view('detailusers', $dataUsers);
    }

    public function add()
    {
        return view('addusers');
    }

    public function insert()
    {
        Request()->validate([
            //'id_ladang' => 'required|unique:ladang,id_ladang|min:1|max:5',
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'created_at' => 'required',
            'updated_at' => 'required'
        ], [
            'name.required' => 'Kolom Wajib Diisi!',
            'email.required' => 'Kolom Wajib Diisi!',
            'password.required' => 'Kolom Wajib Diisi!',
            'created_at.required' => 'Kolom Wajib Diisi!',
            'updated_at.required' => 'Kolom Wajib Diisi!'
        ]);


        //sourcecode add data
        $data = [
            //'id_ladang' => Request()-> id_ladang,
            'name' => Request()->name,
            'email' => Request()->email,
            'password' => Request()->password,
            'created_at' => Request()->created_at,
            'updated_at' => Request()->updated_at
        ];

        $this->UsersModel->addData($data);
        return redirect()->route('users')->with('pesan', 'Data Berhasil Ditambahkan!');
    }

    public function edit($id_users)
    {
        if (!$this->UsersModel->detailData($id_users)) {
            abort(404);
        }

        $dataUsers = [
            'users' => $this->UsersModel->detailData($id_users)
        ];

        return view('editusers', $dataUsers);
    }

    public function update($id_users)
    {
        Request()->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'created_at' => 'required',
            'updated_at' => 'required'
        ], [
            'name.required' => 'Kolom Wajib Diisi!',
            'email.required' => 'Kolom Wajib Diisi!',
            'password.required' => 'Kolom Wajib Diisi!',
            'created_at.required' => 'Kolom Wajib Diisi!',
            'updated_at.required' => 'Kolom Wajib Diisi!'
        ]);


        //sourcecode update data
        $data = [
            'id' => Request()->id,
            'name' => Request()->name,
            'email' => Request()->email,
            'password' => Request()->password,
            'created_at' => Request()->created_at,
            'updated_at' => Request()->updated_at
        ];

        $this->UsersModel->editData($id_users, $data);
        return redirect()->route('users')->with('pesan', 'Data Berhasil Di Update!');
    }

    public function delete($id_users)
    {
        $this->UsersModel->deleteData($id_users);
        return redirect()->route('users')->with('pesan', 'Data Berhasil Di Hapus!');
    }
}
