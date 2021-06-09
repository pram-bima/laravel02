<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function get() {
        $result=DB::table('kategori')->get();
        return response([
            'success' => true,
            'message' => 'Data Semua Kategori',
            'data' => $result
        ], 200);
    }

    public function insert(Request $request) {
        $result=DB::table('kategori')->insert([
            'namaKat' => "$request->namaKat",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        if($result){
            return response([
                'success' => true,
                'message' => 'Data Kategori Berhasil Disimpan'
            ], 200);
        } else {
            return response([
                'success' => false,
                'message' => 'Data Kategori Gagal Disimpan'
            ], 400);
        }
    }

    public function getById($id){
        $result = DB::table('kategori')->where('id', $id)->first();
        return response([
            'success' => true,
            'message' => 'Detail Kategori',
            'data' => $result
        ], 200);
    }

    public function update(Request $request) {
        $result = DB::table('kategori')->where('id', $request->input('id'))->update([
            'namaKat' => "$request->namaKat",
            'updated_at' => now()
        ]);
        
        if($result) {
            return response([
                'success' => true,
                'message' => 'Data Kategori Berhasil Diubah'
            ], 200);
        } else {
            return response([
                'success' => false,
                'message' => 'Data Kategori Gagal Diubah'
            ], 400);
        }
    }

    public function delete($id) {
        $result = DB::table('kategori')->where('id', $id)->delete();
        if($result) {
            return response([
                'success' => true,
                'message' => 'Data Kategori Berhasil Dihapus'
            ], 200);
        } else {
            return response([
                'success' => false,
                'message' => 'Data Kategori Gagal Dihapus'
            ], 400);
        }
    }
}
