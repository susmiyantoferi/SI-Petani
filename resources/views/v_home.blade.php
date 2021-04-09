@extends('layout/v_template')

@section('title','Home')

@section('content')
     <!--<h1>Home</h1> -->
     <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h4>{{$countLadang}}</h4> <!-- Penambhan fitur count row data pada table -->

                    <p>Jumlah Data Ladang</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="/ladang" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h4>{{$sumPendapatan}}</h4> <!-- Penambhan fitur sum row data pada table -->

                    <p>Sum of Amount Pendapatan</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="/pendapatan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h4>{{$sumPengeluaran}}</h4> <!-- Penambhan fitur sum row data pada table -->
                    <p>Sum of Amount Pengeluaran</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="/pengeluaran" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

         <div class="col-lg-3 col-xs-6">
             <!-- small box -->
             <div class="small-box bg-red">
                 <div class="inner">
                 @foreach($labaBersih as $labas) <!-- Penambhan fitur read dari view database laba_bersih-->
                     <h4>{{ $labas->laba_bersih }}</h4>
                     @endforeach
                     <p>Total Profit All Ladang</p>
                 </div>
                 <div class="icon">
                     <i class="ion ion-pie-graph"></i>
                 </div>
                 <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
             </div>
         </div>


    </div>
    <div class="row">
        <div class="col-md-12 centered">
            <!-- AREA CHART -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Penghasilan Bersih</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="chart">
                        <canvas id="areaChart" style="height:250px"></canvas>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
    <!-- /.row -->
@endsection
