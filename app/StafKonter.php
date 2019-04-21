<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class StafKonter extends Model
{
    protected $table = 'staf_konter';
    //primary key = "id"
    protected $primaryKey = 'id_konter';
    
    //disable created_at and updated_at
    public $timestamps = false;
    //fillable column
    protected $fillable = [
        'nik'
    ];

}