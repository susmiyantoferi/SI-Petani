@extends('layout/v_template')

@section('title','Detail Ladang')
    
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
                            <th>{{ $ladang->id_ladang }}</th>
                        </tr>
                        <tr>
                            <th width="10px">Nama</th>
                            <th width="30px">:</th>
                            <th>{{ $ladang->nama }}</th>
                        </tr>
                        <tr>
                            <th width="10px">Create Date</th>
                            <th width="30px">:</th>
                            <th>{{ $ladang->create_date }}</th>
                        </tr>
                        <tr>
                            <th width="10px">Update Date</th>
                            <th width="30px">:</th>
                            <th>{{ $ladang->update_date }}</th>
                        </tr>
                        <tr>
                            <th><a href="/ladang" class="btn -list-alt btn-success ">Kembali</a></th>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>
<section>


@endsection