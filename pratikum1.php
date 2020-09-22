<?php  

    echo "<center>";
    $bntng=5;
    for($a=1; $a<=$bntng; $a++){
    for($d=1; $d<=$a; $d++){
      echo " &nbsp";
    }
    for($c=$bntng; $c>=$a; $c-=1){
      echo "*";
    }
    echo "<br>";
    }
    echo "</center>";


    echo "<center>";
    $str=10;
    while ($str>1){
      $f = $str;
      while ($f>=1){
        echo "*";
        $f = $f - 1;
      }
      echo "<br>";
      $str = $str - 2;
    }
    echo "</center>";


    echo "<center>";
    $str=5;
    for($x=5; $x>=1; $x--){
    for($y=1; $y<=1-$x; $y++){
      echo " ";
    }
    for($z=1; $z<$x; $z++){
      echo "$z";
    }
    for($w=$x; $w>=1; $w--){
      echo "$w";
    }
    echo "<br>";
    }
    echo "</center>";

?> 