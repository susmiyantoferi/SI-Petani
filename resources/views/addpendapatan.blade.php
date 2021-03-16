@extends('layout/v_template')

@section('title','Add Data Pendapatan')

@section('content')

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header table-responsive">

                    <form action="/pendapatan/insert" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="content">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Ladang</label>
                                        <select name="id_ladang" class="form-control">
                                            <option value="">Please Select ...</option>
                                            @foreach ($ladang as $item)
                                            <option value="{{ $item->id_ladang }}"{{ old('id_ladang') == $item->id_ladang ? 'selected' : null }}>{{ $item->nama }}</option>
                                            @endforeach
                                        </select>
                                        <div class="text-danger">
                                            @error('id_ladang')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label>Panen Ke</label>
                                        <input name="nama" class="form-control" value="{{ old('nama') }}">
                                        <div class="text-danger">
                                            @error('nama')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label>Jumlah Pendapatan</label>
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
