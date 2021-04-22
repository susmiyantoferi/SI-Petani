@extends('layout.v_template')
@section('title', 'Halaman Pengguna')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header table-responsive">
                        <h3 class="box-title">List Of Pengguna</h3><br>
                        
                        <a href=" /pengguna/add" class="btn btn-primary ">Add Data</a>

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
                                        <th>Jenis</th>
                                        <th>Create Date</th>
                                        <th>Update Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pengguna as $penggunas)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $penggunas->nama }}</td>
                                            <td>{{ $penggunas->jenis }}</td>
                                            <td>{{ $penggunas->create_date }}</td>
                                            <td>{{ $penggunas->update_date }}</td>
                                            <td>
                                                <a href="/pengguna/detail/{{ $penggunas->id_pengguna }}"
                                                    class="btn glyphicon glyphicon-list-alt btn-success ">Detail</a>
                                                <a href=" "
                                                    class="btn glyphicon glyphicon-check btn-warning ">Edit</a>
                                                <button type="button" class="btn glyphicon glyphicon-trash btn-danger"
                                                    data-toggle="modal" data-target=" ">
                                                    Delete
                                                </button>
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
        </div>
    </div>

@endsection
