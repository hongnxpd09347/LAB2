<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TinController;
use App\Http\Controllers\QTinController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ThongtinController;


Route::get('/', function () {
    return view('welcome');
});

//LAB1
// Route::get('/', [TinController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/lien-he', [TinController::class, 'lienhe']);
Route::get('/ct/{id}', [TinController::class, 'lay1tin']);
Route::get('/thongtinsv', [ThongtinController::class, 'index']);

//LAB2
Route::get('/txn', function(){
    $query = DB::table('tin')
    ->select('id', 'tieuDe', 'xem')
    ->orderBy('xem', 'desc')
    ->limit(10);
    $data = $query->get();
    foreach($data as $tin) echo "<p> {$tin->tieuDe} </p>";
});
Route::get('/tinmoi', function(){
    $query = DB::table('tin')
    ->select('id', 'tieuDe', 'ngayDang')
    ->orderBy('ngayDang', 'desc')
    ->limit(10);
    $data = $query->get();
    return view('tinmoi', ['data' => $data]);
});
Route::get('/tintrongloai/{id}', function($id) {
    $query = DB::table('tin')   
    ->select('id', 'tieuDe', 'tomTat')
    ->where('idLT','=', $id)
    ->orderBy('ngayDang', 'desc');
    $data = $query->get();
    return view('tintrongloai', ['data'=>$data]);
});
Route::get('/tin/{id}', function($id) {
    $tin = DB::table('tin')->where('id', $id)->first();
    return view('chitiettin', ['tin'=>$tin]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
