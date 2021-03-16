@extends('layout/v_template')

@section('title','Add Data Pengeluaran')
    
@section('content')

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header table-responsive">

                    <form action="/pengeluaran/insert" method="post" enctype="multipart/form-data">
                        @csrf
                    
                        <div class="content">
                            <div class="row">
                                <div class="col-sm-6">
                    
                                    
                                    <div class="form-group">
                                        <label>Periode Pendapatan</label>
                                        <select name="id_pendapatan" class="form-control">
                                            <option value="">Please Select ...</option>
                                            @foreach ($pendapatan as $item)
                                            <option value="{{ $item->id_pendapatan }}"{{ old('id_pendapatan') == $item->id_pendapatan ? 'selected' : null }}>{{ $item->nama }}</option>
                                            @endforeach
                                        </select>
                                        <!--<input name="id_pendapatan" class="form-control" value="{{ old('id_pendapatan') }}">-->
                                        <div class="text-danger">
                                            @error('id_pendapatan')
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
                                        <label>Jumlah Pengeluaran</label>
                                        <input type="number" name="amount" class="form-control" value="{{ old('amount') }}">
                                        <div class="text-danger">
                                            @error('amount')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Dibuat</label>
                                        <input type = "date" name="create_date" class="form-control" value="{{ old('create_date') }}">
                                        <div class="text-danger">
                                            @error('create_date')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Ubah</label>
                                        <input type = "date" name="update_date" class="form-control" value="{{ old('update_date') }}">
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