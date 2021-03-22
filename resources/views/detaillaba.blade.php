@extends('layout/v_template')

@section('title','Detail Laba')
    
@section('content')


<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header table-responsive">

                    <table class="table">
                        <tr>
                            <th width="10px">Id Laba</th>
                            <th width="30px">:</th>
                            <th>{{ $laba->id_laba }}</th>
                        </tr>
                        <tr>
                            <th width="10px">Id Pendapatan</th>
                            <th width="30px">:</th>
                            <th>{{ $laba->id_pendapatan }}</th>
                        </tr>
                        <tr>
                            <th width="10px">Id Pengeluaran</th>
                            <th width="30px">:</th>
                            <th>{{ $laba->id_pengeluaran }}</th>
                        </tr>
                        <tr>
                            <th width="10px">Nama</th>
                            <th width="30px">:</th>
                            <th>{{ $laba->nama }}</th>
                        </tr>
                        <tr>
                            <th width="10px">Hasil</th>
                            <th width="30px">:</th>
                            <th>{{ $laba->hasil }}</th>
                        </tr>
                        <tr>
                            <th width="10px">Create Date</th>
                            <th width="30px">:</th>
                            <th>{{ $laba->create_date }}</th>
                        </tr>
                        <tr>
                            <th width="10px">Update Date</th>
                            <th width="30px">:</th>
                            <th>{{ $laba->update_date }}</th>
                        </tr>
                        <tr>
                            <th><a href="/laba" class="btn -list-alt btn-success ">Kembali</a></th>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>
<section>


@endsection