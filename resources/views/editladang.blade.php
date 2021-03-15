@extends('layout/v_template')

@section('title','Edit Ladang')
    
@section('content')

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header table-responsive">

                    <form action="/ladang/update/{{ $ladang->id_ladang }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    
                        <div class="content">
                            <div class="row">
                                <div class="col-sm-6">
                    
                                    <div class="form-group">
                                        <label>Id Ladang</label>
                                        <input name="id_ladang" class="form-control" value="{{ $ladang->id_ladang  }}" readonly>
                                        <div class="text-danger">
                                            @error('id_ladang')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input name="nama" class="form-control" value="{{ $ladang->nama }}">
                                        <div class="text-danger">
                                            @error('nama')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Create Date</label>
                                        <input name="create_date" class="form-control" value="{{ $ladang->create_date }}">
                                        <div class="text-danger">
                                            @error('create_date')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Update Date</label>
                                        <input name="update_date" class="form-control" value="{{ $ladang->update_date}}">
                                        <div class="text-danger">
                                            @error('update_date')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-sm">Simpan</button>
                                        <a href="/ladang" class="btn -list-alt btn-success ">Kembali</a>
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
