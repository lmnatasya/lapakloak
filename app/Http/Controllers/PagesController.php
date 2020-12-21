<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\katalog;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Penjualan;

class PagesController extends Controller
{

  public function index()
  {
      $katalog = katalog::paginate(20);
      return view('index', ['katalog'=>$katalog]);
  }

  public function login()
  {
      return view('login');
  }

  public function register()
  {
      return view('register');
  }

  public function daftarKatalog(){
    return view('daftarKatalog');
  }

  public function tambahKatalog(){
    return view('tambahKatalog');
  }

  public function penjualan(){
    $user = User::where('id_role', '2')->get();
    return view('daftarPengepul', ['user'=>$user]);
  }

  public function detailKatalog(){
      $katalog= katalog::where('id', $_GET['id'])->get();
      return view('detailKatalog', ['katalog' => $katalog]);
  }

  public function keranjang(){
    return view('detailPembelianPelanggan');
  }

  public function riwayatPembelian(){
    return view('pembayaran');
  }

  public function konfirmasiPembelian(){
    return view('konfirmasiPembelian');
  }

  public function daftarPembelian(){
    return view('daftarPembelian');
  }

  public function formPenjualan(){
    return view('penjualan');
  }

  public function dataPengguna(){
    $user = User::all();
    return view('dataPengguna', ['user'=>$user]);
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function pengajuan(Request $request){

    Penjualan::create([

            'namaBarang' => $request['namaBarang'],
            'alamat' => $request['alamat'],
            'gambar' => $request['gambar'],
    ]);
    return view('riwayatPenjualan');
  }

  public function riwayatPenjualan(){
    return view ('riwayatPenjualan');
  }

  public function rekapPembelian(){
    $penjualan = Penjualan::all();
    return view('daftarPenjualan', ['penjualan'=>$penjualan]);
  }

  public function detailPenjualan(){
    return view ('detailPenjualan');
  }

  public function detailPembayaran(){
    return view ('detailPembayaran');
  }

  public function pembelian(){
    return view('pembelian');
  }

  public function detailPembelian(){
    return view('detailPembelian');
  }
}