<?php

use App\Models\Product;
use App\Models\Student;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/dashboard', function(){
//     return view('welcome');
// });


// // section
// Route::get('/dashboard',function(){
//     return view('latihan2.dashboard');
// })->name('dashboard');

// Route::get('/daftar',function(){
//     return view('latihan2.daftar');
// })->name('daftar');

// Route::get('/main',function(){
//     return view('ujian.home');
// })->name('main');

// Route::get('/name',function(){
//     return view('ujian.nama');
// })->name('nama');

// Route::get('/asal',function(){
//     return view('ujian.asal');
// })->name('asal');

// Route::get('/prodi',function(){
//     return view('ujian.prodi');
// })->name('prodi');

// Route::get('/angkatan',function(){
//     return view('ujian.angkatan');
// })->name('angkatan');


// Route::get('/students',function(){
//     $students = Student::all();
//     return view('student',['students' => $students]);
// })->name('students');

// Route::get('/students/create',function(){
//      Student::create([
//         "name" => "Marr",
//         "nim" => "F1E123012",
//         "prodi" => "Matematika",
//         "alamat" => "Jambi",
//         "angkatan" => 2023
//     ]);
//     return 'data baru berhasil dibuat';
// })->name('studentsCreate');


// Route::get('/students/update/{id}',function($id){
//     Student::find($id)->update([
//         "name" => "Marr Bae",
//         "nim" => "F1E123012",
//         "prodi" => "Matematika",
//         "alamat" => "Jambi Timur",
//         "angkatan" => 2023
//     ]);
//     echo "data dengan id $id berhasil diupdate";
// })->name('studentUpdate');


// Route::get('/students/delete/{id}', function(int $id){
//     Student::find($id)->delete();
//     echo "student dengan id $id berhasil dihapus";
// })->name('studentDelete');


// Route::get('/products',function(){
//     $products = Product::all();
//     return view('product-view',[
//         'products' => $products
//     ]);
// });
// Route::get('/products/create',function(){
//     Product::create([
//         "code" => 10,
//         "name" => "Dairy Milk",
//         "description" => "Coklat nya manis banget",
//         "qty" => 30,
//         "price" => 20000
//     ]);
// });
// Route::get('/products/update/{id}',function(int $id){
//     Product::find($id)->update([
//         "code" => 90,
//         "name" => "Shampoo",
//         "description" => "Shampoo nya bagus",
//         "qty" => 20,
//         "price" => 3000
//     ]);
//     return redirect('/products')->with('status', 'data dengan id ' . $id . ' berhasil di update');
// });
// Route::get('/products/delete/{id}',function(int $id){
//     Product::find($id)->delete();
//     return redirect('/products')->with('status', 'data dengan id ' . $id . ' berhasil dihapus');
// });


// routing dengan controller
Route::resource('/products', ProductController::class);