<?php

$name = "Muhammad Syauqi Murtadlo | Full Stack Developer";
file_put_contents("name.txt", $name);
$file = file_get_contents("name.txt");
echo $file;
