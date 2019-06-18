<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnasayfaController extends Controller
{
    public function index()
    {
      $isim = 'Ömer';
      $soyisim = 'YÜCE';
      $isimler = ['Ömer', 'Faruk', 'Botan'];
      $kullanicilar = [
        ['id'=>1 , 'kullanici_adi'=>'Ömer' ],
        ['id'=>2 , 'kullanici_adi'=>'Halil' ],
        ['id'=>3 , 'kullanici_adi'=>'Muhammed' ],
        ['id'=>4 , 'kullanici_adi'=>'Birgül' ],
        ['id'=>5 , 'kullanici_adi'=>'Yunus' ]
      ];
      return view('anasayfa', compact('isim', 'soyisim', 'isimler','kullanicilar'));
    }
}
