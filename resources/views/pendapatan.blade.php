@extends('layout.v_template')
@section('title','Halaman Pendapatan')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header table-responsive">
                        <h3 class="box-title">List Of Pendapatan</h3><br>
                        <a href="/pendapatan/add" class="btn btn-primary ">Add Data</a>
                        @if (session('pesan'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4><i class="icon fa fa-check"></i> Success!</h4>
                            {{ session('pesan') }}.
                          </div>
                        @endif
                        <div class="box-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Ladang</th>
                                    <th>Panen Ke</th>
                                    <th>Pendapatan</th>
                                    <th>Create Date</th>
                                    <th>Update Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($pendapatan as $pendapatans)
                                    <tr>
                                        <td></td>
                                        <td>{{$pendapatans->id_ladang}}</td>
                                        <td>{{$pendapatans->nama}}</td>
                                        <td>{{$pendapatans->amount}}</td>
                                        <td>{{$pendapatans->create_date}}</td>
                                        <td>{{$pendapatans->update_date}}</td>
                                        <td>
                                            <a href="pendapatan/detail/{{ $pendapatans->id_pendapatan }}" class="btn glyphicon glyphicon-list-alt btn-success ">Detail</a>
                                            <a href="pendapatan/edit/{{ $pendapatans->id_pendapatan }}" class="btn glyphicon glyphicon-check btn-warning ">Edit</a>
                                            <a href="" class="btn glyphicon glyphicon-trash btn-danger ">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <section>

@endsection

