@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
   <div class="col-md-12 mt-2">
   <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="{{ url('home')}}">Katalog</a></li>
      </ol>
   </nav>
   </div>
      <div class="col-md-4">
         <div class="card">
            <h3>Gambar</h3>
            <div class="card-body">
                <h5 class="card-title">Nama</h5>
                <p class="card-text">
                <strong>Harga :</strong> Rp. xxx
                <hr>
                <strong>Stok :</strong> xx
                <br>
                <strong>Berat :</strong> xx
                <br>
                <strong>Deskripsi :</strong>
                <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis delectus hic in nam vero enim, commodi quod sequi corrupti provident itaque pariatur. Sint iste quo pariatur nulla, nam beatae accusantium?
                </p>
                <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Pesan</a>
           </div>
         </div>
      </div>
   </div>
</div>
@endsection