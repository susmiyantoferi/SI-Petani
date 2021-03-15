@extends('layout.v_template')
@section('title','Halaman Ladang')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header table-responsive">
                        <h3 class="box-title">List Of Ladang</h3><br>
                        <a href="/ladang/add" class="btn btn-primary ">Add Data</a>
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
                                    <th>Nama</th>
                                    <th>Create Date</th>
                                    <th>Update Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($ladang as $ladangs)
                                    <tr>
                                        <td></td>
                                        <td>{{$ladangs->nama}}</td>
                                        <td>{{$ladangs->create_date}}</td>
                                        <td>{{$ladangs->update_date}}</td>
                                        <td>
                                            <a href="/ladang/detail/{{ $ladangs->id_ladang }}" class="btn glyphicon glyphicon-list-alt btn-success ">Detail</a>
                                            <a href="/ladang/edit/{{ $ladangs->id_ladang }}" class="btn glyphicon glyphicon-check btn-warning ">Edit</a>
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

