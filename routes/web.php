<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\studentcontroller;

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
Route::get('/students', [studentcontroller::class, 'index']);
Route::get('/students/create/{id}', [studentcontroller::class, 'create'])->name('students.create');
Route::get('/students/store/{id}', [studentcontroller::class, ''])->name('students.store');
Route::get('/students/delete/{id}', [studentcontroller::class, 'delete'])->name('students.delete');




Route::get('/siswa', function () {
    return  "saya anak rajin";
});

Route::get('/siswa/{id}', function ($id) {
    return "saya anak rajin dengan id $id";
})->where('id', '[0-9]+');


Route::get('/siswa/{id}/{nama}', function ($id, $nama) {
    return "saya anak rajin dengan id $id dan dengan nama $nama";
})->where(['id'=> '[0-9]+', 'nama'=> '[a-z,A-Z]+']);



