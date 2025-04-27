<?php

$alas = 5;
$tinggi = 10;

function hitungLuasSegitiga($alas, $tinggi)
{
  $luas = ($alas * $tinggi) / 2;
  return $luas;
}

$luasSegitiga = hitungLuasSegitiga($alas, $tinggi);
echo $luasSegitiga;
