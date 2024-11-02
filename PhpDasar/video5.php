<?php

    // Operator  METEMATIKA

    $a = 5;
    $b = 2;

    $c = $a + $b;

    echo $c.'<br>';

    $c= $a - $b;
    echo $c.'<br>';

    $c= $a * $b;
    echo $c.'<br>';

    $c= $a / $b;
    echo floor($c).'<br>';                                                                                                                                                  

    $c= $a % $b;
    echo $c.'<br>';

    // Operator Logika

    $d = 2;
    $e = 2;

    $f = $d < $e;
    echo $f;

    $f = $d > $e;
    echo $f;

    $f = $d = $e;
    echo $f;

    $f = $d != $e;
    echo $f.'<br>';

    // Increment
    $d--;
    echo $d.'<br>';

    // Operator String
    $kata = 'Sura';
    $kota = 'Baya';

    $hasil = $kata.$kota;
    $hasil =$hasil.' Kota Pahlawan';
    echo $hasil;
?>