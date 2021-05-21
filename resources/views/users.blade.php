@extends('layout.v_template')
@section('title', 'Halaman Users')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header table-responsive">
                        <h3 class="box-title">List Of Users</h3><br>
                        <a href="/users/add " class="btn btn-primary ">Add Data</a>

                        {{-- Box menu export file --}}
                        {{-- <div class="btn-group">
                            <ul class="nav navbar-nav">
                              <li class="dropdown">
                                <button type="button" class="btn fa fa-print btn-success" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Export File
                                  </button><ul class="dropdown-menu" role="menu">
                                  <li><a href="/users/print" target="_blank">PDF</a></li>
                                  <li><a href="/pengguna/penggunaexcel" target="_blank" >Microsoft Excel</a></li>
                                  </ul>
                              </li>
                            </ul>
                        </div> --}}
                        {{-- Box menu export file --}}

                        @if (session('pesan'))
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h4><i class="icon fa fa-check"></i> Success!</h4>
                                {{ session('pesan') }}.
                            </div>
                        @endif

                        {{-- Box pencarian --}}
                        <div class="box-tools">
                            <form action="/searchUsers" method="get">
                                <div class="input-group input-group-sm" style="width: 250px;">
                                    <input type="text" name="searchUsers" class="form-control pull-right"
                                        placeholder="Pencarian Data ..." th:if="${key} == null" />
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
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Create Date</th>
                                    <th>Update Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->password }}</td>
                                        <td>{{ $data->created_at }}</td>
                                        <td>{{ $data->updated_at }}</td>
                                        <td>
                                            <a href="/users/detail/{{ $data->id }} "
                                                class="btn glyphicon glyphicon-list-alt btn-success ">Detail</a>
                                            <a href="/users/edit/{{ $data->id }} "
                                                class="btn glyphicon glyphicon-check btn-warning ">Edit</a>
                                            <button type="button" class="btn glyphicon glyphicon-trash btn-danger"
                                                data-toggle="modal" data-target=" #delete{{ $data->id }} ">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                         {{-- Penambahan fitur paginate --}}
                         <div class="container text-center">
                            {{ $users->links() }}
                        </div>
                        {{-- Penambahan fitur paginate --}}

                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

    @foreach ($users as $data)
<div class="modal modal-danger fade" id="delete{{ $data->id }}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">{{ $data->email }}</h4>
        </div>
        <div class="modal-body">
          <p>Apakah Anda Ingin Menghapus Data Ini?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
          <a href="/users/delete/{{ $data->id }}" class="btn btn-outline">Yes</a>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endforeach

    @endsection
