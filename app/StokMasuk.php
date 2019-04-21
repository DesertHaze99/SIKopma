<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class StokMasuk extends Model
{
    protected $table = 'stok_masuk';
    //primary key = "id"
    protected $primaryKey = 'id_masuk';
    
    //disable created_at and updated_at
    public $timestamps = false;
    //fillable column
    protected $fillable = [
        'tanggal_masuk',
        'barcode',
        'jumlah_masuk',
        'tanggal_kedaluarsa',
        'id_konter',
        'id_gudang'
    ];

}