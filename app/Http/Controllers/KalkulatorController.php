<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function index(){
    	return view('kalkulator'); // ngeload form
    }

   public function aksi_cal(Request $request){
   		$validasi	 	= $request->validate([
            'angka1'	=> 'required|numeric',
            'angka2'	=> 'required|numeric',
            'operasi'	=> 'required|required|in:penjumlahan,pengurangan,perkalian,pembagian',
        ]);
        $hasil = 0;
	   	switch($validasi["operasi"]){
            case "pertambahan":
                $hasil	= $validasi["angka1"]+$validasi["angka2"];
                break;
            case "pengurangan":
                $hasil	= $validasi["angka1"]-$validasi["angka2"];
                break;
            case "perkalian":
                $hasil	= $validasi["angka1"]*$validasi["angka2"];
                break;
            case "pembagian":
                $hasil	= $validasi["angka1"]/$validasi["angka2"];
                break;
        };
        $panggil = array(
            "operasi"	=>$validasi["operasi"],
            "angka 1"	=>$validasi["angka1"],
            "angka 2"	=>$validasi["angka2"],
            "hasil"		=>$hasil
        );
        return view('aksi_cal')->with('panggil',$panggil);
   }
}
