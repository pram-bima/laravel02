<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{

    public function get() {
        $result=DB::table('buku')->get();
//        return view('get_buku', ['get_buku' => $result]);
        return response([
            'success' => true,
            'message' => 'Data Semua Buku',
            'data' => $result
        ], 200);
    }

    public function formBook() {
    	return view ('form_buku');
    }

    public function insert(Request $request) {
        $request->validate([
            'tahun_terbit' => 'required|numeric|digits:4'
        ]);

        $result=DB::table('buku')->insert([
            'idKat' => "$request->idKat",
            'judul' => "$request->judul",
            'pengarang' => "$request->pengarang",
            'penerbit' => "$request->penerbit",
            'tahun_terbit' => "$request->tahun_terbit",
            'sampul' => "$request->sampul",
            'sinopsis' => "$request->sinopsis",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
//        if ($result) {
//            return redirect('getbook');
//        }
        if($result){
            return response([
                'success' => true,
                'message' => 'Data Buku Berhasil Disimpan'
            ], 200);
        } else {
            return response([
                'success' => false,
                'message' => 'Data Buku Gagal Disimpan'
            ], 400);
        }
    }

    public function getById($id){
        $result = DB::table('buku')->where('id', $id)->first();
        return response([
            'success' => true,
            'message' => 'Detail Buku',
            'data' => $result
        ], 200);
    }

    public function update(Request $request) {
        $result = DB::table('buku')->where('id', $request->input('id'))->update([
            'judul' => "$request->judul",
            'pengarang' => "$request->pengarang",
            'penerbit' => "$request->penerbit",
        ]);
//        if ($result) {
//            return redirect('getbook');
//        }
        if($result) {
            return response([
                'success' => true,
                'message' => 'Data Buku Berhasil Diubah'
            ], 200);
        } else {
            return response([
                'success' => false,
                'message' => 'Data Buku Gagal Diubah'
            ], 400);
        }
    }

    public function delete($id) {
        $result = DB::table('buku')->where('id', $id)->delete();
//        dump($result);
        if($result) {
            return response([
                'success' => true,
                'message' => 'Data Buku Berhasil Dihapus'
            ], 200);
        } else {
            return response([
                'success' => false,
                'message' => 'Data Buku Gagal Dihapus'
            ], 400);
        }
    }
}
