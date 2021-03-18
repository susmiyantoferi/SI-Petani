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

                          {{-- Start Box pencarian --}}

                        <div class="box-tools">
                            <form th:action="@{/karyawan/list}" method="get">
                                <div class="input-group input-group-sm" style="width: 250px;">
                                    <input type="text" name="value" class="form-control pull-right"
                                           placeholder="Pencarian Berdasarkan Nama" th:if="${key} == null"/>
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    {{-- end Box pencarian --}}


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
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{$pendapatans->id_ladang}}</td>
                                        <td>{{$pendapatans->nama}}</td>
                                        <td>{{$pendapatans->amount}}</td>
                                        <td>{{$pendapatans->create_date}}</td>
                                        <td>{{$pendapatans->update_date}}</td>
                                        <td>
                                            <a href="pendapatan/detail/{{ $pendapatans->id_pendapatan }}" class="btn glyphicon glyphicon-list-alt btn-success ">Detail</a>
                                            <a href="pendapatan/edit/{{ $pendapatans->id_pendapatan }}" class="btn glyphicon glyphicon-check btn-warning ">Edit</a>
                                            <button type="button" class="btn glyphicon glyphicon-trash btn-danger" data-toggle="modal" data-target="#delete{{ $pendapatans->id_pendapatan }}">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            {{-- Penambahan fitur paginate --}}
                        <div class="container text-center">
                            {{ $pendapatan->links() }}
                        </div>
                        {{-- Penambahan fitur paginate --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <section>

        @foreach ($pendapatan as $pendapatans)

        <div class="modal modal-danger fade" id="delete{{ $pendapatans->id_pendapatan }}">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">{{ $pendapatans->nama }}</h4>
                </div>
                <div class="modal-body">
                  <p>Apakah Anda Ingin Menghapus Data Ini ?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
                  <a href="/pendapatan/delete/{{ $pendapatans->id_pendapatan }}" class="btn btn-outline">Yes</a>
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

