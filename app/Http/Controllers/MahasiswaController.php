<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MahasiswaController extends Controller
{
    public function formAdd() {
    	return view ('form_daftar');
    }

    public function insertMahasiswa(Request $request) {
        $request->validate([
            'nim' => 'required|numeric|digits:8'
        ]);
        
        $result = DB::insert('
            INSERT INTO mahasiswas (nim, namaMahasiswa, jurusan, alamat, agama, jenis_kelamin)
            VALUES ('.$request->nim.', "'.$request->namaMahasiswa.'", "'.$request->jurusan.'", "'.$request->alamat.'", "'.$request->agama.'", "'.$request->jenisKelamin.'")');
        if ($result) {
            return redirect('select-mahasiswa');
        }
    }

    public function selectMahasiswa() {
        $result = DB::select("SELECT * FROM mahasiswas");
        return view('selectmahasiswa', ['selectmahasiswa' => $result]);
    }

    public function updateMahasiswa() {

    }

    public function deleteMahasiswa() {

    }
}
