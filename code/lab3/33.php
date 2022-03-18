<?php 

$A = scandir("driving_license_category/A"); 
$B = scandir("driving_license_category/B"); 
$C = scandir("driving_license_category/C"); 

echo "A: ";
foreach ($A as $i) {
    if($i > 1)
    echo $i, "<br>";
}

echo "B: ";
foreach ($B as $i) {
    if($i > 1)
    echo $i, "<br>";
}

echo "C: ";
foreach ($C as $i) {
    if($i > 1)
    echo $i, "<br>";
}