@extends('layout/v_template')

@section('title','Detail Pengguna')
    
@section('content')

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header table-responsive">

                    <table class="table">
                        <tr>
                            <th width="10px">Id</th>
                            <th width="30px">:</th>
                            <th>{{ $pengguna->id_pengguna }}</th>
                        </tr>
                        <tr>
                            <th width="10px">Nama</th>
                            <th width="30px">:</th>
                            <th>{{ $pengguna->nama }}</th>
                        </tr>
                        <tr>
                            <th width="10px">Jenis</th>
                            <th width="30px">:</th>
                            <th>{{ $pengguna->jenis }}</th>
                        </tr>
                        <tr>
                            <th width="10px">Create Date</th>
                            <th width="30px">:</th>
                            <th>{{ $pengguna->create_date }}</th>
                        </tr>
                        <tr>
                            <th width="10px">Update Date</th>
                            <th width="30px">:</th>
                            <th>{{ $pengguna->update_date }}</th>
                        </tr>
                        <tr>
                            <th><a href="/pengguna" class="btn -list-alt btn-success ">Kembali</a></th>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>
<section>


@endsection