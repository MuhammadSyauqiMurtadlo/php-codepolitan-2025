<?php

$name = "Muhammad Syauqi Murtadlo | Full Stack Developer";
function printMessage()
{
  global $name;
  if (empty($name))
    echo "Selamat datang!";
  else
    echo "Selamat datang, $name!";
}

printMessage();
