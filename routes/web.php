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


Route::get('/lihatstok', 'ProductsController@stok')->name('lihatstok');
Route::get('lihatstok/{barcode}','ProductsController@updateStok')->name('updateStok');
Route::get('/hapusStok/{barcode}', 'ProductsController@hapusStok')->name('hapusStok');



Route::get('/stokmasuk','ProductsController@stokmasuk')->name('stokmasuk');
Route::get('stokmasuk/{id_masuk}','ProductsController@updateMasuk')->name('updateMasuk');
Route::get('/tambahStok', 'ProductsController@tambahStok')->name('tambahStok');
Route::get('/hapusStokMasuk/{id_masuk}', 'ProductsController@hapusStokMasuk')->name('hapusStokMasuk');



Route::get('/kadaluarsaproduk','ProductsController@kadaluarsa')->name('kadaluarsaproduk');
Route::get('kadaluarsaproduk/{barcode}','ProductsController@updateKadaluarsa')->name('updateKadaluarsa');



Route::get('/retur','ProductsController@retur')->name('retur');

Route::get('/ekspordatapenjualan', 'ProductsController@stok')->name('ekspordatapenjualan');

Route::get('/purchaseorder', 'ProductsController@purchaseorder')->name('purchaseorder');

Route::get('/penerimaanbarang', 'ProductsController@penerimaanbarang')->name('penerimaanbarang');

Route::get('/invoice', 'ProductsController@invoice')->name('invoice');

Route::get('/pembayaran', 'ProductsController@pembayaran')->name('pembayaran');



Route::get('/daftarproduk', 'ProductsController@daftarproduk')->name('daftarproduk');



Route::get('/daftaruser', 'UserController@index')->name('daftaruser');

Route::get('/datastafkonter', 'UserController@datastafkonter')->name('datastafkonter');

Route::get('/daftarsuplier', 'UserController@daftarsuplier')->name('daftarsuplier');

Route::get('/datastafgudang', 'UserController@datastafgudang')->name('datastafgudang');






Route::get('/', function () {
    return view('layouts/app');
});


Route::get('/hasilstockopname',function(){
    return view('hasilstockopname');
})->name('hasilstockopname');


Route::get('/rekapbayar',function(){
    return view('rekapbayar');
})->name('rekapbayar');