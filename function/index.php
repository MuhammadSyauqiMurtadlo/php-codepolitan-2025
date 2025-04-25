<?php

function cetakPesan($name = "Syauqi")
{
  if (empty($name))
    echo "Selamat datang!";
  else
    echo "Selamat datang, $name!";
}

cetakPesan();
