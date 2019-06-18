<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>E Ticaret Projesi</title>

    </head>
    <body>
      @php
      $yas= 25;
      @endphp
      Naber {{$isim . ' ' . $soyisim}}? {{$yas}} yaşındasın!
      <hr>
      @if ($isim == 'Ömer')
      Hoşgeldin KRAL!
      @else
      Hoşgeldin Moruq
      @endif
      <hr>
      @switch($isim)
        @case('Ömer')
        Hoşgeldin Kral!
        @break
        @default
        Naber?
      @endswitch
      <hr>
      @for ($i = 0; $i <= 10; $i++)
        Döngü: {{$i}}
      @endfor
      <hr>
      @foreach ($isimler as $isim)
        {{$isim . ($isim !== end($isimler)? ',' : '')}}
      @endforeach
      <hr>
      @foreach ($kullanicilar as $kullanici)
        @continue($kullanici['id'] ==1)
        <li>{{$kullanici['id'] . ' - ' .$kullanici['kullanici_adi']}}</li>
        @break($kullanici['id']==4)
      @endforeach

    </body>
</html>
