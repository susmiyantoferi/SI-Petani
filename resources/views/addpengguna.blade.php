@extends('layout/v_template')

@section('title','Add Data Pengguna')

@section('content')

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header table-responsive">

                    <form action="/pengguna/insert" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="content">
                            <div class="row">
                                <div class="col-sm-6">


                                    <div class="form-group">
                                        <label>Nama Pengguna</label>
                                        <input name="nama" class="form-control" value="{{ old('nama') }}">
                                        <div class="text-danger">
                                            @error('nama')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Pengguna</label>
                                        <input name="jenis" class="form-control" value="{{ old('jenis') }}">
                                        <div class="text-danger">
                                            @error('jenis')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Create Date</label>
                                        <input type = "date" name="create_date" class="form-control" value="{{ old('create_date') }}">
                                        <div class="text-danger">
                                            @error('create_date')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Update Date</label>
                                        <input type = "date" name="update_date" class="form-control" value="{{ old('update_date') }}">
                                        <div class="text-danger">
                                            @error('update_date')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-sm">Simpan</button>
                                        <a href="/pengguna" class="btn -list-alt btn-success ">Kembali</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
<section>


@endsection
