<?php

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

Route::get('/', 'AkademikController@index');

Route::get('/akademik/mahasiswa', 'AkademikController@getMahasiswa');
Route::get('/akademik/dosen', 'AkademikController@getDosen');

Route::get('/akademik/edit/mahasiswa/{id}', 'AkademikController@getMahasiswaEdit');
Route::get('/akademik/edit/dosen/{id}', 'AkademikController@getDosenEdit');

Route::post('/akademik/mahasiswa/edit', 'AkademikController@mahasiswaEdit')->name('edit.mahasiswa');
Route::post('/akademik/mahasiswa/hapus', 'AkademikController@hapusMahasiswa')->name('delete.mahasiswa');
Route::post('/akademik/dosen/edit', 'AkademikController@dosenEdit')->name('edit.dosen');
Route::post('/akademik/dosen/hapus', 'AkademikController@hapusDosen')->name('delete.dosen');

Route::get('/akademik/new-mahasiswa', 'AkademikController@newMahasiswa');
Route::get('/akademik/new-dosen', 'AkademikController@newDosen');

Route::post('/akademik/new-mahasiswa', 'AkademikController@newMahasiswaPost')->name('new.mahasiswa');
Route::post('/akademik/new-dosen', 'AkademikController@newDosenPost')->name('new.dosen');

Route::get('/akademik/join', 'AkademikController@joinContoh');
Route::get('/akademik/relationship', 'AkademikController@relationshipContoh');
Route::get('/akademik/raw', 'AkademikController@rawContoh');

Route::get('/akademik/mata-kuliah/{id}', 'AkademikController@getMatakuliahDetail');
Route::get('/akademik/pengajar/{id}', 'AkademikController@getPengajarDetail');