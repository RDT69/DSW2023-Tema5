<?php 
//mostrar PDF
header('Content-type: application/pdf');

//se llamara downloaded.pdf
header('Content-Disposition: attachment; filename="downloaded.pdf"');

//mostrar el PDF
readfile('original.pdf');