<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use App\Pengguna;
use App\Supplier;
use App\StafKonter;
use App\StafGudang;
use DB;


class UserController extends Controller {

    public function index(){
       $user = Pengguna::all();

        return view('daftaruser', ['user' => $user ] );
    }

    public function daftarsuplier(){
       $daftarsuplier = Supplier::all();

        return view('daftarsuplier', ['daftarsuplier' => $daftarsuplier ] );
    }

    public function datastafkonter(){
       $datastafkonter = StafKonter::join('user','user.nik', '=', 'staf_konter.nik')->get();

        return view('datastafkonter', ['datastafkonter' => $datastafkonter ] );
    }


    public function datastafgudang(){
       $datastafgudang = StafGudang::join('user','user.nik', '=', 'staf_gudang.nik')->get();

        return view('datastafgudang', ['datastafgudang' => $datastafgudang ] );
    }

    

    


}


