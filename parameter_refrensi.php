<?php

function parameterRefrensi(&$name)
{
  $name = "Syauqi";
}

$name = "Murtadlo";
parameterRefrensi($name);
echo $name;
// Output: Murtadlo