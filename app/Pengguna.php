<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Pengguna extends Model
{
    protected $table = 'user';
    //primary key = "id"
    protected $primaryKey = 'nik';
    
    //disable created_at and updated_at
    public $timestamps = false;
    //fillable column
    protected $fillable = [
    	'nama_user',
		'password',
        'jabatan'
    ];

}