<?php 
  echo "SOAL 3 <br><br>";
  $arr = [
    ['f','g','h','i'],
    ['j','k','p','q'],
    ['r','s','t','u'],
  ];
  //input string
  $input = 'fghi';
  $input2 = 'fghp';
  $input3 = 'fjrstp';

  //fungsi cari
  $cari = cari($arr,$input);
  $cari2 = cari($arr,$input2);
  $cari3 = cari($arr,$input3);
  if($cari){
    echo 'String "'.$input.'" terhadap Array bernilai TRUE <br>';
  } else {
    echo 'String "'.$input.'" terhadap Array bernilai FALSE <br>';
  }
  if($cari2){
    echo 'String "'.$input2.'" terhadap Array bernilai TRUE <br>';
  } else {
    echo 'String "'.$input2.'" terhadap Array bernilai FALSE <br>';
  }
  if($cari3){
    echo 'String "'.$input3.'" terhadap Array bernilai TRUE <br>';
  } else {
    echo 'String "'.$input3.'" terhadap Array bernilai FALSE <br>';
  }
  function cari($arr, $input){
    $arr_row1 = $arr[0];
    $arr_row2 = $arr[1];
    $arr_row3 = $arr[2];
    //pecah string input
    $karakter = str_split($input);
    foreach($karakter as $k){
      $status = "Mencari";
      foreach($arr_row1 as $r1){
        if($k == $r1){
          $status = "Ketemu";
        } 
      }
      foreach($arr_row2 as $r2){
        if($k == $r2){
          $status = "Ketemu";
        } 
      }
      foreach($arr_row3 as $r3){
        if($k == $r3){
          $status = "Ketemu";
        } 
      }
      if($status=='Mencari'){
        return false;
      }
    }
    return true;
  }
?>