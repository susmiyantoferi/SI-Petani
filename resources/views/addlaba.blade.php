@extends('layout/v_template')

@section('title','Add Data Laba')

@section('content')

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header table-responsive">

                    <form action="/laba/insert" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="content">
                            <div class="row">
                                <div class="col-sm-6">
                                
                                    <div class="form-group">
                                        <label>Id Pendapatan</label>
                                        <input name="id_pendapatan" class="form-control" value="{{ old('id_pendapatan') }}">
                                        <div class="text-danger">
                                            @error('id_pendapatan')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Id Pengeluaran</label>
                                        <input name="id_pengeluaran" class="form-control" value="{{ old('id_pengeluaran') }}">
                                        <div class="text-danger">
                                            @error('id_pengeluaran')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input name="nama" class="form-control" value="{{ old('nama') }}">
                                        <div class="text-danger">
                                            @error('nama')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label>Jumlah Pendapatan</label>
                                        <input type="number" name="hasil" class="form-control" value="{{ old('hasil') }}">
                                        <div class="text-danger">
                                            @error('hasil')
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
                                        <a href="/laba" class="btn -list-alt btn-success ">Kembali</a>
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