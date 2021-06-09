<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index(){
    	return view(''); // ngeload form
    }

    public function proses_reg(Request $request){
    	$validasi = $request->validate([
    		'nama' => 'required|min:3|max:100',
    		'jenis_kelamin' => 'required|in:P,L',
    		'jurusan' => 'required',
    		'alamat' => 'required',
    	]);
    	echo $validasi['nama'];
    	echo "<br>";
    	echo $validasi['jenis_kelamin'];
    	echo "<br>";
    	echo $validasi['jurusan'];
    	echo "<br>";
    	echo $validasi['alamat'];
    	echo "<br>";
    }
}
