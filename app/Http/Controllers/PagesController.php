<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\katalog;
use App\pertumbuhan_tanaman;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */

    //guest
    public function index()
    {
        // dump(Auth::guest());
        // dump(Auth::guard('penjual'));
        $katalog = DB::table('katalog')->get();
        return view('index', ['katalog' => $katalog]);
    }
    public function login()
    {
        // dump(Auth::guest());
        // dump(Auth::guard('penjual'));
        return view('login');
    }
    public function katalog()
    {
        $katalog= katalog::where('id', $_GET['id'])->get();
        return view('katalog', ['katalog' => $katalog]);
    }
    public function daftar()
    {
        // dump(Auth::guest());
        return view('register');
    }

    //pembeli
    public function pembeli()
    {
        // dump(Auth::guest());
        // dump(Auth::guard('penjual'));
        // dump(Auth::guard('pembeli'));
        $katalog = DB::table('katalog')->get();
        return view('pembeli', ['katalog' => $katalog]);
    }
    public function katalogPembeli()
    {
        $katalog= katalog::where('id', $_GET['id'])->get();
        return view('katalogPembeli', ['katalog' => $katalog]);
    }
    

    //penjual
    public function penjual()
    {
        // dump(Auth::guest());
        // dump(Auth::guard('penjual'));
        $katalog_barang = DB::table('katalog')->get();
        return view('penjual', ['katalog' => $katalog_barang]);
    }
    public function cekharga()
    {
        // dump(Auth::guest());
        // dump(Auth::guard('penjual'));
        $cekharga = DB::table('harga_jual')->get();
        return view('penjual', ['harga_jual' => $cekharga]);
    }
    public function katalogPenjual()
    {
        // dump(Auth::guest());
        $katalog_barang = DB::table('katalog')->get();
        return view('katalogPenjual', ['katalog' => $katalog_barang]);
    }
    public function tambahkatalogPenjual()
    {
        // dump(Auth::guest());
        $katalog_penjual = DB::table('katalog')->get();
        return view('tambahkatalogPenjual', ['katalog' => $katalog_penjual]);
    }
    public function tambahKatalog(Request $kiriman)
    {
        $this->validate($kiriman,[
            'namatanaman' => 'required|min:4',
            'stok' => 'required',
            'harga' => 'required|min:3'
        ]);
        katalog::create([
            'nama_barang' => $kiriman->namabarang,
            'stok' => $kiriman->stok,
            'harga' => $kiriman->harga,
            'gambar' => NULL,
            'id_penjual' => 1
        ]);
        return redirect('/katalogPenjual');
    }
    public function tambahCekHarga()
    {
        // dump(Auth::guest());
        // dump(Auth::guard('penjual'));
        $cekharga = DB::table('harga_jual')->get();
        return view('tambahCekHarga', ['harga_jual' => $cekharga]);
    }
    
}