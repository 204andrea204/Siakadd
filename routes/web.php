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
Route::get('/images/{filename}', function ($filename) {
    $path = storage_path('images') . '/' . $filename;
    $file = File::get($path);
    $type = File::mimeType($path);
    $response = Response::make($file);
    $response->header("Content-Type", $type);
    return $response;
});

Route::get('/suadmin', function () {
    return view('suadmin.index');
});

Route::get('/user-admin1', function () {
    return view('suadmin.user-admin.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('halaman')->group(function(){
	Route::get('/', 'PageController@login');
	Route::get('/register', 'PageController@register');
	Route::get('/logout', 'PageController@logout');
	Route::post('/proses-login', 'PageController@proses_login');
	Route::post('/proses-register', 'PageController@proses_register');
});

Route::prefix('jurusan')->group(function(){
	Route::get('/', 'JurusanController@index');
	Route::post('/add', 'JurusanController@add');
    Route::get('/edit/{id}', 'JurusanController@edit');
    Route::post('/update', 'JurusanController@update');
	Route::get('/delete/{id}', 'JurusanController@delete');
	});

Route::prefix('siswa')->group(function(){
	Route::get('/', 'SiswaController@index');
	Route::post('/add', 'SiswaController@add');
	Route::get('/tambah', 'SiswaController@tambah');
    Route::get('/edit/{id}', 'SiswaController@edit');
    Route::post('/update', 'SiswaController@update');
	Route::get('/delete/{id}', 'SiswaController@delete');
	});

Route::prefix('mapel')->group(function(){
	Route::get('/', 'MapelController@index');
	Route::post('/add', 'MapelController@add');
    Route::get('/edit/{id}', 'MapelController@edit');
    Route::post('/update', 'MapelController@update');
	Route::get('/delete/{id}', 'MapelController@delete');
	});

Route::prefix('guru')->group(function(){
	Route::get('/', 'GuruController@index');
	Route::post('/add', 'GuruController@add');
	Route::get('/tambah', 'GuruController@tambah');
    Route::get('/edit/{id}', 'GuruController@edit');
    Route::post('/update', 'GuruController@update');
	Route::get('/delete/{id}', 'GuruController@delete');
	});

Route::prefix('berita')->group(function(){
	Route::get('/', 'BeritaController@index');
	Route::post('/add', 'BeritaController@add');
	Route::get('/tambah', 'BeritaController@tambah');
    Route::get('/edit/{id}', 'BeritaController@edit');
    Route::post('/update', 'BeritaController@update');
	Route::get('/delete/{id}', 'BeritaController@delete');
	});

Route::prefix('sekbid')->group(function(){
	Route::get('/', 'SekbidController@index');
	Route::post('/add', 'SekbidController@add');
	Route::get('/tambah', 'SekbidController@tambah');
    Route::get('/edit/{id}', 'SekbidController@edit');
    Route::post('/update', 'SekbidController@update');
	Route::get('/delete/{id}', 'SekbidController@delete');
	});

Route::prefix('ekskul')->group(function(){
	Route::get('/', 'EkskulController@index');
	Route::post('/add', 'EkskulController@add');
	Route::get('/tambah', 'EkskulController@tambah');
    Route::get('/edit/{id}', 'EkskulController@edit');
    Route::post('/update', 'EkskulController@update');
	Route::get('/delete/{id}', 'EkskulController@delete');
	});

Route::prefix('prestasi')->group(function(){
	Route::get('/', 'PrestasiController@index');
	Route::post('/add', 'PrestasiController@add');
	Route::get('/tambah', 'PrestasiController@tambah');
    Route::get('/edit/{id}', 'PrestasiController@edit');
    Route::post('/update', 'PrestasiController@update');
	Route::get('/delete/{id}', 'PrestasiController@delete');
	});

Route::prefix('galeri')->group(function(){
	Route::get('/', 'ImageController@index');
	Route::post('/add', 'ImageController@add');
	Route::get('/delete/{id}', 'ImageController@delete');
 	Route::post('/save', 'ImageController@save');
	});
	
Route::prefix('visimisi')->group(function(){
	Route::get('/', 'VisimisiController@indexvisimisi');
	Route::post('/update', 'VisimisiController@visimisi_update');
	
	});




























































Route::group(['middleware' => 'admin'], function(){

	Route::get('/admin/index', 'AdminController@index');
});


Route::group(['middleware' => 'suadmin'], function(){
	Route::get('/suadmin/index', 'SuadminController@index');

Route::prefix('user-admin')->group(function(){
	Route::get('/', 'UserController@index');
	Route::post('/status', 'UserController@status');
	Route::post('/add', 'UserController@add');
    Route::get('/edit/{id}', 'UserController@edit');
    Route::post('/update', 'UserController@update');
	Route::get('/delete/{id}', 'UserController@delete');
	});

});