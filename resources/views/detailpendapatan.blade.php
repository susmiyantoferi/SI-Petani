@extends('layout/v_template')

@section('title','Detail Pendapatan')
    
@section('content')

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header table-responsive">

                    <table class="table">
                        <tr>
                            <th width="10px">Id Pendapatan</th>
                            <th width="30px">:</th>
                            <th>{{ $pendapatan->id_pendapatan }}</th>
                        </tr>
                        <tr>
                            <th width="10px">Ladang Ke</th>
                            <th width="30px">:</th>
                            <th>{{ $pendapatan->id_ladang }}</th>
                        </tr>
                        <tr>
                            <th width="10px">Panen Ke</th>
                            <th width="30px">:</th>
                            <th>{{ $pendapatan->nama }}</th>
                        </tr>
                        <tr>
                            <th width="10px">Pendapatan</th>
                            <th width="30px">:</th>
                            <th>{{ $pendapatan->amount }}</th>
                        </tr>
                        <tr>
                            <th width="10px">Tanggal Dibuat</th>
                            <th width="30px">:</th>
                            <th>{{ $pendapatan->create_date }}</th>
                        </tr>
                        <tr>
                            <th width="10px">Tanggal Dirubah</th>
                            <th width="30px">:</th>
                            <th>{{ $pendapatan->update_date }}</th>
                        </tr>
                        <tr>
                            <th><a href="/pendapatan" class="btn -list-alt btn-success ">Kembali</a></th>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>
<section>

@endsection