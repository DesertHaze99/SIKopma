<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class StafGudang extends Model
{
    protected $table = 'staf_gudang';
    //primary key = "id"
    protected $primaryKey = 'id_gudang';
    
    //disable created_at and updated_at
    public $timestamps = false;
    //fillable column
    protected $fillable = [
        'nik'
    ];

}