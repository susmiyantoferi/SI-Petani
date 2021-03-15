@extends('layout/v_template')

@section('title','Edit Pendapatan')

@section('content')

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header table-responsive">

                    <form action="/pendapatan/update/{{ $pendapatan->id_pendapatan }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="content">
                            <div class="row">
                                <div class="col-sm-6">

                                    <div class="form-group">
                                        <label>Id Pendapatan</label>
                                        <input name="id_pendapatan" class="form-control" value="{{ $pendapatan->id_pendapatan}}" readonly>
                                        <div class="text-danger">
                                            @error('id_pendapatan')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Id Ladang</label>
                                        <input name="id_ladang" class="form-control" value="{{ $pendapatan->id_ladang }}" readonly>
                                        <div class="text-danger">
                                            @error('id_ladang')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Panen Ke</label>
                                        <input name="nama" class="form-control" value="{{ $pendapatan->nama}}">
                                        <div class="text-danger">
                                            @error('nama')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Pendapatan</label>
                                        <input name="amount" class="form-control" value="{{ $pendapatan->amount }}">
                                        <div class="text-danger">
                                            @error('amount')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Dibuat</label>
                                        <input type = "date" name="create_date" class="form-control" value="{{ $pendapatan->create_date }}">
                                        <div class="text-danger">
                                            @error('create_date')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Ubah</label>
                                        <input type = "date" name="update_date" class="form-control" value="{{ $pendapatan->update_date }}">
                                        <div class="text-danger">
                                            @error('update_date')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-sm">Simpan</button>
                                        <a href="/pendapatan" class="btn -list-alt btn-success ">Kembali</a>
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
