<?php

if('POST' === $_SERVER['REQUEST_METHOD']) {
   create($_POST['driving_license_category'],$_POST['heading']);
}

function create($c,$name) {
   $file = fopen("./driving_license_category/$c/$name.txt", 'w+');
   $text = "Driver: " . $_POST['email'] . "  ";

   fwrite($file,$text);
   fwrite($file,$_POST['description']);

   fclose($file);
}