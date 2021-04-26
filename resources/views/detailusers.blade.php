@extends('layout/v_template')

@section('title','Detail Users')
    
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
                            <th>{{ $users->id }}</th>
                        </tr>
                        <tr>
                            <th width="10px">Nama</th>
                            <th width="30px">:</th>
                            <th>{{ $users->name }}</th>
                        </tr>
                        <tr>
                            <th width="10px">Email</th>
                            <th width="30px">:</th>
                            <th>{{ $users->email }}</th>
                        </tr>
                        <tr>
                            <th width="10px">Password</th>
                            <th width="30px">:</th>
                            <th>{{ $users->password }}</th>
                        </tr>
                        <tr>
                            <th width="10px">Create Date</th>
                            <th width="30px">:</th>
                            <th>{{ $users->created_at }}</th>
                        </tr>
                        <tr>
                            <th width="10px">Update Date</th>
                            <th width="30px">:</th>
                            <th>{{ $users->updated_at }}</th>
                        </tr>
                        <tr>
                            <th><a href="/users" class="btn -list-alt btn-success ">Kembali</a></th>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>
<section>


@endsection