<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Supplier extends Model
{
    protected $table = 'suplier';
    //primary key = "id"
    protected $primaryKey = 'id_suplier';
    
    //disable created_at and updated_at
    public $timestamps = false;
    //fillable column
    protected $fillable = [
    	'nama_suplier',
		'alamat_suplier',
        'nohp_suplier',
        'email_suplier',
        'npwp_suplier'
    ];

}