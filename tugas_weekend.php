<?php
function luas_kubus($sisi){
  return $sisi * $sisi;
}
function sisi_kubus($luas){
  return sqrt($luas/6);
}
function luas_lingkaran($radius){
  return M_PI*$radius*$radius;
}
function keliling_lingkaran($radius){
  return M_PI*$radius*2;
}
function luas_tabung($tinggi, $radius){
  return round(($tinggi*keliling_lingkaran($radius))+luas_lingkaran($radius));
}

function vol_tabung($tinggi, $radius){
  return round($tinggi*luas_lingkaran($radius),2);
}

echo "
<ol>
  <li>
    Hitunglah Luas Permukaan kubus dengan panjang setiap rusuknya sebagai berikut:
      <ol type=a>
        <li>4 cm</li>
        <li>7 cm</li>
        <li>10 cm</li>
        <li>12 cm</li>
      </ol>
      <b>Luas   dengan panjang rusuk 4 cm : ".luas_kubus(4)." cm<sup>2</sup> </b><br/>
      <b>Luas   dengan panjang rusuk 7 cm : ".luas_kubus(7)." cm<sup>2</sup></b><br/>
      <b>Luas   dengan panjang rusuk 10 cm : ".luas_kubus(10)." cm<sup>2</sup> </b><br/>
      <b>Luas   dengan panjang rusuk 12 cm : ".luas_kubus(12)." cm<sup>2</sup> </b><br/>

  </li><br/>
  <li>
    Sebuah kotak kayu berbentuk kubus memiliki luas permukaan 3.750 cm<sup>2</sup>. Hitunglah panjang sisi kotak kayu tersebut ?
    <br/><b>Jadi  panjang sisi kotak kayu tersebut adalah ".sisi_kubus(3750)." cm </b>
  </li><br/>
  <li>
    Sebuah tabung memiliki jari – jari dan tinggi masing – masing 10 cm dan 30 cm, lalu tentukan lah berapa volume dari tabung tersebut?
    <br/><b>Jadi, Volume nya adalah ".vol_tabung(30,10)." cm<sup>3</sup> </b>
  </li><br/>
  <li>
    Sebuah tabung memiliki jari – jari 14 cm dan tinggi nya 10 cm, maka tentukan lah luas nya?
    <br/><b>Jadi, luas nya adalah ".luas_tabung(10,14)." cm<sup>2</sup></b>
  </li><br/>
  <li>
    Sebuah lingkaran memiliki jari-jari sebesar 14 cm. Tentukan luas lingkaran tersebut ?
    <br/><b>Jadi, Luas nya adalah ".round(luas_lingkaran(14),2)." cm<sup>2</sup> </b>
  </li><br/>
  <li>
    Sebuah roda sepeda yang berbentuk lingkaran memiliki diameter sebesar 14 cm. Maka luas dan keliling roda tersebut adalah ?
    <br/><b>Jadi, Keliling nya adalah ".round(keliling_lingkaran(7),2)." cm </b>
    <br/><b>Jadi, Luas nya adalah ".round(luas_lingkaran(7),2)." cm<sup>2</sup> </b>
  </li><br/>
  <li>
    Pak Andi memiliki sebuah mobil yang panjang jari-jari ban mobil tersebut sebesar 21 cm. Saat mobil tersebut berjalan, ban mobil tersebut berputar sebanyak 200 kali. Berapakah jarak yang ditempuh mobil tersebut ?
    <br/><b>Jadi, Jarak tempuh nya adalah ".round((keliling_lingkaran(21)*200),2)." cm</b>
  </li>
</ol>
";
?>
