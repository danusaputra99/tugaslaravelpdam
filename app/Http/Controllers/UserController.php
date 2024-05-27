<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user(){
      return view('folderbaru.produk');

    }
    public function cet_plat($angka){
      if ($angka%2==0) $hasil = "Bilangan Genap";
      else $hasil = "Bilangan Gajil";
      echo $hasil;
    }
    public function Form_angka(){
      return view('folderbaru.produk');
    }

    public function Form_action(Request $request){
      $angka= $request->angka;
      if($angka%2==0) $hasil = "Bilangan Genap";
      else $hasil = "Bilangan Ganjil";
      echo $hasil;
    }
}

