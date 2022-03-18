@extends('adminlte::page')

@section('title', 'Pondok Yatim | Home')

@section('content_header')

    <h3>Dashboard</h3>

@endsection

@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <a href="{{ route('data_anak.index') }}">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ DB::table('data_anaks')->count() }}</h3>
                            <p>Total Anak Asuh</p>
                        </div>
                        <div class="icon">
                            <i class="ion fas fa-handshake"></i>
                        </div>
                    </div>
                </a>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <a href="{{ route('data_kegiatan.index') }}">
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>{{ DB::table('data_kegiatans')->count() }}</h3>
                            <p>Total Data Kegiatan</p>
                        </div>
                        <div class="icon">
                            <i class="ion fas fa-users"></i>
                        </div>
                    </div>
                </a>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <a href="{{ route('donasi.index') }}">
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>{{ DB::table('donasis')->count() }}</h3>
                            <p>Total Yang Berdonasi</p>
                        </div>
                        <div class="icon">
                            <i class="ion fas fa-user"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <a href="{{ route('galeri.index') }}">
                    <div class="small-box bg-info ">
                        <div class="inner">
                            <h3>{{ DB::table('galeris')->count() }}</h3>
                            <p>Total Galeri</p>
                        </div>
                        <div class="icon">
                            <i class="ion far far-fw fad fa-list-alt"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    @endsection

@section('css')

@endsection

@section('js')

@endsection
