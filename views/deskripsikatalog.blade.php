@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
<a href="{{ url('home')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>Kembali</a>
</div>
<div class="col-md-12 mt-2">
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="{{ url('home')}}">Katalog</a></li>
<li class="breadcrumb-item active" aria-current="page">Detail Katalog</li>
</ol>
</nav>
</div>
<div class="col-md-12 mt-3">
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-md-6">
<strong>Gambar</strong>
</div>
<div class="col-md-6 mt-5">
<h2>Nama</h2>
<table class="table">
<tbody>
<tr>
<td>Harga</td>
<td>:</td>
<td>Rp. xxx</td>
</tr>
<tr>
<td>Stok</td>
<td>:</td>
<td>xx</td>
</tr>
<tr>
<td>Berat</td>
<td>:</td>
<td>xx</td>
</tr>
<tr>
<td>Deskripsi</td>
<td>:</td>
<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt quam commodi aperiam obcaecati magnam! Dignissimos, repellendus sit a illum aspernatur iure accusantium, consectetur asperiores maiores ipsa eveniet quaerat nihil sequi!</td>
</tr>
<form action="" method="post">
<tr>
<td>Jumlah Pesan</td>
<td>:</td>
<td>
<input class="form-control" type="text" name="jumlah_pesan" required="">
</td>
</tr>
<tr>
<td></td>
<td></td>
<td>
<button type="submit" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Masukkan Keranjang</button>
</td>
</tr>
</form>
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