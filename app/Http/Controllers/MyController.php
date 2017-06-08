<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    public function percobaan()
    {
    	$a = "alif";
    	return "nama saya adalah".$a;
    }
     public function percobaan2()
    {
    	return view('about');
    }
    public function percobaan3()
    {
    	$a = "alif";
        $b = "XI RPL 2";
        $c = "SMK ASSALAAM";
    	return view('latihan.saya',compact('a','b','c'));
    }
    public function percobaan4()
    {
        $a = 1;
        $b = 2;
        $c = 3;
        return view('latihan.seleksi',compact('a','b','c'));
    }
        public function percobaan5()
    {
        $buah = ['mangga','jeruk','apel','anggur','duren'];
        $mahluk = ['komodo','ikan','monyet','kangguru','burung'];
        $komputer = ['keyboard','speaker','monitor','cpu','mouse'];
        return view('buah',compact('buah','mahluk','komputer'));
    }
    



}
