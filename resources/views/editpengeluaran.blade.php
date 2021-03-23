@extends('layout/v_template')

@section('title','Edit Pengeluaran')
    
@section('content')

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header table-responsive">

                    <form action="/pengeluaran/update/{{ $pengeluaran->id_pengeluaran }}" method="post" enctype="multipart/form-data">
                        @csrf
                    
                        <div class="content">
                            <div class="row">
                                <div class="col-sm-6">
                    
                                    <div class="form-group">
                                        <label>Id Pengeluaran</label>
                                        <input name="id_pengeluaran" class="form-control" value="{{ $pengeluaran->id_pengeluaran }}" readonly>
                                        <div class="text-danger">
                                            @error('id_pengeluaran')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Id Pendapatan</label>
                                        <input name="id_pendapatan" class="form-control" value="{{ $pengeluaran->id_pendapatan }}" readonly>
                                        <div class="text-danger">
                                            @error('id_pendapatan')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Jenis</label>
                                        <input name="nama" class="form-control" value="{{ $pengeluaran->nama }}">
                                        <div class="text-danger">
                                            @error('nama')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Pengeluaran</label>
                                        <input name="amount" class="form-control" value="{{ $pengeluaran->amount }}">
                                        <div class="text-danger">
                                            @error('amount')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Create Date</label>
                                        <input name="create_date" class="form-control" value="{{ $pengeluaran->create_date }}">
                                        <div class="text-danger">
                                            @error('create_date')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Update Date</label>
                                        <input name="update_date" class="form-control" value="{{ $pengeluaran->update_date }}">
                                        <div class="text-danger">
                                            @error('update_date')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-sm">Simpan</button>
                                        <a href="/pengeluaran" class="btn -list-alt btn-success ">Kembali</a>
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