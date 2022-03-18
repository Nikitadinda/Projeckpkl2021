@extends('layouts.frontend')
@section('content')
    <div class="container">
        <div class="section-title">
            <h2>Detail Kegiatan</h2>
        </div>
        <div class="card">
        <div class="row">
                <div class="col-sm-5">
                    <img src="{{ $datakegiatan->image() }}" width="500">
                </div>
                <div class="col-sm-7">
                    <h2 class="mt-5">{{ $datakegiatan->judul }}</h2>
                    <p>{!! $datakegiatan->keterangan !!}</p>
                </div>
        </div>
        </div>
        <br>
        <br>
        <div class="form-group text-center">
            <a href="javascript:history.back()"><button type="submit" class="btn btn-outline-primary"
            style="background:#5cb874;
            border-color: #5cb874;
            color: white;
            border-radius:25px;
            width:400px;
            font-size: 18px;">Kembali</button></a>
        </div>
    </div>
@endsection