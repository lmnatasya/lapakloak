<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
	public function index()
    {
        return view('admin');
    }

    public function profilAdmin() {
		return view('profilAdmin');
	}

	public function editProfilAdmin(){
		return view('editProfilAdmin');
	}

    public function updateProfilAdmin(Request $request){
    	$request->user()->update(
    		$request->all()
    	);
    	return redirect('/profiladmin');
    }

	public function profilPelanggan() {
		return view('profilPelanggan');
	}

	public function editProfilPelanggan(){
		return view('editProfilPelanggan', [
            'user' => Auth::User()
        ]);
	}

    public function updateProfilPelanggan(Request $request){
        $user = Auth::User();
        $req = $request->all();
        $user->update($req);
    	return redirect('/profilpelanggan');
    }

    public function profilPengepul() {
		return view('profilPengepul');
	}

	public function editProfilPengepul(){
		return view('editProfilPengepul');
	}

    public function updateProfilPengepul(Request $request){
    	$request->user()->update(
    		$request->all()
    	);
    	return redirect('/profilpengepul');
    }
}
