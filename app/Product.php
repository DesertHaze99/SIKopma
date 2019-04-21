<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $table = 'produk';
    //primary key = "id"
    protected $primaryKey = 'barcode';
    
    //disable created_at and updated_at
    public $timestamps = false;
    //fillable column
    protected $fillable = [
    	'nama_produk',
		'harga',
        'jumlah_stok',
        'deleted'
    ];

}