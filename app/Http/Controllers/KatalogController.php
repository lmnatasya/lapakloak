<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\katalog;

class KatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $katalog = katalog::all();
        return view('daftarKatalog', ['katalog'=>$katalog]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
            [
                'name' => ['required', 'string', 'max:25'],
                'harga' => ['required', 'integer', 'min:1'],
                'stok' => ['required', 'integer', 'min:1'],
                'deskripsi' => ['required', 'string'],
                'gambar' => ['required'],
            ]
        );

        $harga = $request['harga'] + ($request['harga']*10/100);

        katalog::create([
            'nama' => $request['nama'],
            'harga' => $harga,
            'stok' => $request['stok'],
            'deskripsi' => $request['deskripsi'],
            'gambar' => $request['gambar'],
        ]);

        return redirect('/katalog');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $katalog= katalog::where('id', $_GET['id'])->get();
        return view('editKatalog', ['katalog' => $katalog]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {   
        $this->validate($request,
            [
                'name' => ['required', 'string', 'max:25'],
                'harga' => ['required', 'integer', 'min:1'],
                'stok' => ['required', 'integer', 'min:1'],
                'deskripsi' => ['required', 'string'],
                'gambar' => ['required'],
            ]
        );

        $harga = $request->harga + ($request->harga*10/100);

        $katalog = katalog::find($_GET['id']);
        $katalog->nama = $request->nama;
        $katalog->stok = $request->stok;
        $katalog->harga = $harga;
        $katalog->gambar = $request->gambar;
        $katalog->deskripsi = $request->deskripsi;
        $katalog->save();

        return redirect('/katalog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
