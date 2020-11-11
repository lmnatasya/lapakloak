@extends('layout/mainadmin')
@section('title','Penjual Page')
@section('container')
    <section id="main-content">
        <section class="wrapper">
            <!--overview start-->
            <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"></i> Katalog</h3>
                <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="/penjual">Home</a></li>
                <li></i>Katalog</li>
                </ol>
            </div>
            </div>
        
            <!-- page start-->
            <div class="row">
            <div class="col-sm-6">
                <section class="panel">
                <header class="panel-heading">
                    Katalog
                </header>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Stok</th>
                        <th>Harga</th>
                        <th>Gambar</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($katalog as $katalog)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$katalog->nama_barang}}</td>
                        <td>{{$katalog->stok}}</td>
                        <td>{{$katalog->harga}}</td>
                        <td>{{$katalog->gambar}}</td>
                        <td class="text-right"><button class="btn btn-warning">Ubah</button> <button class="btn btn-danger">Hapus</button></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </section>
                <a href="{{route('tambahKatalog')}}"><button class="btn btn-success">Tambah Data</button></a>
            </div>
        </section>
    </section>
@endsection