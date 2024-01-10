<?php

/*1.megoldás

$a[] = "S. Balázs";
$a[] = "H. Szabolcs";
$a[] = "F. László";
$a[] = "G. Zoltán";
$a[] = "H. Ferenc";
$a[] = "K. Márton";
$a[] = "B. László";
$a[] = "K. Dominik";
$a[] = "J. Dániel";
$a[] = "V. Szabolcs";
$a[] = "B. Marcell";
$a[] = "S. Attila";
$a[] = "H. Márk";
$a[] = "R. Dávid";
$a[] = "Tanár";
$a[] = "T. Márton";



$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}


echo $hint === "" ? "Nincs találat" : $hint;*/

//2.megoldás
$q = $_REQUEST["q"];

$tipp = "";


$con = mysqli_connect('localhost', 'phpteszt', 'iyD(VcxgbZ.6Pp]*', 'ulesrend');
mysqli_set_charset($con, "utf8");


if (!$con) {
    die('Connection failed: ' . mysqli_error($con));
}


$sql = "SELECT nev FROM osztaly";
$result = mysqli_query($con, $sql);


if (!$result) {
    die('Query error: ' . mysqli_error($con));
}

$nevek = array();
while ($row = mysqli_fetch_array($result)) {
    $nevek[] = $row['nev'];
}

if ($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);
    foreach ($nevek as $nev) {
        if (stristr($q, substr($nev, 0, $len))) {
            if ($tipp === "") {
                $tipp = $nev;
            } else {
                $tipp .= ", $nev";
            }
        }
    }
}

echo $tipp === "" ? "Nincs találat" : $tipp;

mysqli_close($con);


?>