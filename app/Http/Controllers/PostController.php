<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PostController extends Controller
{
	public function index(){
		return "Testing";
	}

    public function insertPost(Request $request) {
        $result = DB::insert("
        INSERT INTO posts(judul, isi_berita, kategori)
        VALUES ('$request->judul', '$request->isi_berita', '$request->kategori');
        ");
        return redirect('/select-post');
    }

    public function inputPost() {
    	return view('postberita');
    }

    public function selectPost(){
    	$result = DB::select('SELECT * FROM posts');//data berasal dari tabel posts
    	return view('tampilposts',['posts'=>$result]);
    }

    public function updatePost() {
    	$result = DB::update("UPDATE posts SET judul = 'test judul', isi_berita='test isi' WHERE id=2");
    	dump($result);
    }

    public function deletePost() {
    	$result = DB::delete("DELETE FROM posts WHERE id=5");
    	dump($result);
    }
}
