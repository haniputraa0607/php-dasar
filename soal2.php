<?php 
  echo "SOAL 2 <br><br>";
  //CASE 1
  echo "CASE 1 <br><br>";
  $array = [
    range(1,8),
    range(9,16),
    range(17,24),
    range(25,32),
    range(33,40),
    range(41,48),
    range(49,56),
    range(57,64),
  ];
  $kolom = 8;
  $baris = 8;
  membuattabel($array,$kolom,$baris);
  function membuattabel($array,$kolom,$baris){
    echo '
      <table width="400" height="400" cellpadding="0" cellspacing="0">';
      for($i=0;$i<$baris;$i++){
        echo '<tr style="text-align:center;">';
          for($j=0;$j<$kolom;$j++){
              if($i==0||$i==6||$i==3){
                if($j<=1){
                  echo '<td style="color:white; background-color: black">'.$array[$i]{$j}.'</td>';
                }elseif($j>=4&&$j%2==0){
                  echo '<td style="color:white; background-color: black">'.$array[$i]{$j}.'</td>';
                }else {
                  echo '<td>'.$array[$i]{$j}.'</td>';
                }
              }elseif($i==1||$i==4||$i==7){
                if($j==7){
                  echo '<td>'.$array[$i]{$j}.'</td>';
                }elseif($j!=0&&20%$j==0){
                  echo '<td style="color:white; background-color: black">'.$array[$i]{$j}.'</td>';
                }else{
                  echo '<td>'.$array[$i]{$j}.'</td>';
                }
              }elseif($i==2||$i==5){
                if($j<=3&&$j%2==0){
                  echo '<td style="color:white; background-color: black">'.$array[$i]{$j}.'</td>';
                }elseif($j>=4&&30%$j==0){
                  echo '<td style="color:white; background-color: black">'.$array[$i]{$j}.'</td>';
                }else{
                  echo '<td>'.$array[$i]{$j}.'</td>';
                }
              }
          }   
        echo '</tr>';
          
      }
    echo '
    </table>';
  }

  //CASE 2
  echo "<br>CASE 2 <br>";
  $input = 'DFHKNQ';
  $enkripsi = enkripsi($input);
  echo $enkripsi;
  function enkripsi($input){
    $pecah = str_split($input);
    for($i=0;$i<count($pecah);$i++){
      //ubah huruf ke angka
      $num = ubahkeAngka($pecah[$i]);
      if($i==0){
        $en = $num + 1;
      } elseif($i%2==1){
        $en = $num - ($i+1);
        if($en<0){
          $en = 26 + $en;
        }
      } else{
        $en = $num + ($i+1);
      }
      $balik = ubahkeHuruf($en);
      $pecah[$i] = $balik;
    }
    $gabung = implode($pecah);
    return "Hasil enkripsi dari $input adalah $gabung";
  }
  function ubahkeAngka($huruf){
    $alphabet = range('a', 'z');
    $alpha_flip = array_flip($alphabet);
    $lower = strtolower($huruf);
    $hasil = $alpha_flip["$lower"];
    return $hasil;
  }
  function ubahkeHuruf($angka){
    $alphabet = range('A', 'Z');
    if($angka <= 25){
      return $alphabet[$angka];
    }
  }

?>