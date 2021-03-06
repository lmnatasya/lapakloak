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
    <section id="hero" class="d-flex align-items-center mb-0">
        <div class="container">
            <h1>Selamat Datang!</h1>
            <h2>Jual dan beli barang bekas yang ada di sekitarmu!</h2>
            <a href="#services" class="btn-get-started scrollto">Lihat Katalog</a>
        </div>
    </section>
    
    <!-- ======= Katalog Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title mb-5 mt-0">
          <h2>Katalog</h2>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{ url('/tambahkatalogAdmin') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {!! session('success') !!}
                            </div>
                        @endif
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama Produk</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- DIRECTIVE FORELSE SAMA DENGAN FOREACH -->
                                <!-- HANYA SAJA SUDAH FORELSE SUDAH DILENGKAPI FUNGSI UNTUK MENGECEK DATA ADA ATAU TIDAK SEHINGGA KITA TIDAK PERLU LAGI MENGGUNAKAN IF CONDITION -->
                                <!-- JIKA DATA KOSONG MAKA FUNGSI YANG BERJALAN ADALAH CODE BERADA PADA BLOCK CODE @EMPTY -->
                                @forelse($katalog as $katalog)
                                <tr>
                                    <!-- MENAMPILKAN VALUE DARI TITLE -->
                                    <td>{{ $katalog->nama_barang }}</td>
                                    <td>Rp {{ number_format($katalog->harga) }}</td>
                                    <td>{{ $katalog->stok }}</td>
                                    <td>{{ $katalog->gambar}}</td>
                                    <!-- TOMBOL DELETE MENGGUNAKAN METHOD DELETE DALAM ROUTING SEHINGGA KITA MEMASUKKAN TOMBOL TERSEBUT KEDALAM TAG <FORM></FORM> -->
                                    <td>
                                        <form action="{{ url('/katalogPenjual' . $katalog->id) }}" method="GET">
                                            <!-- @csrf ADALAH DIRECTIVE UNTUK MEN-GENERATE TOKEN CSRF -->
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE" class="form-control">
                                            <a href="{{ url('/katalogPenjual' . $katalog->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <button class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td class="text-center" colspan="6">Tidak ada data</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

      </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Cek Harga Section ======= -->
    <section id="cekharga" class="cekharga">
      <div class="container">

        <div class="section-title mb-5 mt-0">
          <h2>Cek Harga</h2>
        </div>

        <form method="GET" action="/pembeli#cekharga">
          <label><b>Kategori</b></label><br>
          <select name="kategori">
            <option value="pilihkategori">Pilih Kategori</option>
				    <option value="plastik">Plastik</option>
				    <option value="kertas">Kertas</option>
				    <option value="kaca">Kaca</option>
				    <option value="besi">Besi</option>
			    </select><br><br>
          <label><b>Jumlah barang</b></label><br>
          <input type="text" name="jumlah" placeholder="(dalam kg)"><br>
          <br><br>
          <input type="submit" name="cekharga" value="Cek Harga">
        </form>
      </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch">
            
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>About us</h3>
            <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi. Libero laboriosam sint et id nulla tenetur. Suscipit aut voluptate.</p>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Dine Pad</a></h4>
              <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
            </div>

          </div>
        </div>

      </div>
    </section>
    <!-- End About Section -->
@endsection

