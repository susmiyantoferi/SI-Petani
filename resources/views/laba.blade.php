@extends('layout.v_template')
@section('title', 'Halaman Laba')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header table-responsive">
                        <h3 class="box-title">List Of Laba</h3><br>
                        <a href=" " class="btn btn-primary ">Add Data</a>
                        @if (session('pesan'))
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h4><i class="icon fa fa-check"></i> Success!</h4>
                                {{ session('pesan') }}.
                            </div>
                        @endif

                        {{-- Box pencarian --}}

                        <div class="box-tools">
                            <form th:action=" " method="get">
                                <div class="input-group input-group-sm" style="width: 250px;">
                                    <input type="text" name="value" class="form-control pull-right"
                                        placeholder="Pencarian Berdasarkan Nama" th:if="${key} == null" />
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    

                    {{-- Box pencarian --}}

                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Pendapatan Id</th>
                                    <th>Pengeluaran Id</th>
                                    <th>Nama</th>
                                    <th>Hasil</th>
                                    <th>Create Date</th>
                                    <th>Update Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($laba as $labas)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $labas->id_pendapatan }}</td>
                                    <td>{{ $labas->id_pengeluaran }}</td>
                                    <td>{{ $labas->nama }}</td>
                                    <td>{{ $labas->hasil }}</td>
                                    <td>{{ $labas->create_date }}</td>
                                    <td>{{ $labas->update_date }}</td>
                                    <td>
                                        <a href="/laba/detail/{{ $labas->id_laba }}"
                                            class="btn glyphicon glyphicon-list-alt btn-success ">Detail</a>
                                        <a href=""
                                            class="btn glyphicon glyphicon-check btn-warning ">Edit</a>
                                        <button type="button" class="btn glyphicon glyphicon-trash btn-danger"
                                            data-toggle="modal" data-target="">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        {{-- Penambahan fitur paginate --}}
                        <div class="container text-center">
                            {{ $laba->links() }}
                        </div>
                        {{-- Penambahan fitur paginate --}}

                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
        <section>

           

    @endsection
