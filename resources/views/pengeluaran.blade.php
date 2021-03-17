@extends('layout.v_template')
@section('title', 'Halaman Pengeluaran')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header table-responsive">
                        <h3 class="box-title">List Of Pengeluaran</h3><br>
                        <a href="/pengeluaran/add" class="btn btn-primary ">Add Data</a>
                        @if (session('pesan'))
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h4><i class="icon fa fa-check"></i> Success!</h4>
                                {{ session('pesan') }}.
                            </div>
                        @endif

                        {{-- Box pencarian --}}

                        <div class="box-tools">
                            <form th:action="@{/karyawan/list}" method="get">
                                <div class="input-group input-group-sm" style="width: 250px;">
                                    <input type="text" name="value" class="form-control pull-right"
                                        placeholder="Pencarian Berdasarkan Nama" th:if="${key} == null" />
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    {{-- Box pencarian --}}

                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Ladang</th>
                                    <th>Nama Jenis</th>
                                    <th>Pengeluaran</th>
                                    <th>Create Date</th>
                                    <th>Update Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pengeluaran as $pengeluarans)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pengeluarans->id_pendapatan }}</td>
                                        <td>{{ $pengeluarans->nama }}</td>
                                        <td>{{ $pengeluarans->amount }}</td>
                                        <td>{{ $pengeluarans->create_date }}</td>
                                        <td>{{ $pengeluarans->update_date }}</td>
                                        <td>
                                            <a href="pengeluaran/detail/{{ $pengeluarans->id_pengeluaran }}"
                                                class="btn glyphicon glyphicon-list-alt btn-success ">Detail</a>
                                            <a href="pengeluaran/edit/{{ $pengeluarans->id_pengeluaran }}"
                                                class="btn glyphicon glyphicon-check btn-warning ">Edit</a>
                                            <button type="button" class="btn glyphicon glyphicon-trash btn-danger"
                                                data-toggle="modal"
                                                data-target="#delete{{ $pengeluarans->id_pengeluaran }}">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{-- Penambahan fitur paginate --}}
                        <div class="container text-center">
                            {{ $pengeluaran->links() }}
                        </div>
                        {{-- Penambahan fitur paginate --}}

                    </div>
                </div>
            </div>
        </div>
        </div>
        <section>

            @foreach ($pengeluaran as $pengeluarans)

                <div class="modal modal-danger fade" id="delete{{ $pengeluarans->id_pengeluaran }}">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">{{ $pengeluarans->nama }}</h4>
                            </div>
                            <div class="modal-body">
                                <p>Apakah Anda Ingin Menghapus Data Ini ?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
                                <a href="/pengeluaran/delete/{{ $pengeluarans->id_pengeluaran }}"
                                    class="btn btn-outline">Yes</a>
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
