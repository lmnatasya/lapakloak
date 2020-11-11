@extends('layout/main')
@section('title','Lapak Loak')
@section('navbar')
    <h1 class="logo mr-auto"><a href="/pembeli" class="text-success">Lapak Loak</a></h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="/pembeli">Home</a></li>
          <li><a href="/pembeli#services">Katalog</a></li>
          <li><a href="/pembeli#cekharga">Cek Harga</a></li>
          <li><a href="/pembeli#about">About</a></li>
        </ul>
      </nav><!-- .nav-menu -->
    <a href="/keluar" class="btn scrollto btn-light">Log Out</a>
@endsection
@section('container')
<section id="services" class="services">
    <div class="container">
        <div class="row">
            @foreach($katalog as $katalog_barang)
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                
                    <div class="icon-box" style="width:100%">
                    <div class="icon"><i class="icofont-heart-beat"></i></div>
                    <h4><a href="/katalog">{{$katalog_barang->nama_barang}}</a></h4>
                    <p>Harga : {{$katalog_barang->harga}}</p>
                    </div>
                </div>
                <div class="description col-lg-6">
                        <h1 class="font-weight-bold">{{$katalog_barang->nama_barang}}</h1><br>
                        <hr>
                    <div class="harga">
                        <p>Harga : </p><h2>Rp. {{$katalog_barang->harga}}</h2>
                    </div>
                    <div class="stock">
                        <p>Sisa Stock : </p> <p class="h5">Stock Terbatas<{{$katalog_barang->stok}}</p>
                    </div>
                    <br><br>
                    <a href=""><button type="button" class="btn btn-success">Beli Sekarang</button></a>
                </div>
                
                @endforeach
        </div>
    </div>
</section>

@endsection