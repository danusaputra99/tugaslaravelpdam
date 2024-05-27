<?php

namespace App\Http\Controllers\ProdukController;

use Illuminate\Http\Controllers\request;

class ProdukController extends Controller
{
    public function produk(){
        echo "ini halaman 1 di controller home";
    }
    public function index(){
        return view('folderproduk.filebaru');
    }
      

    // public function Produk(){
    //     return view ('product.detail');
    // }

    // public function cek_plat(){
    //     $angka = 80;
    //     if($angka%4==0) $hasil = "Bilangan Genap";
    //     else $hasil = "Bilangan Gajil";
    //     echo $angka;
    // }
    public function Angka(){
        return view('folderproduk.formAngka');

    }
    public function from_action(Request $request){
        $angka = $request->angka;
        if($angka%2==0) $hasil = "Bilangan Genap";
        else $hasil = "Bilangan Ganjil";
    echo $hasil;
    }

}
