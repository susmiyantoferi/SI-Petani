@extends('layout.v_template')
@section('title', 'Halaman Ladang')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header table-responsive">
                        <h3 class="box-title">List Of Ladang</h3><br>
                        <a href="/ladang/add" class="btn btn-primary ">Add Data</a>
                        <a href="/ladang/print" target="_blank" class="btn fa fa-print btn-success">Print</a>
                        {{-- <a href="/ladang/printpdf" target="_blank" class="btn btn-success">Print PDF</a> --}}
                        @if (session('pesan'))
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h4><i class="icon fa fa-check"></i> Success!</h4>
                                {{ session('pesan') }}.
                            </div>
                        @endif

                          {{-- Start Box pencarian --}}
                          <div class="box-tools">
                            <form action="/searchLadang" method="get">
                                <div class="input-group input-group-sm" style="width: 250px;">
                                    <input type="search" name="searchLadang" class="form-control pull-right"
                                           placeholder="Pencarian Data ..." th:if="${key} == null"/>
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    {{-- end Box pencarian --}}

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
                                @foreach ($ladang as $ladangs)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $ladangs->nama }}</td>
                                        <td>{{ $ladangs->create_date }}</td>
                                        <td>{{ $ladangs->update_date }}</td>
                                        <td>
                                            <a href="/ladang/detail/{{ $ladangs->id_ladang }}"
                                                class="btn glyphicon glyphicon-list-alt btn-success ">Detail</a>
                                            <a href="/ladang/edit/{{ $ladangs->id_ladang }}"
                                                class="btn glyphicon glyphicon-check btn-warning ">Edit</a>
                                            <button type="button" class="btn glyphicon glyphicon-trash btn-danger"
                                                data-toggle="modal" data-target="#delete{{ $ladangs->id_ladang }}">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{-- Penambahan fitur paginate --}}
                        <div class="container text-center">
                            {{ $ladang->links() }}
                        </div>
                        {{-- Penambahan fitur paginate --}}

                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
        <section>

            @foreach ($ladang as $ladangs)

                <div class="modal modal-danger fade" id="delete{{ $ladangs->id_ladang }}">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">{{ $ladangs->nama }}</h4>
                            </div>
                            <div class="modal-body">
                                <p>Apakah Anda Ingin Menghapus Data Ini ?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
                                <a href="/ladang/delete/{{ $ladangs->id_ladang }}" class="btn btn-outline">Yes</a>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->

        </section>
        <!-- /.content -->
        </div>

        @endforeach

    @endsection
