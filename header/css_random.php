<?php 
header('Content-type: text/css');
$hue = rand(0, 255);
?>
h1 {
  background-color: hsl(<?= $hue ?>, 65%, 69%);
}