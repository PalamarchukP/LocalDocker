<?php

//a
$ab = "/a..b/";
$str = 'ahb acb aeb aeeb adcb axeb';
echo preg_match($ab, $str);
echo "<br>";

//b
$regex = "/(\d)+/";
$str = "a1b2c3";
echo preg_replace_callback($regex, 'power', $str);
function power($matches)
{
    $nmaches = pow($matches[0], 3);
    return $nmaches;
}