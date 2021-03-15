@extends('layout/v_template')

@section('title','Detail Pengeluaran')
    
@section('content')

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header table-responsive">

                    <table class="table">
                        <tr>
                            <th width="10px">Id Pengeluaran</th>
                            <th width="30px">:</th>
                            <th>{{ $pengeluaran->id_pengeluaran }}</th>
                        </tr>
                        <tr>
                            <th width="10px">Id Pendapatan</th>
                            <th width="30px">:</th>
                            <th>{{ $pengeluaran->id_pendapatan }}</th>
                        </tr>
                        <tr>
                            <th width="10px">Nama Jenis</th>
                            <th width="30px">:</th>
                            <th>{{ $pengeluaran->nama }}</th>
                        </tr>
                        <tr>
                            <th width="10px">Uang Keluar</th>
                            <th width="30px">:</th>
                            <th>{{ $pengeluaran->amount }}</th>
                        </tr>
                        <tr>
                            <th width="10px">Tanggal Dibuat</th>
                            <th width="30px">:</th>
                            <th>{{ $pengeluaran->create_date }}</th>
                        </tr>
                        <tr>
                            <th width="10px">Tanggal Dirubah</th>
                            <th width="30px">:</th>
                            <th>{{ $pengeluaran->update_date }}</th>
                        </tr>
                        <tr>
                            <th><a href="/pengeluaran" class="btn -list-alt btn-success ">Kembali</a></th>
                        </tr>
                        </table>

                </div>
            </div>
        </div>
    </div>
<section>

@endsection