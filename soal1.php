<?php
  echo "SOAL 1 <br><br>";
  // CASE 1
  echo "CASE 1 <br>";
  $nilai = "72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86";
  $angka = array_map('intval', explode(' ',$nilai));
  $panjang_angka = count($angka);
  $jumlah = 0;
  // rata-rata
  echo "Nilai = $nilai <br>";
  for($i=0;$i<=$panjang_angka;$i++){
    $jumlah = $jumlah + $angka[$i];
    $rata = $jumlah/$panjang_angka;
  };
  echo "Nilai rata-rata = $rata <br>";
  //urutkan
  sort($angka);
  $i = 0;
  foreach($angka as $a){
    $urut[$i] = $a;
    $i++;
  }
  //cek duplikat
  $index=0;
  for($i=0;$i<=$panjang_angka;$i++){
    $awal = $urut[$i];
    $akhir = $urut[$i+1];
    if($awal!=$akhir){
      $tanpaduplikat[$index]=$awal;
      $index++;
    }    
  }
  //tertinggi
  echo "7 Nilai tertinggi = ";
  for($i=(count($tanpaduplikat)-1);$i>=(count($tanpaduplikat)-7);$i--){
    echo "$tanpaduplikat[$i] ";
  }
  //terendah
  echo "<br>7 Nilai terendah = ";
  for($i=0;$i<7;$i++){
    echo "$tanpaduplikat[$i] ";
  }
  

  // CASE 2
  echo "<br><br> CASE 2 <br>";
  //input string
  $string = "TranSISI";
  echo "Input = $string <br>";
  //ambil lowercase dari string simpan ke array
  preg_match_all( '/[a-z]/', $string, $kecil);
  $kecil = $kecil[0];
  //jumlahkan lowercase di array
  $jumlahkecil = count($kecil);
  echo 'Kata "'.$string.'" memiliki '.$jumlahkecil.' huruf kecil di dalamnya';


  //CASE 3
  echo "<br><br> CASE 3 <br>";
  //input kalimat
  $kalimat = "Jakarta adalah ibukota negara replubik Indonesia";
  //pecahkan kalimat ke array
  $pecah = explode(' ',$kalimat);
  $panjang_pecah= count($pecah);
  if($pecah[$panjang_pecah-1]==''){
    unset($pecah[$panjang_pecah-1]);
  }
  $panjang_pecah= count($pecah);
  //masuk fungsi unigram, bigram dan trigram
  $unigram = unigram($pecah,$panjang_pecah);
  $bigram = bigram($pecah,$panjang_pecah);
  $trigram = trigram($pecah,$panjang_pecah);
  function unigram($unigram,$panjang_unigram){
    echo "Unigram =";
    for($i=0;$i<$panjang_unigram;$i++){
      if($i != ($panjang_unigram-1)){
        echo " $unigram[$i],";
      } else {
        echo " $unigram[$i]";
      }
    }
  }
  function bigram($bigram,$panjang_bigram){
    echo "<br>Bigram =";
    $i = 0;
    while($i<$panjang_bigram){
      $j = $i+1;
      if($bigram[$j]==''){
        echo " $bigram[$i]";
      } else {
        if($i != ($panjang_bigram-2)){
          echo " $bigram[$i] $bigram[$j],";
        } else {
            echo " $bigram[$i] $bigram[$j]";
        }
      }
      $i = $i + 2;
    }
  }
  function trigram($tigram,$panjang_tigram){
    echo "<br>Trigram =";
    $i = 0;
    while($i<$panjang_tigram){
      $j = $i+1;
      $k = $j+1;
      if($tigram[$j]=='' && $tigram[$k]==''){
        echo " $tigram[$i]";
      } elseif($tigram[$k]==''){
        echo " $tigram[$i] $tigram[$j]";
      } else {
        if($i != ($panjang_tigram-3)){
          echo " $tigram[$i] $tigram[$j] $tigram[$k],";
        } else {
            echo " $tigram[$i] $tigram[$j] $tigram[$k]";
        }
      }
      $i = $i + 3;
    }
    
  }
?>