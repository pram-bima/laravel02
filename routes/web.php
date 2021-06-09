<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
	return '<h1>Halaman About</h1>';
});

Route::get('/datapribadi/{bima}', function ($nama) {
	return "Nama Saya : $nama";
});

Route::get('/datasiswa', function () {
	return view('datasiswa', ["siswa" => ["Andi", "Budi", "Citra", "Desi"]]);
});

Route::get("/datasiswa", function(){
	return view('datasiswa',['siswa'=>['Bima Pramudya Asaddulloh','Andi', 'Budi','Catur']]);
});

//Route::get("/home", function(){
//	return view('home');
//});

Route::get("/about", function(){
	return view('about');
});

Route::get('/home','PageController@index');
Route::get('/tampil','PageController@devfram');
Route::get('/ujian','PageController@hasilujian');

Route::get('/reg','PendaftaranController@index'); // untuk memanggil form

Route::post('/proses-reg','PendaftaranController@proses_reg'); // untuk memproses data dari form

Route::get('/cal','KalkulatorController@index'); // untuk memanggil form

Route::post('/aksi-cal','KalkulatorController@aksi_cal'); // untuk memanggil form

Route::get('/post','PostController@index');

Route::post('/insert-post','PostController@insertPost');

Route::get('/input-post','PostController@inputPost');

Route::get('/select-post','PostController@selectPost');

Route::get('/update-post','PostController@updatePost');

Route::get('/delete-post','PostController@deletePost');




Route::get('/form-add','MahasiswaController@formAdd');
Route::post('/insert-mahasiswa','MahasiswaController@insertMahasiswa');
Route::get('/select-mahasiswa','MahasiswaController@selectMahasiswa');



