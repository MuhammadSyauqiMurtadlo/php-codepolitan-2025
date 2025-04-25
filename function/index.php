<?php

$name = "Muhammad Syauqi Murtadlo";
function cetakPesan()
{
  global $name;
  if (empty($name))
    echo "Selamat datang!";
  else
    echo "Selamat datang, $name!";
}

cetakPesan();
